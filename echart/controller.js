(function(Hydra) {
	//controllder继承base
	Hydra.module.extend('Base', 'Controller', function(bus) {

		var channelName = 'ControllerChannel';
		var tmpls = ['juicer', 'Handlebars'];
		var helper = {};

		return {
			/**
			 * 模块间事件绑定集合
			 * @type {Object}
			 *       {
			 *       	'ChannelName1': {'EventName1': Function, 'EventName2': Function}, 
			 *       	'ChannelName2': {'EventName1': Function}
			 *       }
			 */
			subscribers: {
				'ControllerChannel': {
					'Controller:rendercomplete': function() {

					}
				}
			},
			useTmpl: 0,
			/**
			 * 返回对象的value对应的key
			 * @param  {String} value value
			 * @param  {Object} obj   object
			 * @return {String}       key
			 */
			getKey: function(value, obj) {
				obj = obj || this.elements; //默认用elements
				var key = '';
				if ($.isPlainObject(obj)) {
					for (var k in obj) {
						 if (obj[k] === value) {
						 	key = k;
						 	break;
						 }
					}
				}
				return key;
			},
			/**
			 * 放置选择器
			 * @type {Object}
			 */
			selectors: {},
			/**
			 * 放置通过$后的数据，注意使用query不能在取不到当前作用范围的对象时，向上查找到document
			 * @type {Object}
			 */
			querys: {},
			/**
			 * 得到$后的数据 ,注意使用query不能在取不到当前作用范围的对象时，向上查找到document
			 * @param  {[String]} key [description]
			 * @param  {[Boolean]} refresh [description]
			 * @return {[jQuery]}     [description]
			 */
			getQuery: function(key, refresh) {

				var obj = refresh ? this.selectors : this.querys;
				var fn = $.fn;

				if ($.isPlainObject(obj)) {
					if ($.isEmptyObject(obj)) {
						this.refreshElements();
					}

					if (refresh) {
						var $wrapper = this.getWrapper();
						var $q = $(obj[key], $wrapper);
						this.querys[key] = $(obj[key], $wrapper); //更新到querys中
						return $q;
					}

					return obj[key] || fn;
				}
				return fn;
			},
			/**
			 * DOM对象与jQuery对象映射
			 * @type {Object} {'selector': '$element'}
			 */
			elements: {},
			/**
			 * 模块内与界面的事件绑定映射
			 * @type {Object} {'eventName selector': 'functionName'}
			 */
			events: {},
			/**
			 * 模版: 可以是在页面上通过<script type="text/template" id="example-template"></script>生成模版
			 * @type {String} script中type="text/template"中的id,或者是模版字符串
			 */
			template: '',
			/**
			 * 模板的内容所放置在页面的容器
			 * @type {String} 默认是body
			 */
			wrapper: 'body',
			/**
			 * 是否允许自动渲染
			 * @type {Boolean} 默认是允许
			 */
			autoRender: true,
			/**
			 * 是否允许缓存后台取得的数据
			 * @type {Boolean}
			 */
			allowCache: false,
			/**
			 * 缓存管理
			 * @type {Object}
			 * @private
			 */
			_cache: {},
			/**
			 * 后台url地址，用来和模板配合使用生成界面
			 * @type {String}
			 */
			url: '',
			/**
			 * 如果url不存在，直接可以用静态的数据
			 * @type {Object/Array}
			 */
			data: {},
			/**
			 * 与后台url配合的参数
			 * @type {[type]}
			 */
			param: null,
			/**
			 * 模版帮组集合
			 * @type {Object} {'methodName': function}
			 */
			helper: {},
			/**
			 * 初始化
			 */
			init: function() {
				//监听当前频道
				bus.subscribe(channelName, this);

				//容器的jQuery对象
				// this.$wrapper = $(this.wrapper);
					
				//取得选择器对应的jQuery对象
				this.refreshElements();
				//绑定当前模块内的事件
				this.delegateEvents();
				//发布渲染模版之前的事件
				bus.publish(channelName, this.getModuleName() + ':fetchbefore');
				//增加判断，只有autoRender和模版都存在才render
				if (this.autoRender && this.getTemplate()) {
				//渲染模版
					this.url ? this.remote(this.proxy(this.render, this)) : this.render(this.data);
				}
			},
			/**
			 * 模版
			 * @param  {String} template [description]
			 * @return {String}          [description]
			 */
			getTemplate: function(template) {
				var $template;
				template = template || this.template;

				try {
					$template = $(template);
				} catch (e) {
					return template;
				}
				
				//判断模版是从页面中的script取得，还是直接在js中拼接
				return $template.selector ? $template.html() : template;
			},
			/**
			 * 数据
			 * @param  {Object} data [description]
			 * @return {Object}      [description]
			 */
			getData: function(data) {
				data = data || this.data;
				return data;
			},
			/**
			 * 容器
			 * @param  {Object/String/Dom} wrapper [description]
			 * @return {Object}         [description]
			 */
			getWrapper: function(wrapper) {
				wrapper = wrapper || this.wrapper;
				var $wrapper = wrapper instanceof jQuery ? wrapper : $(wrapper);
				return $wrapper;
			},
			/**
			 * 获得后台的数据
			 * @param  {Function} callback [description]
			 */
			remote: function(callback) {
				//如果允许缓存就不再向后台发送请求，直接用缓存下来的数据
				if (this.allowCache && this._cache[this.getModuleName()]) {
					callback(this._cache[this.getModuleName()]);
					return false;
				}
				$.ajax(this.url, {
					context: this,
					data: this.param,
					cache: this.allowCache,
					dataType: 'json',
					success: function(data) {
						callback(data);
						//缓存数据
						this._cache[this.getModuleName()] = data;
					}
				});
			},
			/**
			 * 将数据和模版结合生成html插入到页面中
			 * @param  {Object/Array} data   数据
			 * @param  {String/Object} action 插入节点的方式，默认是html 或者映射表
			 * @param  {String} template 模版
			 * @param  {Object/String} wrapper 容器
			 */
			render: function(data, action, template, wrapper) {
				var html;

				//第二个参数是不是Object
				if ($.isPlainObject(arguments[1])) {
					var opt = $.extend({}, action);
					action = opt.action;
					template = opt.template;
					wrapper = opt.wrapper;
				}

				bus.publish(channelName, this.getModuleName() + ':renderbefore', data);
				
				data = this.getData(data);

				action = action || 'html';

				template = this.getTemplate(template);

				if (!template) {
					throw('Template not exist!');
				}
				//调用模版的帮助方法
				this._setHelper();

				//使用模版编译
				try {
					switch (tmpls[this.useTmpl]) {
						case 'juicer':
							html = juicer(template, data);
							break;
						case 'Handlebars':
							html = Handlebars.compile(template)(data);
							break;
						default:
							html = juicer(template, data);
					}
				} catch (e) {
					app.log('Template render error: ' + e.message);
				}
				
				//将html插入到页面
				wrapper = this.getWrapper(wrapper);
				wrapper[action](html);

				//发布渲染模版之后的事件
				bus.publish(channelName, this.getModuleName() + ':rendercomplete', data);
			},
			/**
			 * 模版的帮助方法
			 * @private
			 */
			_setHelper: function() {
			helper = $.extend({
                	/**
                	 * 多语言帮助方法
                	 * @param  {String} value [description]
                	 * @return {String}       [description]
                	 */
                	__: function(value) {
                		//交给utils工具的多语言处理
                		return app.utils.__(value);
                	}
                }, helper, this.helper);
                for (var name in helper) {
                    if (helper.hasOwnProperty(name)) {
                    	switch (tmpls[this.useTmpl]) {
                    		case 'juicer':
                    			juicer.register(name, $.proxy(helper[name], this)); //注册juicer帮助方法
                    			break;
                    		case 'Handlebars':
                    			Handlebars.registerHelper(name, $.proxy(helper[name], this));
                    			break;
                    		default:
                    			juicer.register(name, $.proxy(helper[name], this)); //注册juicer帮助方法
                    	}
                        
                    }
                }
            },
            /**
             * 取得页面的DOM元素存入相应的jQuery对象
             */
            refreshElements: function(wrapper, sub) {
            	sub = sub || 'subElements';
            	this.$wrapper = this.getWrapper(wrapper);

            	//先取得模块的容器,如果容器不存在就以document为容器
            	// var scope = this.$wrapper && this.$wrapper.length ? this.$wrapper : document;
            	// this.elements[this.wrapper] = '$wrapper';
            	if (wrapper) {
            		for (var key in this[sub]) {
	            		var $key = $(key, this.$wrapper);
	            		//如果在模块的容器里不能取到当前DOM节点，就在doucment的范围里取
	            		$key = $key.length ? $key : $(key, document);
	            		this[this[sub][key]] = $key;
	            	}

            	} else {
            		for (var key in this.elements) {
	            		var $key = $(key, this.$wrapper);
	            		//如果在模块的容器里不能取到当前DOM节点，就在doucment的范围里取
	            		$key = $key.length ? $key : $(key, document);
	            		this[this.elements[key]] = $key;
	            	}

	            	//将selectors的值$化后放置在querys中
	            	var temp = {};
	            	for (var k in this.selectors) {
	            		var $q = $(this.selectors[k], this.$wrapper);
	            		// temp[k] = $q.length ? $q : $(this.selectors[k], document);
	            		temp[k] = $q;
	            	}

	            	this.querys = temp; //防止this.querys被其他对象覆盖，保持对象内的值只对当前对象有效
            	}
            	
            },
            /**
             * 事件分割正则
             * @type {RegExp} 第一个子字符串表示事件名，第二个子字符串表示DOM选择器, 第三个可以设定绑定范围，支持jquery事件命名空间
             */
            eventSplitter: /^([\w\.]+)\s*([^\{\}]*)(\{([^\{\}]*)\})?$/,
            /**
             * 模块内事件绑定方法
             */
            delegateEvents: function() {
            	var $wrapper = this.$wrapper;

            	for (var key in this.events) {
            		//events value支持通过空格分割的参数
            		var methodFunc;
            		var method = this.events[key].split(/\s+/);
            		var methodName = method[0];
            		var methodParam = method.slice(1);

            		//将funciton插入param中
            		methodParam.unshift(this[methodName], this);
            		
            		//利用代理保证事件绑定的方法的上下文跟当前对象一致
            		// methodFunc = this.proxy(this[methodName], this, [100, 1000]);
            		methodFunc = this.proxy.apply(this, methodParam);

            		var match = key.match(this.eventSplitter);
            		var eventName = match[1], selector = match[2], scope = match[4];


            		if (scope) $wrapper = $(scope);

            		// console.log('scope: ', scope);
            		//如果选择器为空，就绑定在容器上，否则就用事件委托
            		if (selector === '') {
            			$wrapper.off(eventName).on(eventName, methodFunc);
            		} else {
            			$wrapper.off(eventName, selector).on(eventName, selector, methodFunc);
            		}
            		
            	}

            	app.log('wrapper selector: ', $wrapper.selector);
        		app.log('wrapper length: ', $wrapper.length);

            }
		}
	});
})(Hydra);