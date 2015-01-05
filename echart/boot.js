(function(app) {

    var $ajax = $.ajax;

    $.getScript = function(url, callback) {
        return $.get( url, undefined, callback, "script" );
    };
    $.getJSON = function(url, data, callback) {
        return $.get( url, data, callback, "json" );
    };

    $.each( [ "get", "post" ], function( i, method ) {
        $[ method ] = function( url, data, callback, type ) {
            // shift arguments if data argument was omitted
            if ( $.isFunction( data ) ) {
                type = type || callback;
                callback = data;
                data = undefined;
            }

            return $.ajax({
                type: method,
                url: url,
                data: data,
                success: callback,
                dataType: type
            });
        };
    });

    $.ajax = function(url, param) {
        if (param) {
            param.url = url;
        } else {
            param = url;
        }

        var success = param.success;
        param.success = function(data) {

            if (typeof data === 'string') {
                try {
                    data = JSON.parse(data);

                } catch (e) {}
            }

            if ($.isPlainObject(data)) {
                switch (data.errorCode) {
                    case 10201:
                        iTip.lazy().notice(__('Invalid user, please login in again.'), 60000);

                        $.publish('ajaxError', [data.errorCode]);

                        return false;
                        break;
                    case 10202:
                        iTip.lazy().notice(__('You have not permission execute this action.'), 60000);
                        
                        $.publish('ajaxError', [data.errorCode]);

                        return false;
                        break;
                }
            }

            typeof success === 'function' && success.apply(param.context || $, arguments);
            
        };
        var error = param.error;
        param.error = function(xhr, status) {
            if (status) {
                // iTip.lazy().notice(__('Can not connect network, please try it later.'), 60000);
                // return false;
            }
            typeof error === 'function' && error.apply(param.context || $, arguments);

        };

        return $ajax(param);

    };

	app.init = function() {
		Hydra.module.start.apply(Hydra.module, [].slice.call(arguments, 0));
	}
})(app);