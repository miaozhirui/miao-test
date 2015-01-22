<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tooltip</title>
    <link rel="stylesheet" type="text/css" href="../jquery-ui.css">
    <script type="text/javascript" src="../jquery-1.8.3.js"></script>
    <script type="text/javascript" src="../jquery-ui.js"></script>

</head>
<body>
    <div class="tooltip" title ='今天的天气真的是不错啊'>我是tooltip</div>
    <div class="tooltip" title ='今天的天气真的是不错啊'>我是tooltip</div>
    <div class="tooltip" title ='今天的天气真的是不错啊'>我是tooltip</div>
    <script type="text/javascript">
        $( ".tooltip" ).tooltip({
             position: {at:"right bottom" }
            // content: "Awesome title!",
            // disabled: true
            // show: false
            });
    </script>
</body>
</html>