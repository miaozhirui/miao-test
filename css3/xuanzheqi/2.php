<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="../../jquery-1.8.3.js"></script>
    <title></title>
    <style>
        .first-div{
            border:1px solid red;
        }
        .second-div{
            border:1px solid blue;
        }
        .three-div{
            border:1px solid purple;
        }
        div{
            margin:5px 0;
        }
    </style>
    <style type="text/css">
        
    </style>
    <script type="text/javascript">

       $(function() {
        console.log(document.styleSheets[1])
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
    <span style="display:block; height:30px;">
        {
        border:1px solid red
    }
    </span>
    <div class="first-div">
        <div class="first-one">
            first-one
        </div>
        <div class="first-two">
            first-two
        </div>
        <div class="first-three">
            first-three
        </div>
         <div class="first-four">
            four-three
        </div>
    </div>

      <div class="second-div">
        <div class="second-one">
            second-one
        </div>
        <div class="second-two">
            second-two
        </div>
        <div class="second-three">
            
        </div>
    </div>

<!-- css3里面的后代 -->
      <div class="three-div">
        <div class="three-one">
            three-one
            <p></p>
        </div>
         <div class="three-one">
            three-one
            <p></p>
        </div>
    </div>
    <div></div>
</body>
</html>