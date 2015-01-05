<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<style type="text/css">
    
    pre{
        word-wrap: break-word;
        /*white-space: pre-wrap;*/
            }
            .box{
                width:100px; height:100px; border:1px solid blue;
                color:#888;
                word-wrap:break-word;
                text-decoration: blink;
                resize:both;
            }
</style>

</head>
<body>

输入你的名字: <textarea type="text" id="fname"></textarea>
<pre id="info" style="width:100px;dispaly:inline-block; height:100px; border:1px solid red; ">addjfofijdojfsofjodsijfodsf</pre>
<div class="box">addjfofijdojfsodddddddddd

    fjoddsijfodsf</div>
</body>
<script>
var element=document.getElementById("fname");
var info = document.getElementById('info');
element.onkeyup=function(e) {
    var value = element.value;

    console.log(value)
    info.innerHTML = value
}   
</script>
</html>
    