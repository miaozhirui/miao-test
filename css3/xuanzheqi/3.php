<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="../../jquery-1.8.3.js"></script>
    <title>css选择器中</title>
    <style>
     .first{
        border:1px solid red;
     }
     .second{
        border:1px solid blue;
     }
     .three{
        border:1px solid purple;
     }
     ul li{
        list-style-type: none;
        padding:0px;
        margin:5px 0px;
        /*float: left;*/
        /*margin-left: -20px;*/
     }
    </style>
    <style type="text/css">
        
    </style>
    <script type="text/javascript">

       $(function() {
        // console.log(document.styleSheets[1])
        var selects=$("#select");
        var spans=$("span");
        selects.keyup(function() {
            if(selects.val()=="") {
                return;
            }
            for(var i=0; i<document.styleSheets[1].cssRules.length; i++){
                document.styleSheets[1].deleteRule(i);
            }
            var rule=selects.val()+spans.html();
            document.styleSheets[1].insertRule(rule,0);//往样式表中插入样式
        })
       })
    </script>
</head>
<body>
    <input type="text" id="select">
    <span >
        {
        background:red
    }
    </span>
    <ul class="first">
        <span></span>
        <li>first-one</li>
        <li>first-two</li>
        <li>first-three</li>
        <li>first-four</li>
    </ul>

    <ul class="second">
        <li>second-one</li>
        <li>second-two</li>
        <li>second-three</li>
        <li>second-four</li>
    </ul>

     <ul class="three">
        <li>three-one</li>
        <li>three-two</li>
        <li>three-three</li>
        <li>three-four</li>
    </ul>
</body>
</html>