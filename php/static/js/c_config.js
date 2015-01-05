(function() {
    var config = {
        debug: true,
        base: '/js/',
        map: [
        ],
        vars: {
        },
        alias: {
            'jquery': 'libs/jquery-1.8.3',
            'ept': 'libs/ept_all',
            'lodash': 'libs/lodash',
            'masonry': 'libs/masonry',
            'ko': 'libs/knockout-3.2.0',
    },
     preload: ['jquery']

}
    seajs.config(config);
})();