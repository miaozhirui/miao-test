<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript">
        function a(callback) {
            console.log(11)
            callback()
        }
        function b() {
            for(var i = 0; i<100; i++) {
                console.log(i)
            }
        }
        function c() {
            for(var i=0; i<100; i++) {
                console.log(i)
            }
        }
        function d() {
            console.log("异步")
        }
        a(d)
        b()
        c()
    </script>
</head>
<body>
    
</body>
</html>