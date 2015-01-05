<?php
require "Org/libs/Smarty.class.php";
// 控制器基类
class Control{
      private $_view;
      private $stu=null;
     function __construct(){
        $this->_view=new Smarty;
         $this->_view->template_dir=TPL_PATH;
         //路径后面要加上斜杠
         $this->_view->compile_dir=TPL_PATH.'Compile';
         is_dir($this->_view->compile_dir) or mkdir($this->_view->compile_dir,0755,true);
     }
     /**
      * 在类外面直接为类里面的私有的属性设置值
      * @param [type] $name  [description]
      * @param [type] $value [description]
      */
     function __set($var,$value){
        $this->_view->assign($var,$value);
     }
     /**
      * 向模板分配变量
      * @param  [type] $name  [description]
      * @param  [type] $value [description]
      * @return [type]        [description]
      */
function assign($var,$value){
         $this->_view->assign($var,$value);
}
public function display($tpl=null){
    if(is_null($tpl)){
         $tpl=METHOD.'.html';
    }else{
         $tpl=substr($tpl,-5)==='.html'?$tpl:$tpl.'.html';
    }
        $this->_view->display($tpl);
}
/**
 * [success description]成功执行的动作
 * @param  [type] $message [description]
 * @param  [type] $url     [description]
 * @return [type]          [description]
 */
        protected function success($message,$url=''){
             $smarty=new Smarty;
             $smarty->template_dir=APP.'/Tpl/public';
            $smarty->compile_dir=APP.'Tpl/public/compile';
            $smarty->assign('message',$message);
            $smarty->assign('url',$url);
            $smarty->display("success.html");
	}
/**
 * [error description]失败执行的方法
 * @param  [type] $message [description]
 * @param  [type] $url     [description]
 * @return [type]          [description]
 */
       protected function error($message,$url=''){
             $smarty=new Smarty;
             $smarty->template_dir=APP.'/Tpl/public';
             $smarty->compile_dir=APP.'/Tpl/public/compile';
             $smarty->assign('message',$message);
             $smarty->assign('url',$url);
             $smarty->display("error.html");
    }
}
