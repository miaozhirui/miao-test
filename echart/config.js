(function(In) {

	var root = this;
	var old = root.app;
	var app = {};

	function getVersion() {
		var scripts = document.getElementsByTagName('script');
		var version = '';

		forEach(scripts, function(value, i) {
			var src = value.src;
			
			if (src.indexOf('js/config.js') !== -1) {
				var index = src.indexOf('?');
				var vStr = src.slice(index + 1);
				var vArr = vStr.split('=');

				version = vArr[1] || '';

				return false;

			}
		});

		return version;
	}

	//防止IE报错
	if (typeof console == 'undefined') {
		console = {};
		console.log = function() {};
		console.info = function() {};
		console.error = function() {};
	}
	/**
	 * 运行这个函数将变量app的控制权让渡给第一个实现它的那个库。
	 * @return {[type]} [description]
	 */
	app.noConflict = function() {
    	root.app = old;
    	return this;
  	};
  	var base = root.document.getElementById('base');
  	var baseURI = (base && base.href) || '/';
  	
  	app.config = {
		lan: CommonGetCookie('locale') || 'en',
		debug: true,
		version: getVersion(),
		path: baseURI,
		formatDateTime: 'DD/MM/YYYY HH:mm', //moment的format格式
		formatDate: 'DD/MM/YYYY', //moment的format格式
		formatTime: 'HH:mm' //moment的format格式
	};

	function forEach(items, func) {
		for (var i = 0, length = items.length; i < length; i++) {
			var callback = func(items[i], i);
			
			if (typeof callback !== 'undefined') {
				if (callback) 
					continue;
				else 
					break;
			}
		}
	}
  	
	/**
	 * 删除cookie
	 * @param {String} c_name [description]
	 */
	function CommonDeleteCookie(c_name) {

	    CommonSetCookie(c_name, "", -1); 
	} 
	/**
	 * 设置cookie
	 * @param {String} c_name [description]
	 * @param {String} value  [description]
	 * @param {Date} exdate [description]
	 * @param {String} path   [description]
	 * @param {String} cookie_domain   [description]
	 */
	function CommonSetCookie(c_name,value,exdate,path, cookie_domain) {
		path = (path == null) ? "/" : path;
		cookie_domain = cookie_domain ? cookie_domain : '';
		var cookieStr;
		cookieStr = c_name+ "=" +escape(value)+((exdate==null) ? "" : ";expires="+exdate.toGMTString())+"; path="+path;
		if(cookie_domain){
			cookieStr += '; domain='+cookie_domain;
		}
		document.cookie = cookieStr;
	}
	/**
	 * 获取cookie
	 * @param {String} c_name [description]
	 */
	function CommonGetCookie(c_name) {
		if (document.cookie.length>0)
		  {
		  c_start=document.cookie.indexOf(c_name + "=");
		  if (c_start!=-1)
		    { 
		    c_start=c_start + c_name.length+1 ;
		    c_end=document.cookie.indexOf(";",c_start);
		    if (c_end==-1) c_end=document.cookie.length;
		    return unescape(document.cookie.substring(c_start,c_end));
		    } 
		  }
		return false;
	}

	
	/*function getRoot() {
		var uri = window.location.pathname, root = '/';
		var param = uri.split('/');
		var param1 = param[1] || '';
		var php = param1.indexOf('.php');
		if (param1 && php !== 'pages' && param1 === 'crm') {
			if (php === -1) {
				root = '/' + param1 + '/';
			}
		}
		return root;

	}*/
	

	(function() {

		var types = ['Array', 'Object', 'Function', 'String', 'Number', 'Boolean', 'Date'];

		var getType = function(value) {

			app['is' + value] = (function(v) {
				return function(obj) {
					return Object.prototype.toString.call(obj) === '[object ' + v + ']';
				};
			})(value);
		};

		forEach(types, getType);

	})();


	/*for (var j = 0; j < type.length; j++) {
		app['is' + type[j]] = (function(j) {
			return function(obj) {
				return Object.prototype.toString.call(obj) === '[object ' + type[j] + ']';
			}
		})(j);
	}*/

	var path = app.config.path, version = '?v=' + app.config.version;

//参数可以是一个数组，或者一个对象列表
	app.addIn = (function() {

		

		var getParam = function(opt) {
			if (!app.isObject(opt)) {
				throw 'param need to be object.';
			}
			var root = opt.root || app.config.path;
			var v = '?v=' + (opt.version || app.config.version);

			var path = root + opt.path + v;

			var temp = {};
			temp.path = path;

			if (opt.rely) {
				temp.rely = opt.rely;
			}

			return {name: opt.name, config: temp};
		};
		var addToIn = function(v, i) {

			In.add(v.name, v.config);

			log(v);

		};
		var log = function(v) {
			
			if (app.config.debug && typeof console != 'undefined') {
				var str = 'Configure asset =>' + ' alias: ' + v.name + ', path: ' + v.config.path;
				if (v.config.rely) {
					str += ', rely: [' + v.config.rely.join(', ') + ']';
				}
				console.info(str);
			}
		};
		return function() {
			var collections = [];
			var name, config, temp = [], i, arg0 = arguments[0], args = arguments;

			if (!arguments.length) {
				throw 'need one param.';
			} else if (arguments.length == 1) {
				if (app.isObject(arg0)) {

					collections.push(getParam(arg0));

				} else if (app.isArray(arg0)) {

					forEach(arg0, function(v, i) {
						temp.push(getParam(v));
					});

					collections = collections.concat(temp);

				} else {
					throw 'param type error.';
				}
			} else {

				forEach(args, function(v, i) {
					temp.push(getParam(v));
				});

				collections = collections.concat(temp);
			}
			
			forEach(collections, addToIn);
		};
	})();
	
	app.load = app.run = function() {
		//自动加载boot
		var args = [].slice.call(arguments), flag = true, temp = [], str;

		forEach(arguments, function(v, i) {
			if (typeof v != 'string') return true;

			if (v == 'boot') {
				flag = false;
				return false;
			}
		});

		if (flag) {
			args.unshift('boot');
		}

		forEach(args, function(v, k) {
			if (typeof v == 'string') {
				temp.push(v);
			}
		});

		
		if (app.config.debug && typeof console != 'undefined') {
			str = 'Load asset(s) ===> ' + temp.join(', ');
			console.info(str);
		}


		In.ready.apply(null, args);
	};
	
	root['app'] = app; //设置成全局

	app.addIn([
		{name: 'juicer', path: 'js/lib/juicer.js'},
		{name: 'Handlebars', path: 'js/lib/handlebars.js'},
		{name: 'jquery', path: 'js/lib/jquery-1.8.3.js'},
		{name: 'underscore', path: 'js/lib/underscore.js'},
		{name: 'jsql', path: 'js/lib/jsql.js'},
		{name: 'json', path: 'js/lib/json2.js'},
		{name: 'moment', path: 'js/plugins/moment.js'},
		{name: 'numeral', path: 'js/plugins/numeral.js'},
		{name: 'knockout', path: 'js/lib/knockout-3.1.0.debug.js'},
		{name: 'ko', path: 'js/modules/controllers/ko/helper.js', rely: ['knockout']},
		{name: 'utils', path: 'js/tools/utils.js', rely: ['jquery', 'underscore', 'json', 'moment', 'numeral']}
	]);
	app.addIn([
		{name: 'Hydra', path: 'js/lib/Hydra.js', rely: ['utils']},
		{name: 'Base', path: 'js/modules/base.js', rely: ['Hydra', 'jsql', 'underscore', 'pubsub', 'monitor', 'juicer', 'Handlebars', 'lan']},
		{name: 'Controller', path: 'js/modules/controllers/controller.js', rely: ['Base']}
	]);

	app.addIn(
		{name: 'pubsub', path: 'js/plugins/jquery.tinypubsub.js', rely: ['jquery']},
		{name: 'sSwitcher', path: 'js/plugins/jquery.sSwitcher.js', rely: ['jquery']},
		{name: 'jqueryUI', path: 'js/plugins/jquery-ui-1.9.2.custom.js', rely: ['jquery']},
		{name: 'jqueryTipsy', path: 'js/plugins/jquery.tipsy.js', rely: ['jquery']},
		{name: 'jqueryCookie', path: 'js/plugins/jquery.cookie.js', rely: ['jquery']},
		{name: 'jquerySAutocomplete', path: 'js/plugins/jquery.sAutocomplete.js', rely: ['jquery']},
		{name: 'jqueryValidate', path: 'js/plugins/jquery.validate.js', rely: ['jquery']},
		{name: 'jquerySValidate', path: 'js/plugins/jquery.sValidate.js', rely: ['jqueryValidate', 'utils']},
		{name: 'jqueryMultiSelect', path: 'js/plugins/jquery.multiselect.min.js', rely: ['jqueryUI']},
		{name: 'jquerySFormTrigger', path: 'js/plugins/jquery.sFormTrigger.js', rely: ['jquery']},
		{name: 'zingchart', path: 'js/plugins/zingchart/flash_scripts/zingchart-1.1.js'},
		{name: 'zb', path: 'js/plugins/zingchart/zb.js', rely: ['zingchart']}
	);
	app.addIn([
		{name: 'lib', path: 'js/lib.js', rely: ['jqueryUI', 'jqueryTipsy', 'jqueryCookie', 'jquerySAutocomplete']},
		{name: 'translation', path: 'js/translation.js'},
		{name: 'common', path: 'js/common.js', rely: ['lib', 'juicer', 'Handlebars', 'pubsub', 'translation']}
	]);
	app.addIn([
		{name: 'monitor', path: 'js/modules/controllers/monitor/monitor_queue.js', rely: ['common']},
		{name: 'sectionOptionGroup', path: 'js/modules/controllers/sectionoptiongroup/sectionoptiongroup.js', rely: ['boot']},
		{name: 'FileActionC', path: 'js/modules/controllers/attachment/file.action.js', rely: ['Controller']}
	]);

	app.addIn(
		{name: 'TriggerFormC', path: 'js/modules/controllers/form/trigger_form.js', rely: ['Controller']}
	);

	app.addIn(
		{name: 'lan', path: 'js/loc/'+app.config.lan+'/ts.js', rely: ['utils']}
	);
	app.addIn([
		{name: 'boot', path: 'js/boot.js', rely: ['Controller']},
		{name: 'Colization', path: 'js/modules/controllers/colization/colization.js', rely:['boot']}
	]);



	//data-table开启表格列样式
	app.load('Colization', function() {
		app.init('Colization');
	});

})(In);



