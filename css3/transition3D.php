<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>transition3D效果的建立</title>
    <style>
        #exper{
            -webkit-perspective:800;   
            -webkit-perspective-origin:50% 50%;
            /*告诉浏览器我们队transform的操作都是基于3d的*/
            -webkit-transform-style:-webkit-preserve-3d;
        }
        #block{
            width:500px;
            height:500px;
            background: red;
            margin:100px auto;
            -webkit-transform:rotateX(45deg);
            /*-webkit-transform:rotateZ(45deg);*/
        }
    </style>
</head>
<body>  
    <div id="exper">
        <div id="block">
            
        </div>
    </div>
    
</body>
</html>

