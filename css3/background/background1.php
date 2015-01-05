<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>background-clip</title>
    <style>
        .box{
            width:100px;
            height:100px;
            border:20px solid rgba(0,0,0, 0.1); 
            background: url(images/1.png) no-repeat ;
            /*background-clip:content-box;*/
            background-origin: content-box;
        }
    </style>
</head>
<body>
    <div class="box"></div>
</body>
</html>