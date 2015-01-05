<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>事件学习</title>
    <script type="text/javascript">
        // window.onload=function() {
        //     var one = document.getElementById("one");
        //     one.onclick=function(e) {
        //         console.log(e)
        //     }
        // }

    </script>
</head>
<body>
    <input type="button" value="改变" id="one"/>

    <script type="text/javascript">
     var one = document.getElementById("one");
        function fn1() {
            alert("第一次");
        }
        function fn2()  {
            alert("第二次")
        }
        // 一个事件有多个处理程序的时候，下面这种方法是不行的，会覆盖
        one.onclick=fn1;
        one.onclick=fn2;

        // 解决办法一；(这种办法是可行的，但是不够灵活)
        // one.onclick=function() {
        //     fn1();
        //     fn2();
        // }
        // 解决办法二；(解决了如何给一个对象添加多个处理程序)
        // function addEvent(obj, types, fn) {
        //     if(typeof obj[types] != "function") {
        //         obj[types] = fn;
        //     } else {
        //         var old = obj[types];
        //         obj[types] = function() {
        //             old();
        //             fn();
        //         }
        //     }
        // }
     

    //我们希望有条件的删除对象的某个事件
    // var obj = {ho:'hou'};
    // console.log(!obj.hou);//有这个值返回真，没有这个值返回假
    // function run() {}
    // console.log(run+"");//加上冒号转化为字符串
    // // 判断两个函数是否相等
    // var obj = {}
    // obj.run = run;
    // console.log(run==obj.run)    
    //3.解决办法3（允许删除）
    // function addEvent(obj, types, fns) {
    //     var attr = "_"+types;
    //     if( !obj.attr ) {
    //         obj.attr = []
    //     }
    //     // 判断某个事件处理程序是否已经加过进去了
    //     for(var i in obj.attr) {
    //         if(obj.attr[i]+"" == fns+"") {//判断两个函数是否相等
    //             return false;
    //         }
    //     }
    //     obj.attr.push(fns);
    //     // 此时要来一个判断，因为push只是从这次调用的时候才开始的
    //     if(typeof obj[types] == "function") {
    //         var old = obj[types];
    //         console.log(old+"");
    //     }
    //     obj[types] = function() {
    //         old()
    //         for(var i=0; i<obj.attr.length; i++) {
    //            //函数加上空字符串就变成了字符串本身
    //         obj.attr[i]()
    //         }
    //     }
    //     // console.log(obj.attr)
    // }

 
    // addEvent(one, "onclick", function() {
    //         alert("第三次");
    //     })
    //    addEvent(one, "onclick", function() {
    //     alert("第四次");
    // })
    
    //如何删除多次绑定的方法
    function 
    </script>
</body>
</html>










