<?php
// 框架入口文件
final class iPHP{
      // 运行框架
      static public function run(){
      	if(!defined("APP_NAME")){
      		header("Content-type:text/html;charset=utf8");
      		echo "常量APP_NAME未定义";exit;
      	}
      	// 定义常量
      	self::set_define();
      	// 引入框架核心文件
      	self::load_core_file();
      	Application::run();
      }
      // 引入框架核心文件
      static private function load_core_file(){
      	$file=array(
               IPHP_PATH.'Functions/function.php',
               IPHP_PATH.'Application.class.php'
      	 );
      	foreach($file as $f){
      		require $f;
      	}
      }
      // 定义常量
      static private function set_define(){
            //框架根目录
             define("IPHP_PATH",dirname(__FILE__).'/');
             //网站的根目录
             define("ROOT_PATH",dirname($_SERVER['SCRIPT_NAME']).'/');
             // 网址
             //__PUBLIC指的是当前文件所在的目录
             define("ROOT","http://".$_SERVER['HTTP_HOST'].ROOT_PATH);
             define("__WEB__","http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']);


      }
}
iPHP::run();







