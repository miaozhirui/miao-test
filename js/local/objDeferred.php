<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ajax里面的链式操作，</title>
    <script type="text/javascript" src="../jquery-1.8.3.js"></script>
    <script type="text/javascript">
        $.ajax('test/1.php')
        .done(function(data) {console.log(data)})
        .done(function(data) {console.log(data+"123456")})
        .done(function(data) {console.log(data+"abcdefghijklmn")})
        .done(function(data) {console.log(data+"houdun123456789101112131415")})
    </script>
</head>
<body>
    
</body>
</html>