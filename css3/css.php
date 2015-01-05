<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>css常用的一些技巧</title>
    <style type="text/css">
    /*首个单词大写*/
        .box{
            width:200px;
            height:200px;
            border:1px solid red;
            word-break:break-all
        }
        .box:first-letter{
            font-size: 300%;
            float: left;
            width:2em;
        }
        /*英文在一个块元素的末尾，然后这个英文很长的话，浏览器默认是不会换行的，一直往后面显示，解决办法*/
        .word-break{
            width:100px;
            height:100px;
            /*当成一个单词不换行那个*/
            /*word-break:break-word;*/
            /*把单词进行换行显示，以防止单词超出块元素*/
            /*word-break:break-all;*/
            white-space:normal;
        }
        
    </style>
</head>
<body>
    <div class="word-break">今天的天气是飞铲的不错的ddddddddddddddddddddd及发动机佛聚合度积分丢分飞虎队发挥</div>
    <div class="box">
       我们的爱啊基地噢飞机哦啊四sddddajiddddddddnt今天的sasdfdsdfsdf季风哦房间搜集发皮经济法金佛的设计费</div>
</body>
</html>