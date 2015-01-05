<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script>




window.color = "red";
    var o = { color : "blue"};

    function sayColor() {
    alert(this.color);
    }

    sayColor(); //red
    sayColor.call(this); //red
    sayColor.call(window); //red
    sayColor.call(o); //blue




    </script>
</head>
<body>
    
</body>
</html>