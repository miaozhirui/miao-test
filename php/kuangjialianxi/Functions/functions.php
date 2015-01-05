<?php
header("Content-type:text/html;charset=utf8");
/* 函数库
* @Author: Administrator
* @Date:   2014-03-24 15:50:01
* @Last Modified by:   Administrator
* @Last Modified time: 2014-04-12 22:54:40
*/

function __autoload($className){
	if(require_cache(IPHP_PATH.'Tool/'.$className.'.
		class.php')){

	}else if(require_cache(IPHP_PATH.$className.'.class.php')){
		
	}
}
/**
 * 1
 *打印数据
 * @param  [type] $date [description]
 * @return [type]       [description]
 */
function P($date){
     echo "<style >*{padding:0px;margin:0px}</style>";
      echo "<div style='width:1000;background:#ccc;border-radius:20px;font-size:25px;font-weight:700;padding:10px;line-height:100%;margin-bottom:10px;'>" ;
      echo "<pre>";
      echo $result=is_array($date)?print_r($date,true):$date;
      echo "</div>";
}

/**
 * 2
 * 判断某一个文件是否存在，存在的话，加载进来，加载过就不再加载了，用于加载记录每一次加载的文件，通过缓存判断，已经加载的文件不再加载require ，写一个函数判断文件是否已经加载过
 * @return [type] [description]
 */
function require_cache($file){
         static $date=array();
         if(is_null($file)){
          return $date;
         }
         if(is_string($file)){
          $file=array($file);
         }

         foreach($file as $f){
          if(!isset($date[$f])&&file_exists($f)){
            require $f;
            $date[$f]=true;
          }
         }
}
/**
 * 3
 * 定义配置项
 * @param [type] $name  [description]
 * @param [type] $value [description]
 */
function C($name=null,$value=null){
       static $config=array();
       if(is_array($name)){
          $name=array_change_key($name);
          return $config=array_merge($config,$name);
       }elseif(is_null($name)){
        return $config;
       }elseif(!is_null($value)){
        $name=strtoLower($name);
         if(preg_match("@^:@",$value)){
                $action=substr($value,1);
                switch(strtolower($action)){
                       case 'del' :
                       unset($config[$name]);
                }
         }else{
          $config[$name]=$value;
         }
       }else{
        $name=strtoLower($name);
        return isset($config[$name])?$config[$name]:null;
       }
}
/**
 * 4
 * 改变数组值的大小写的函数
 * @param  [type]  $arr  [description]
 * @param  integer $case 1表示转化为大写，0表示为转化为小写(default)
 * @return [type]        [description]
 */
function array_change_value($arr,$case=0){
     $func=$case?'strtoUpper':'strtoLower';
     foreach ($arr as $k => $v) {
              $arr[$k]=is_array($v)?array_change_value($v,$case):$func($v);
     }
     return $arr;
}

/**
 * 5
 * 用来改变数值键大小写的函数；
 * @param  [type]  $arr  [description]
 * @param  integer $case $case 1为转换为大写，0为转化为小写(default)
 * @return [type]        [description]
 */
function array_change_key($arr,$case=0){
	$func=$case?'strtoUpper':'strtoLower';
	$date=array();
	foreach($arr as $k=>$v){
                 $date[$func($k)]=is_array($v)?array_change_key($v,$case):$v;
	}
    return $date;
}


/**
 * 6
 * 获得易识别的单位:
 * @param  [type] $size [description]
 * @return [type]       [description]
 */
function get_size($size){
if($size>pow(1024,3)){
  $unit=array(3,"G");
}elseif($size>pow(1024,2)){
          $unit=array(2,"M");
}else{
          $unit=array(1,"K");
}
 $zhuanhou=round($size/pow(1024,$unit[0]),1).$unit[1]; 
 return $zhuanhou;
}

/**
 * [format_date_d description]该函数是判断几周前，几天，几小时，几分钟，几秒前；
 * @param  [type] $time [description]
 * @return [type]       [description]
 */
function format_date_d($time){
          $date=time()-$time;
          if($date>=604800){
            return $unit=round($date/604800)."周前";
          }elseif($date>=86400){
            return $unit=round($date/86400)."天前";
          }elseif($date>=3600){
            return $unit=round($date/3600)."小时前";
          }elseif($date>=60){
            return $unit=round($date/60)."分钟前";
          }else{
            return $unit=$date."秒前";
          }
}


/**
 * 7
 * 删除目录（支持多层）
 * @param  string $dir 目录名
 * @return boolean      成功或失败
 */
function del($file){
  //如果资源不存在
  if(!file_exists($file)){
    return true;
  }
  //删除文件
  if(is_file($file) ){
    return  @unlink($file);
  }else{//删除目录
    //删除目录下的所有文件资源
    foreach(glob($file.'/*') as $f){
      is_file($f)?unlink($f):del($f);
    }
    //删除当前目录
    return  rmdir($file);
  }
}
/**
 * 8
 * 复制目录
 * @param  [type] $res_dir [源目录]
 * @param  [type] $to_dir  [目标目录]
 * @return [type]          [description]
 */
function copy_dir($res_dir,$to_dir){
  //目录不存时，不操作
  if(!is_dir($res_dir))return false;
  //目标目录不存时，创建
  is_dir($to_dir) or mkdir($to_dir,0777,true);
  foreach(glob($res_dir.'/*') as $f){
    $to = $to_dir.'/'.basename($f);
    //a/aa    b/aa
    is_dir($f)?copy_dir($f,$to):copy($f,$to);
  }
}
copy_dir("1","8");
/**
 * 9
 * 移动目录
 * @param  [type] $res_dir [description]
 * @param  [type] $to_dir  [description]
 * @return [type]          [description]
 */
function move_dir($res_dir,$to_dir){
  copy_dir($res_dir,$to_dir);
  return del($res_dir);
}
/**
 * 10
 * 操作成功的提示内容
 * @return [type] [description]
 */
function success($msg,$url){
      echo "<div style='width:100%;margin-top:200px; color:green;height:30px;font-size:50px;font-weight700;text-align:center;'>:-){$msg}";
    echo  "<span id='one' style='color:red'>5</span>";
     echo "<script>
          a=5;
        var obj=document.getElementById('one')
        setInterval(function(){ 
           a--
           obj.innerHTML=a;
           if(a==0){
             location.href='$url'
           }
        },1000)
     </script>";
     
     echo '秒后返回!!!';
     
     echo "</div>";
     exit;
}

/**
 * 11
 * 操作错误提示内容
 * @param  [type] $msg [description]
 * @param  [type] $url [description]
 * @return [type]      [description]
 */
function error($msg,$url){
      echo "<h1 style='width:100%;margin-top:200px; color:red;height:30px;font-size:50px;font-weight700;text-align:center;'>:-({$msg}";
    echo  "<span id='one' style='color:red;font-size:70px;'>5</span>";
     echo "<script>
          a=5;
        var obj=document.getElementById('one')
        setInterval(function(){ 
           a--
           obj.innerHTML=a;
           if(a==0){
             location.href='{$url}'
           }
        },1000)
     </script>";
     
     echo '秒后返回!!!';
     
     echo "</h1>";
     exit;
}








/**
 * [upload description]上传文件
 * @param  [type] $dir [description]
 * @return [type]      [description]
 */
 function upload($dir=null){
          if(is_null($dir)){
            $dir='upload/'.date("Y/m/d").'/';
          }else{
                $dir=str_replace('\\','/',$dir);
                 $dir=substr($dir,-1)=='/'?$dir:$dir.'/';
          }
          is_dir($dir) or mkdir($dir,0777,true);
            static $upload_files=array();
          foreach($_FILES as $name=>$date){
            if($_FILES[$name]['error']>0){
              continue;
            }
            $src=$_FILES[$name]['tmp_name'];
            $info=pathinfo($_FILES[$name]['name']);
                   $to=$dir.time().mt_rand(1,10000).'.'.$info['extension'];
            if(is_uploaded_file($src)&&move_uploaded_file($src, $to)){
            $date[]=time();
            $upload_files[]=$date;
            } 
          }
          return $upload_files;
}
