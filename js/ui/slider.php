<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>滑块效果的制作</title>
    <link rel="stylesheet" type="text/css" href="jquery-ui-1.10.2.custom.css">
    <script type="text/javascript" src="../../jquery-1.8.3.js"></script>
    <script type="text/javascript" src="jquery-ui-1.9.2.custom.js"></script>
     <style>
#red, #green, #blue {
float: left;
clear: left;
width: 300px;
margin: 15px;
}
#swatch {
width: 120px;
height: 100px;
margin-top: 18px;
margin-left: 350px;
background-image: none;
}
#red .ui-slider-range { background: #ef2929; }
#red .ui-slider-handle { border-color: #ef2929; }
#green .ui-slider-range { background: #8ae234; }
#green .ui-slider-handle { border-color: #8ae234; }
#blue .ui-slider-range { background: #729fcf; }
#blue .ui-slider-handle { border-color: #729fcf; }
</style>
    <script type="text/javascript">
         // $(function() {
         //    $( "#slider-range" ).slider({
         //    range: true,
         //    min: 0,
         //    max: 500,
         //    values: [ 7, 300 ],
         //    slide: function(e, ui) {
         //        // ui里面有一些参数
         //        $("#amount").val("$"+ui['values'][0]+"-"+"$"+ui['values'][1]);
         //    }
         //    });
         //    // console.log($("#slider-range").slider('values'));//放入参数可以或得到里面的值
         //    $("#amount").val("$"+$("#slider-range").slider("values", 0)+"-"+"$"+$("#slider-range").slider("values", 1));
         //   })
    </script>
    <style type="text/css">
        #slider{
            margin:20px;
            width:400px;
        }
       #slider-range .ui-slider-handle{
            cursor:pointer;
            border:0px;
            background:url(../../css3/images/3.jpg);
        }
    </style>
</head>
<body>
<p>
<!-- <label for="amount">Price range:</label>
<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
</p>
<div id="slider-range"></div> -->

<!-- 默认功能 -->
<script type="text/javascript">
    $(function() {
        $(".default").slider();
    })
</script>
<div class="default"></div>

<!-- 颜色调色器 -->
<div style="margin-top:50px;">
    <div id="red"></div>
<div id="green"></div>
<div id="blue"></div>
<div id="swatch" class="ui-widget-content ui-corner-all"></div>
</div>
 <script>
 // toString是将数字转化为字符串（默认的是转化为10进制，里面如果放入16的话是转化为十六进制）
function hexFromRGB(r, g, b) {
var hex = [
r.toString( 16 ),
g.toString( 16 ),
b.toString( 16 )
];
$.each( hex, function( nr, val ) {
if ( val.length === 1 ) {
hex[ nr ] = "0" + val;
}
});
return hex.join( "" ).toUpperCase();
}
function refreshSwatch() {
var red = $( "#red" ).slider( "value" ),
green = $( "#green" ).slider( "value" ),
blue = $( "#blue" ).slider( "value" ),
hex = hexFromRGB( red, green, blue );
$( "#swatch" ).css( "background-color", "#" + hex );
}
$(function() {
$( "#red, #green, #blue" ).slider({
orientation: "horizontal",
range: "min",
max: 255,
value: 127,
slide: refreshSwatch,
change: refreshSwatch
});
$( "#red" ).slider( "value", 255 );
$( "#green" ).slider( "value", 140 );
$( "#blue" ).slider( "value", 60 );
});
</script>
</body>
</html>










