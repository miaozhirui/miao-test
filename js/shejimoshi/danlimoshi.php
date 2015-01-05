<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>单例模式</title>
    <script type="text/javascript">
    // 这就是一个单例的模式
        var obj = {
            a: 1,
            init: function() {
                console.log(this.a)
            }
        }
        var obj1= {
            a:2
        }
        obj.init.call(obj1);
    </script>
</head>
<body>
    
</body>
</html>