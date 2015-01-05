<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>border的属性</title>
    <style type="text/css">
            .box{
                margin:100px;
                width:0px; 
                height:0px; 
                /*css画三角形transparent*/
                border-top: 100px solid red;
                border-right:100px solid transparent;
                border-bottom: 100px solid transparent;
                border-left: 100px solid red;
                /*将三角形转化为圆*/
                border-radius: 100%;
                transform:rotate(45deg);
            }
            .box1{
                width:0px; 
                height:0px;
                /*留两个相邻的边，然后把另一个边设置成透明的，也可以绘制出三角形出来*/
                border-top:100px solid blue;
                border-right:100px solid purple;
                /*border-bottom:100px solid green;*/
                /*border-left:100px solid yellow;*/
            }
    </style>
</head>
<body>
    <div class="box"></div>
    <div class="box1"></div>
</body>
</html>