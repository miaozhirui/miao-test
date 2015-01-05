<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>background-size</title>
    <style type="text/css">
        .box{width:1700px; height:600px; background:#eee;
            background:#eee url(./images/1.png) no-repeat;
            background-size: 800% 800%;
            display:table-cell;
            vertical-align: middle

        }
        .box img{
            display: block; margin:0 auto;
        }
    </style>
</head>
<body>
    <div class="box"><img src="./images/1.png" alt=""></div>
    <!-- <div class="box1"></div> -->
</body>
</html>
