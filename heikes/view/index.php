<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/index.css">
    <script type="text/javascript" src="../js/sea.js" data-main="../js/moudel/init.js"></script>
    <script type="text/javascript" src="../js/moudel/jquery-1.8.3.js"></script>
   <style type="text/css">
      /*.tab{width:1335px; height:50px; background:red;}*/
      body{overflow-y:hidden;}
      .tab{width:50px; height:642px; float: left; background:#1B1B1B; display: none;}
      .tab a{display: block; width:50px; height:50px; margin-top: 10px; line-height: 50px; text-align: center; color:white; font-size: 24px; text-decoration: none; transition:transform 0.5s;}
      .tab a:hover{transform:rotate(360deg);}
      .tab a.first{color:red; font-weight: 700; margin-top: 250px}
      #echart{width:1299px; height:642px; float: left}

      @-webkit-keyframes myfirst {
        5%{transform:rotate(10deg) scale(1)}
        10%{transform:rotate(20deg) scale(2)}
        15%{transform:rotate(40deg) scale(3)}
        20%{transform:rotate(55deg) scale(4)}
        25%{transform:rotate(70deg) scale(5)}
        30%{transform:rotate(100deg) scale(6)}
        35%{transform:rotate(120deg) scale(7)}
        40%{transform:rotate(150deg) scale(8)}
        45%{transform:rotate(170deg) scale(7)}
        50%{transform:rotate(200deg) scale(6)}
        55%{transform:rotate(230deg) scale(5)}
        60%{transform:rotate(250deg) scale(4)}
        80%{transform:rotate(300deg) scale(3)}
        100%{transform:rotate(360deg) scale(1)}
      }
      img{width:300px; height:300px;display:block; -webkit-animation: myfirst 2s linear}

   </style>
</head>
<body>

    <div id="echart">
        <!-- <img src="../images/1.gif" alt=""> -->
        <img src="../images/blackhole.png" style="margin:0 auto; margin-top:100px;">
    </div>
        <div class="tab">
      <a href="javascript:;" class="first">A</a>
      <a href="http://m.local-test.com/heike/view/">B</a>      
    </div>
</body>
</html>