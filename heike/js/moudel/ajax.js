define(function(require) {

    var geoCoord = {};
    var faSan = [];
    var US = [-85.7129, 40.0902];
    var collection = {}
    // $.ajax("/heike/data/patents.php", {
    $.ajax("/heike/data/patents.json", {

        dataType: 'json',
        async: false
    }).done(function(data) {
        _.each(data, function(item) {
            _.each(item.personIn.docdb, function(list) {
                var zuobiao = [];
                var faSanElement = [];
                var qidian = {}
                var zhongdian = {}
                var value =  Math.floor(Math.random()*100);

                // console.log(value)
                if(!collection[list.address.formatted_address]){

                           qidian.name = list.address.formatted_address;

                        zhongdian.name = 'United States of America';
                    // console.log(value)
                    // 颜色值
                        zhongdian.value = value;

                        faSanElement.push(zhongdian);

                        faSanElement.push(qidian)

                        // faSanElement.value = value;
                        faSan.push(faSanElement);
                        collection[list.address.formatted_address]=true;
                }
             

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