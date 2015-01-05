<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>this的使用</title>
    <script>
        var obj = {
            a: 'hou',
            // b: this.a
            b: function() {
                return this.a   
            }
        }
        console.log(obj.b())
    </script>
</head>
<body>
    
</body>
</html>