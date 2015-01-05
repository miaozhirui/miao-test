<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>事件对象的实例讲解</title>
    <script type="text/javascript" src="../../../jquery-1.8.3.js"></script>
    <!-- 一，事件对象 -->
    <!-- 只有当事件发生的时候才产生，只能在处理函数内部，函数执行完之后即销毁 -->
    <script type="text/javascript">
        window.onload = function(e) {
            console.log(e)
        }
    </script>
    <!-- 二如何获得事件对象 -->
    <!-- ie: window.event ; ff:e-->
</head>
<body>
    
</body>
</html>