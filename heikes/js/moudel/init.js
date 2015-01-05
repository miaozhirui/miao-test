define(function(require) {
    require('./lodash');
    var init = require('./series');
    require('./jquery-1.8.3.js');
    require('./echarts-all.js');
    var series= init();
    console.log(series)
               var option = {
               backgroundColor: '#1b1b1b',
               color: ['gold', 'aqua', 'lime'],
               title: {
                   text: 'Who is occupying the States',
                   subtext: 'frim a patent perspective',
                   x: 'center',
                   textStyle: {
                       color: '#fff'
                   }
               },
               tooltip: {
                   trigger: 'item',
                   formatter: '{b}'
               },

               toolbox: {
                   show: true,
                   orient: 'vertical',
                   x: 'right',
                   y: 'center',
                   feature: {
                       mark: {
                           show: true
                       },
                       dataView: {
                           show: true,
                           readOnly: false
                       },
                       restore: {
                           show: true
                       },
                       saveAsImage: {
                           show: true
                       }
                   }
               },
               dataRange: {
                   min: 0,
                   max: 100,
                   calculable: true,
                   color: ['#ff3333', 'orange', 'yellow', 'lime', 'aqua'],
                   textStyle: {
                       color: '#fff'
                   }
               }
           }
    option.series=series;
    var element = document.getElementById('echart');
    var myChart = echarts.init(element);
    myChart.setOption(option);
    $(".tab").css("display", 'block')

})