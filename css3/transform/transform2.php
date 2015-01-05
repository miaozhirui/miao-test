<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>css3的二维转换</title>
    <style>
        div{width:100px; height:100px;margin-top: 10px; line-height: 100px; text-align: center; font-weight: 700;}
        .a{background:red; }
        .b{background:blue;}
        .c{background:purple;}
        .d{background:yellow;}
        div:hover{ box-shadow: 0px 0px 9px 2px rgba(0,0,0,0.4)}
        .a:hover{background:red; transform:translate(10px,10px);}
        .b:hover{background:blue;transform:rotate(45deg);}
        .c:hover{background:purple; transform:scale(2);}
        .d:hover{background:yellow;}
    </style>
</head>
<body>
    <div class="a">translate</div>
    <div class="b">rotate</div>
    <div class="c">scale</div>
    <div class="d"></div>
</body>
</html>