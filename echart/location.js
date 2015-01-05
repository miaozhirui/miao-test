Hydra.module.extend('Controller', 'locationCompany', function(bus) {
	return {
			selectors : {
				"createChart": ".submit-section button",
				"Echart" : '#Echart'
			},
			events : {
				"click .submit-section button": "chartShow"
			},
			chartColor: {
				"Open": "#9EC247",
				"Close": "#00A3CB",
				"In Progress": "#948E8A"
			},
			url: '/ajax/chart.php',
			init : function() {
				this.__super__.init.call(this);
			},
			chartShow : function() {
			     this.getQuery('Echart').show()
			     this.createChart();
			},
			getChartData: function(callback)  {
				var self = this;
				$.ajax(this.url,{
					dateType: 'json',
					success: function(data) {
						var option=callback(data);
						// 为echarts对象加载数据 
		               			 self.myChart.setOption(option); 
					},
				})
			},
			createChartData : function(data) {
				var monthArray = [];//获得到的月份
				var statusArray = [];//获得所有的状态
				var newData = [];//按照月份重组之后的数据
				var useData;//要使用的数据
				// 获得到月份
				for(var i in data) {
					// 如果数组中没有则往里面添加
					if($.inArray(data[i]['month'],monthArray) == '-1')
					monthArray.push(data[i]['month']);
				}
				// 或得到所有的状态
				for(var i in data) {
					//如果数组中没有则往里面添加
					if($.inArray(data[i]['status'],statusArray) == '-1')
						statusArray.push(data[i]['status']);
				}
				// 得到新的数据(按照月份进行重组数据)
				for(var i in monthArray) {
					var monthData = [];
					for(var j in data) {
						if(monthArray[i]==data[j]['month'])
							monthData.push(data[j]);
					}
					newData.push(monthData);
				}
				//最后要使用的数据
				useData = newData[0];
				for(var i in useData) {
					var temData = [];
					for(var j in newData) {
						temData.push(newData[j][i]['amount']);
					}
					// 让要使用到的数据的data是当前组合好的数据
					useData[i]['amount'] = temData;
				}
				// 下面就是要组合出想要的series的数据
				var seriesArray = this.getSeriesData(useData, monthArray);
				return {
		                    legend: {
		                    	// 状态类型
		                        data: statusArray,
		                    },
		                    xAxis : [
		                        {
		                            type : 'value',
		                        }
		                    ],
		                    yAxis : [
		                        {
		                        	 type : 'category',
		                        	 // 日期数据
		                             data : monthArray
		                        }
		                    ],
		                    // 数据
		                    series : seriesArray,
		                };
			},
			getSeriesData : function(useData, monthArray) {
				var seriesArray = [];
				var useIndex = -1;
				for(var i in useData) {
					var seriesChongZhu = '';
					var isSeriesChongzhu=''
					useIndex++;
					if(useIndex == monthArray.length) {
						seriesChongZhu = [];
						for(var h=0; h<useIndex; h++) {
							seriesChongZhu.push(useData[i]['type']);
						}
						useIndex=-1;
					}
					// 得到当前状态的颜色
					for(var j in this.chartColor) {
						if(useData[i]['status']== j ) {
							var color = this.chartColor[j]
							}
						}
						  series = {
				                            "name":useData[i]['status'], 
				                            "type":'bar',
				                            "stack": useData[i]['type'],
				                            "itemStyle": {
				                            	"normal": {
				                            		"color": color
				                          	  	}
				                            },
				                            "data": useData[i]['amount']
				                        };
					seriesArray.push(series);
					// 如果一种系列完成的话，追加一个数据进去
					if(seriesChongZhu) {
						useData[i]['amount'] = seriesChongZhu;
						console.log(seriesChongZhu);
						series = {
				                            "name":useData[i]['status'], 
				                            "type":'bar',
				                            "stack": useData[i]['type'],
				                            "itemStyle": {
				                            	"normal": {
				                            		"color": color,
				                            		 label : {
				                            		 	show : true
				                            		 }
				                          	  	}
				                            },
				                            "data": seriesChongZhu
				                        };
						seriesArray.push(series)
					}
				}
				console.log(seriesArray);
				return seriesArray;
			},
			createChart : function() {
				this.myChart = echarts.init(document.getElementById('Echart'));
				var option = this.getChartData($.proxy(this.createChartData,this));
		            }
			}
});