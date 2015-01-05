<?php
require "../common/functions.php";
p(__FILE__);
//框架根目录
p(dirname(__FILE__));



P($_SERVER['SCRIPT_NAME']);
//网站根目录
p(dirname($_SERVER['SCRIPT_NAME']));
//网址
// p("http://".$_SERVER['HTTP_HOST']);
p("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']));
P("http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']);
//问题
p($_SERVER);
// echo time();

