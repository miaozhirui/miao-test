<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>继承性</title>
    <style type="text/css">
        .out{border:1px solid red; font-size: 18px;}
        .inner{color:blue; border:1px solid blue;}
        a{color:red;}
        .one{color:red;}
        span.one{color:blue;}
        .two{color:blue !important}
    </style>
</head>
<body>
    <div class="out">
        <div class="inner">
            <a href="#" class="one">连接</a>
            <a href="#" class="one">连接</a>
            <a href="#" class="one">连接</a>
            <span class="one">hou</span>
            <span class="tow" style="color:red">one</span>
        </div> 
    </div>
</body>
</html>