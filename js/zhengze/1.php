<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>非捕获分组</title>
    <script type="text/javascript">
        // var re=/#(?:\d)+/;
        // // var re=/#(\d+)/;
        // var string = "#123456";
        // var result = re.test(string);
        // console.log(result)
        // console.log(RegExp.$1)
    </script>

    <script type="text/javascript">
       var string = 'a1b3ab4a3ba4bab4';
       var reg = /\d(a|b)/g;
       console.log(string.match(reg))

    </script>
</head>
<body>
    
</body>
</html>