<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>debounce的用法</title>
    <script type="text/javascript" src="../jquery-1.8.3.js"></script>
    <script type="text/javascript" src="underscore-min.js"></script>
    <script type="text/javascript">
            var i = 0;
                function hou() {
                    i++;
                    console.log(i);
                     }
            var houdun = _.debounce(hou, 500);
                $("input[type='submit']").live("click", houdun)
                

    </script>
</head>
<body>
    <input type="submit" value="提交">
</body>
</html>