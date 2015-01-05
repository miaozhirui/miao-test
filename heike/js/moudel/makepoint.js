                   markPoint: {
                       symbol: 'emptyCircle',
                       symbolSize: function(v) {
                           return 10 + v / 10
                       },
                       effect: {
                           show: true,
                           shadowBlur: 0
                       },
                       itemStyle: {
                           normal: {
                               label: {
                                   show: false
                               }
                           },
                           emphasis: {
                               label: {
                                   position: 'top'
                               }
                           }
                       },
                       data: [{
                           name: '上海',
                           value: 95
                       }, {
                           name: '广州',
                           value: 90
                       }, {
                           name: '大连',
                           value: 80
                       }, {
                           name: '南宁',
                           value: 70
                       }, {
                           name: '南昌',
                           value: 60
                       }, {
                           name: '拉萨',
                           value: 50
                       }, {
                           name: '长春',
                           value: 40
                       }, {
                           name: '包头',
                           value: 30
                       }, {
                           name: '重庆',
                           value: 20
                       }, {
                           name: '常州',
                           value: 10
                       }]
                   }
               }