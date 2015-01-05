<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script type="text/javascript">
        window.onload=function() {
            var context = document.getElementById('box').innerHTML;
            var element = document.getElementsByTagName('div');
            console.log(element instanceof Object)
            element = Array.prototype.slice.call(element);
            element.push(1234)
            console.log(element)
        }
    </script>
</head>
<body>
    <div id="box">今天的天气真的是不错啊</div>
    <div class="box1">明天</div>
    <div class="box2">后天</div>
</body>
</html>