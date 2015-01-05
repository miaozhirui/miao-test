<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>transform2D属性
    </title>
    <style>
        /*body{display: table-cell;vertical-align: middle; }*/
        .out{margin: 0px auto;width:100px; height:100px; border:1px solid red; margin-top: 100px;}
        .inner{width:100px; height:100px; border:1px solid blue; margin:0 auto;
            /*transform: translate(10px ,10px);*/

        }
/*下面是二维转化用到的参数和方法*/
.inner:hover{ 
                    /*background:red;*/ 
                    /*transform-origin:0% 0%;*/
                    transform: translateX(10px);
                    transform: scale(2); 
                    transform:rotate(50deg);
                    transform:skewX(30deg);
                    transform:matrix(0,0,0,0,10,10);
}
    </style>
</head>
<body>
    <div class="out">
        <div class="inner"></div>
    </div>
</body>
</html>