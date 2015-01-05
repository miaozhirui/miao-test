<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>css3定义了两种渐变，线性渐变，径向渐变</title>
    <style type="text/css">
        .box{
            /*width:200px; height:200px;*/
            /*linear-gradient默认的是从上到下*/
         /*background:-moz-linear-gradient(left,red,orange,yellow,green,blue,indigo,violet);*/
     }
    .box1{
        line-height: 200px; 
        text-align: center;
        width:200px; height:200px; 
        background:-moz-radial-gradient(80% 20%,farthest-corner,red, yellow 15%, green 20%);
    }
    </style>
</head>
<body>
    <div class="box"></div>
    <div class="box1">111</div>
</body>
</html>