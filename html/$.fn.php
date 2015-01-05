<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$.fn的用法</title>
    <script type="text/javascript" src="../jquery-1.8.3.js"></script>
    <script type="text/javascript" >
    console.log($.fn)
    console.log($(".hou", "hou"))
    // $.fn是jquery的命名空间，通过这种方式创建的方法和属性，用jquery获得的元素就都包含这些方法和属性
    //这种方式写出来的东西是页面中选中的元素都带有这些方法和属性的
        // $.fn.run=function() {
        //     console.log("houdunwang");
        // }
        // $.fn.go=function() {
        //     console.log("今天的天气真的是不错啊");
        // }
        // $(document).on("click", function(e) {
        //     var $target = $(e.currentTarget);
        //     $target.go();
        // })
        // $.fn.cityCascadeParam ={};
        // $.fn.cityCascadeParam.data = _provinces_;
        // $.fn.cityCascadeParam.selectCity = null;其实就是命名空间啦
        

        // 这种写法是只要在页面中调用这个方法就可以执行的
        // $.hou={};
        // $.hou.a=function() {
        //     console.log("houdunwag.com");
        // }
        // $(document).on("click", function() {
        //     $.hou.a()
        // })
    </script>
</head>
<body>
    
</body>
</html>