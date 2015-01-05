<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jquery的attr和prop的使用</title>
    <script type="text/javascript" src="../jquery-1.8.3.js"></script>
    <script type="text/javascript">
     $(function() {
        var hou = 0;
       $(document).click(function() {
            hou++;
            $("a").attr("wo",hou)
               }) 
             })
    </script>
</head>
<body>
    <a href="">我是a链接</a>
</body>
</html>