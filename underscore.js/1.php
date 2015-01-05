<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="underscore-min.js"></script>
    <script type="text/javascript">
        function add() {}
        _.extend(add, {
            name1:'miaozhirui',
            init: function() {
                console.log(this.name1)
            }
        })
        // console.log(add.init())
    </script>

    <script type="text/javascript">
        function add() {
            //首先不知道要传递多少个参数，所以这里只能用argument来接收
            console.log(arguments);
            return _.extend.apply(null, arguments);
        }
        var obj = add({name:1},{age:20},{a:1},{b:2},{c:3})
       console.log(obj)
    </script>
</head>
<body>
    
</body>
</html>