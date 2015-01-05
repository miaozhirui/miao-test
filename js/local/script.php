<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>script标签里面的type如果不是text/javascript呢</title>
    <script type="text/javascript" src="../jquery-1.8.3.js"></script>
    <script type="text/javascript">
        $(function() {
            var html = $("#hou").html();
            $("body").html(html);
        })
    </script>
</head>
<body>
    <script type="text/javascript"></script>
    <script type="text/template" id="hou">
            我们
    </script>
</body>
</html>