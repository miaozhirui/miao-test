<!DOCTYPE html public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

 

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="Keywords" content="简单的XHTML页面" />

<meta name="Description" content="这是一个简单的XHTML页面" />

<title>简单的XHTML页面</title>

 

</head>

<body> 

changeText:<button class="changeText">abc</button><button class="changeText">def</button><button class="changeText">xyz</button><br />

 

<div id="con">

<p><input type="radio" class="myFont" name="xxx"/><em>默认文字</em></p>

<p><input type="radio" class="myFont" name="xxx"/><em>默认文字</em></p>

<p><input type="radio" class="myFont" name="xxx"/><em>默认文字</em></p>

<p><input type="radio" class="myFont" name="xxx"/><em>默认文字</em></p>

<p><input type="radio" class="myFont" name="xxx"/><em>默认文字</em></p>

<p><input type="radio" class="myFont" name="xxx"/><em>默认文字</em></p>

<p><input type="radio" class="myFont" name="xxx"/><em>默认文字</em></p>

<p><input type="radio" class="myFont" name="xxx"/><em>默认文字</em></p>

<p><input type="radio" class="myFont" name="xxx"/><em>默认文字</em></p>

<p><input type="radio" class="myFont" name="xxx"/><em>默认文字</em></p>

</div>

 

 

</body>

<script type="text/javascript" src="http://cn.yimg.com/i/yui/2.6.0/build/yahoo-dom-event/yahoo-dom-event.js"></script>

<script>

<!--

var $D = YAHOO.util.Dom;

var $Class = $D.getElementsByClassName;

var $E = YAHOO.util.Event;

//基础代码

var getEl = function(){

var ra = $Class('myFont','input');

for(var i = 0; i<ra.length;i++){

if(ra[i].checked){

var el = ra[i];

break;

}

}

if(!el){

alert("请选择一个checkbox");

return false;

}

return {el:el,i:i};

};

 

/*原始类的代码*/

var fontClass = function(text){

this.text = (typeof text)=="undefined"?'默认文字':text;

this.setText = function(textx){

this.text = textx;

};

 

this.showText = function(){

var ell = getEl().el;

ell.parentNode.getElementsByTagName('em')[0].innerHTML = this.text;

};

this.show = function(){

this.showText();

};

};

 

 

//运行时逻辑

var ao = new Array;

$E.on(window,'load',function(e){

var con = $D.get('con');

for(var i = 0 ; i < 10 ;i ++){

ao[i] = new fontClass();

}

});

$E.on($Class('changeText','button'),'click',function(e){

$E.stopEvent(e);

var el = $E.getTarget(e);

var text = el.innerHTML;

var elo = getEl();

ao[elo.i].setText(text);

ao[elo.i].show();

});

 

//-->

</script> 

</html>