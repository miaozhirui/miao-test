<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>instanceof</title>
    <script type="text/javascript">
        function Car(){
            console.log(this instanceof Car)
        }
        // var obj = new Car();
        // console.log(typeof obj)
        // console.log(obj instanceof Car)
        // console.log(typeof 11 === "number")
    </script>
    <script type="text/javascript">
        var a = new String('hellow word')
        for (var i in window.String.prototype){
            console.log(i)
            console.log(i+" : "+window.String.prototype[i])
        }
    </script>
</head>
<body>
    
</body>
</html>

















