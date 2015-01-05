define(function(require) {

    var geoCoord = {};
    var faSan = [];
    var US = [-85.7129, 40.0902];
    var collection = {}
    $.ajax("/heike/data/patents.php", {
        dataType: 'json',
        async: false
    }).done(function(data) {
        _.each(data, function(item) {
            _.each(item.personIn.docdb, function(list) {
                var zuobiao = [];
                var faSanElement = [];
                var qidian = {}
                var zhongdian = {}

                qidian.name = list.address.formatted_address;

                zhongdian.name = 'United States of America';

                    faSanElement.push(qidian)
                    faSanElement.push(zhongdian);


                    faSan.push(faSanElement);

                zuobiao.push(parseFloat(list.address.loc.lon.toFixed(4)));
                zuobiao.push(parseFloat(list.address.loc.lat.toFixed(4)));


                geoCoord[list.address.formatted_address] = zuobiao;

                // 可以拿到list里面的name
            })
        })
    });
    var seriesData = {}
    seriesData.geoCoord = geoCoord;
    seriesData.faSan = faSan;

    return seriesData;
})