<?php
// 应用类
final class Application{
	static public function run(){
             // 设置常量
             self::set_define();
             // 加载配置
            C(require IPHP_PATH.'Configs/config.php');
            if(is_file(APP_NAME.'/Configs/config.php'))
              C(require APP_NAME.'/Configs/config.php');
          // 运行应用
          self::runApp();
	}
	// 运行应用
	static private function runApp(){
		$app=APP; $control=CONTROL; $method=METHOD;
		if(!is_dir($app)) {
			// 创建一个应用
			self::set_file();
		}
		$classFile=$app. '/Control/'. $control. 'Control'. '.class.php';
		if(!is_file($classFile)){
			echo "{$classFile}类文件不存在";exit;
		}
		require $classFile;
		$className=$control.'Control';
		if(!class_exists($className)){
			echo "模块{$className}不存在";exit;
		}
		$obj=new $className;
		if(!method_exists($obj,$method)){
			echo "方法{$method}不存在";exit;
		}
		$obj->$method();
	}
           // 创建一个应用
           static private function set_file(){
             // 创建首页模板目录
             mkdir(APP_NAME."/Tpl/index",0755,true);
             // 创建首页模板文件
             $data="<div style='height:300px;font-size:45px;line-height:300px;text-align:center;font-weight:700'>欢迎来到后盾网来学习</div>";
             file_put_contents(APP_NAME.'/Tpl/index/'.'index.html',$data);
             // 创建一个配置项
             mkdir(APP_NAME.'/Configs/',0755,true);
             $data="<?php \n if(!defined('APP_NAME')) exit; \n return array();\n ?>";
             file_put_contents(APP_NAME.'/Configs/config.php', $data);
              // 创建一个类文件
              mkdir(APP_NAME.'/Control',0755,true);
              $control=<<<str
<?php
class indexControl extends Control{
public function index(){
         \$this->display('index.html');
                }
           }
str;
         file_put_contents(APP_NAME.'/Control/indexControl.class.php', $control);
        //创建公共的模板目录
        mkdir(APP_NAME.'/Tpl/public',0755,true);
        //创建公共的模板编译目录
        mkdir(APP_NAME.'/Tpl/public/compile',0755,true);
        copy(IPHP_PATH.'Tpl/success.html',APP_NAME.'/Tpl/public/success.html');
        copy(IPHP_PATH.'Tpl/error.html',APP_NAME.'/Tpl/public/error.html');

           }
	// 设置常量
	static private function set_define(){
		$app=APP_NAME;
		$control=isset($_GET['c'])?$_GET['c']:'index';
		$method=isset($_GET['m'])?$_GET['m']:'index';
		defined("DEBUG") or define("DEBUG",false);
		define('APP',$app);
		define("IS_POST",!empty($_POST));
		define('CONTROL',$control);
		define('METHOD',$method);
		define('TPL_PATH',$app.'/Tpl/'.$control.'/');
		define('__PUBLIC',APP.'/Tpl/'.CONTROL.'/');
	}
}