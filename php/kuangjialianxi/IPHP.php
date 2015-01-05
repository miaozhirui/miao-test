<?php
// 框架入口文件
final class IPHP{
	static public function run(){
		// 定义基本常量
		self::set_define();
		// 加载框架核心文件 
		self::load_core_file();
		Application::run();
	}
	//加载框架核心文件
	static private function load_core_file(){
		$files=array(
			IPHP_PATH.'Functions/functions.php',
			IPHP_PATH.'Application.class.php'
			)

	}
	// 定义基本常量
	static private function set_define(){
		//框架根目录
		define("IPHP_PATH",dirname(__FILE__).'/');
	}
}