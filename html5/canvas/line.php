<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>canvas路径</title>
    <script type="text/javascript">
        window.onload=function() {
            var obj = document.getElementById('canvas');
            cObj = obj.getContext('2d');
            cObj.fillStyle = "green"
            cObj.strokeStyle = "red"
            drawLine(0,0,200,200)
            drawLine(50,100,150,300)
            function drawLine(x1,y1,x2,y2) {
            cObj.moveTo(x1,y1);
            cObj.lineTo(x2,y2);
            cObj.stroke();
            }
        }
    </script>
</head>
<body>
    <canvas width=400; height=400 id="canvas" style="background:#eee"></canvas>
</body>
</html>