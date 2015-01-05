<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>js定义原型</title>
    <script type="text/javascript">
        function run(opt) {
            this.opt = opt;
        }
        run.prototype.add = function() {
            console.log(this.opt)
        }
        var obj1 = new run({a: '1', b: '2'});
        obj1.add()
    </script>
</head>
<body>
    
</body>
</html>