<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>position fixed属性</title>
    <style>
    *{
        margin:0 auto;
    }
    .box{
        width:200px;
        height:200px;
        position: fixed;
        background: red;
        top:50%;
        left:50%;
        margin-left: -100px;
        margin-top:-100px;
        }
    </style>
</head>
<body>
    <div class="box"></div>
</body>
</html>