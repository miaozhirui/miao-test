<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>transform</title>
    <style>
        /*css3 二维转换*/
        .box{width:100px; height:100px; background:red; margin:0 auto; margin-top: 100px; float: left; cursor:pointer;}
        .box:hover{transform:scale(1.5) rotate(30deg) translateX(20px) }
    </style>
</head>
<body>
    <div class="box" style="background: red"></div>
    <div class="box" style="background: blue"></div>
    <div class="box" style="background: orange"></div>
    <div class="box" style="background: yellow"></div>
    <div class="box" style="background: green"></div>
   
</body>
</html>