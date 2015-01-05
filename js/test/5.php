<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>模拟js异步执行</title>
    <script type="text/javascript">
    window.onload=function() {
        box = document.getElementById("box");
        var c=0;
        var i = 0;
        function a() {
            box.innerHTML=i++;
            setTimeout(b,0);
            // b()
        }
         function b() {
            a()
         }
         // a()
        // for(var i=0 ; i<10000999999   ; i++) {
        //     box.innerHTML=i;
        // }
    }


    // function a()  {
    //     console.log(11)
    // }
    // function b() {
    //     console.log(22)
    // }
    // function c() {
    //     console.log(33)
    // }
    // function d() {
    //     console.log(44)
    // }
    // // 下面的执行结果是22，11
    // setTimeout(function() {
    //    a()
    // },0)
    // b()
    // c()
    // d()
    </script>
</head>
<body>
    <div id="box">

    </div>
</body>
</html>





