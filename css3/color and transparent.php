<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>颜色和透明度</title>
    <style type="text/css">
/*     一、 透明度0.5 透明就是说下面如果有内容的话，是可以看到下面的
        .box{
            width:100px;
            height:100px;
            background: rgba(255, 0, 0, 0.6)
        }*/

/*   二、这种的透明方式是里面的内容也是透明的，并且ie火狐下面是不一样的  
 .box{
    width:100px;height:100px;
    background: red;
    opacity: 0.5;
    filter:alpha(opacity=50);
   }   */  
   /*三、css的渐变*/
   .box{
    width:200px; height:200px; 
        background:-moz-linear-gradient(top, green,blue);
   }
    </style>
</head>
<body>
    <div class="box">1111</div>
</body>
</html>

















