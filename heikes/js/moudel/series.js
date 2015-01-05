define(function(require) {
    var regroupData = require('./ajax');
    return function init() {
        var series = [{
                type: 'map',
                roam: true,
                hoverable: false,
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
                    smooth: true,
                    symbol: ['none', 'circle'],
                    symbolSize: 1,
                    itemStyle: {
                        normal: {
                            color: '#fff',
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
                    data: []
                },
                markLine: {
                    smooth: true,
                    effect: {
                        show: true,
                        // loop: true,
                        period: 15,
                        scaleSize: 2,
                        color: null,
                        shadowColor: null,
                        shadowBlur: null
                    },
                    itemStyle: {
                            // normal: {
                            // borderWidth: 0.01,
                            // lineStyle: {
                            //     type: 'solid',
                            //     shadowBlur: 0
                            // },
                             normal: {
                            borderWidth: 0.1,
                            lineStyle: {
                                type: 'dashed',
                                shadowBlur: 3
                            },
                    
                            label: {
                                show: true
                            }
                        }
                    },
                    data: regroupData.faSan

                },

            }

        ];
        return series
    }

})