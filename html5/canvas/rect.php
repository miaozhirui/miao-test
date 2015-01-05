<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>canvas路径</title>
    <script type="text/javascript">
        window.onload=function() {
            var obj = document.getElementById('canvas');
            var cObj = obj.getContext('2d');
            cObj.fillStyle = "green"
            cObj.strokeStyle = "red"
            // cObj.fillRect(0,0,100,100)
            // cObj.rect(0,0,100,100);//画出了矩形(此时浏览器不渲染)
            // cObj.stroke()//告诉浏览器
            // cObj.fill()
            // drawRect(0,0,50,300)
            // function drawRect(x,y,w,h) {
            //     cObj.rect(x,y,w,h);
            //     cObj.stroke()
            //     cObj.fill()
            // }
        }
    </script>
</head>
<body>
    <canvas width=400; height=400 id="canvas" style="background:#eee"></canvas>
</body>
</html>