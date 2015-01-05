define(function(require) {
    var regroupData = require('./ajax');
    return function init() {
        var series = [{
                type: 'map',
                // roam: true,
                // hoverable: false,
                mapType: 'world',
                itemStyle: {
                    normal: {
                        borderColor: 'rgba(100,149,237,1)',
                        borderWidth: 0.5,
                        areaStyle: {
                            color: '#1b1b1b'
                        }
                    }
                },
                data: [],
                markLine: {
                    // smooth: false,
                    // symbol: ['none', 'circle'],
                    symbolSize: 1,
                    itemStyle: {
                        normal: {
                            borderWidth: 1,
                            borderColor: 'rgba(30,144,255,0.5)'
                        }
                    },
                    //鼠标放在线上面的内容
                    data: []
                    // data: regroupData.faSan
                },
                //必须项
                geoCoord: regroupData.geoCoord

            },
            //指的是发散点
            {
                type: 'map',
                mapType: 'world', //表示在世界地图上面
                data: [],
                markPoint: {

                    effect: {
                        show: true,
                        shadowBlur: 1
                    },
                    // itemStyle: {
                    //     normal: {
                    //         label: {
                    //             show: false
                    //         }
                    //     },
                        
                    // },
                    data: []
                },
                markLine: {
                    smooth: true,
                    effect: {
                        show: true,
                        loop: true, 
                        scaleSize: 2,
                        period: 20,
                        color: '#fff',
                        shadowBlur: 2
                    },
                    // itemStyle: {
                    //     normal: {
                    //         show:false,
                    //         borderWidth: 0.4,
                    //         lineStyle: {
                    //             type: 'solid',
                    //             shadowBlur: 2
                    //         }
                    //     }
                    // },
                    data: regroupData.faSan
                }

            }

        ];
        return series
    }

})