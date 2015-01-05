<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jquery里面的date的使用</title>
    <script type="text/javascript" src="../../jquery-1.8.3.js"></script>
    <script type="text/javascript">
        $(function() {
            console.log($("span").data("api"))
            $("span").data("api","houdunag");
            console.log($("span").data("api"))
        })
    </script>
</head>
<body>
    <span data-api="111">11</span>
</body>
</html>