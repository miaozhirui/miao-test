<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>animation动画</title>
    <style type="text/css">
        @keyframes myfirst{
            0% {background:red; left:0px; top:0px;}
            50% {background:red; left:0px; top:-300px;}
            100% {background:red; left:0px; top:0px;}
          /*  75% {background:red; left:0px; top:-300px;}
            100% {background:red; left:0px; top:0px;}*/
        }
        .box{width:200px; height:200px; background:red;
            position: relative;
            }
        .out{width:200px; height:200px;}
         .out:hover .box{
            animation:   0.3s  myfirst;
            }
            /*.box{animation:   0.3s  myfirst;}*/
    </style>
</head>
<body>
    <div class="out">
    <div class="box"></div>
    </div>

</body>
</html>