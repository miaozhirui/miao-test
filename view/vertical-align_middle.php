<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>让元素居中显示</title>
    <style>
    /*让元素里面的内容居中*/
        .box{width:100px; height: 100px; border:1px solid red; text-align: center; line-height: 100px;}
        .box .inner{width:50px; border:1px solid blue; height:50px; margin:0 auto; vertical-align: middle; display: inline-block;}
    </style>
</head>
<body>
    <div class="box"><div class="inner"></div></div>
</body>
</html>