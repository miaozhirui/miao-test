<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3D转换</title>
    <style type="text/css">
    /*
    nth-of-type
     */
    /*
    要想运行3d必须要有一个场景，就是景升
    transform:rotateX
    transform-origin
    perspective
    transform-style:preserve-3d;//默认值flat(我们一般指定的是preserve-3d)
    perspective-origin:指定3d旋转消失的位置;
    backface-visibility
     */
    body{perspective:1000px;}
        .out{width:300px; height:300px; border:1px solid red; 
            perspective:500px; 
            /*transform-style:preserve-3d;*/
            /*transform:rotateY(90deg)*/
            perspective-origin:1000px;
        }
        .inner{line-height:200px; text-align:center; border-radius:50%;width:200px; height:200px; border:1px solid blue; margin-top: 50px; margin-left: 50px;
            transform-origin:bottom;
            transform:rotateX(30deg);
        }
    </style>
</head>
<body>
    <div class="out">
        <div class="inner">11111111111</div>
    </div>
</body>
</html>