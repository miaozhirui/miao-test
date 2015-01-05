<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
     /*   .block{
            width:400px;
            height:400px;
            background-color:red;
            margin:0 auto;*/
            /*当背景过渡到别的状态下的时候延长的时间*/
       /*     -moz-transition:background 0.5s, height 0.1s;

        }*/
       /* .block:hover{
            background:blue;
            height:200px;
        }*/

        .block{
            width:300px;
            height:300px;
            background: red;
            -moz-transition:1s;
        }

    </style>
    <script type="text/javascript" src="../jquery-1.8.3.js"></script>
    <script type="text/javascript">
            $(function() {
                $(".block").click(function() {
                    $(this).css({"height":"500px", "width":"500px"})
                })
            })
    </script>
</head>
<body>
    <div class="block"></div>
</body>
</html>










