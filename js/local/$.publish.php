<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>事件监听</title>
    <style type="text/css">
        span{
            cursor:pointer;
        }
    </style>
    <script type="text/javascript" src="../jquery-1.8.3.js"></script>
    <script type="text/javascript">
     (function($) {
 
        var o = $({});
         
        $.subscribe = function() {
        o.on.apply(o, arguments);
        };
         
        $.unsubscribe = function() {
        o.off.apply(o, arguments);
        };
         
        $.publish = function() {
        o.trigger.apply(o, arguments);
        };
        }(jQuery));
     function f1() {
        var row=[1,2,3,4];
        var hou=[5,6,7,8];
        $.publish("done", [row, hou]);
     }
     function f2(e, data, hou) {
         console.log(data);
         console.log(hou);
     }
     
     $.subscribe("done", f2);
    </script>
</head>
<body>
    <span onclick="f1()">Click Me</span>
</body>
</html>










