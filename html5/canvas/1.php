<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>一</title>
    <style type="text/css">
        canvas{
            /*border-radius: 50%;*/
        }
    </style>
    <script type="text/javascript">
        window.onload=function() {
            var canvas = document.getElementById('canvas');
            // 得到一个绘图环境(元素对象里面有一个属性，可以获得绘图环境，就是绘图对象)
            var cobj = canvas.getContext('2d');//获得的是一个对象，里面封装了好的属性和方法供我们来绘图使用
            // cobj.rect(0,0,200,200)
            // var colorObj = cobj.createLinearGradient(0, 0, 100, 0)
            // var colorObj = cobj.createRadialGradient(50,50,10,50,50,50)
            var colorObj = cobj.createPattern(document.getElementById('img'),'repeat')
            //colorObj.addColorStop(0,'red')
            //colorObj.addColorStop(0.2,'purple')
            //colorObj.addColorStop(1,'green')
            cobj.fillStyle = colorObj;
            cobj.strokeStyle = 'green';
            cobj.shadowColor = 'black'
            cobj.shadowOffsetX = 3
            cobj.shadowOffsetY  = 3
            cobj.shadowBlur = 9
            cobj.fillRect(0,0,100,100)
            cobj.strokeRect(100,100,100,100)
        }
    </script>
</head>
<body>
    <canvas width=400 height=400 style="background:#eee" id='canvas'>
        <!-- 如果浏览器不支持这个属性就会读里面的内容 -->
        您的浏览器out了
    </canvas>
    <img src="1.png" alt="" id='img' style="display:none">
    jintian
</body>
</html>