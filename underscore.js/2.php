<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="underscore-min.js"></script>
    <script type="text/javascript">
        function add() {}
        _.extend(add, {
            name1: 'miaozhirui',
            age: '13',
            init: function () {
                console.log("init");
            }
        })
        console.log(add.name1)
        console.log(add.age)
        console.log(add.init())
    </script>
</head>
<body>
    
</body>
</html>