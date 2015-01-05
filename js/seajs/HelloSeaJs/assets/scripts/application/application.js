define(function(require) {
    //下面的这种方式是按需加载
    // var Element = document.getElementById("element");
    // Element.onclick = function() {
    //     require.async("./util", function(util) {
    //         util.run();
    //     })
    // }
    var util = require("./util");
    util.run()
})