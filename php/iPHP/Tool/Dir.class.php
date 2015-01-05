<?php

class Dir{
/**
 * 删除目录（支持多层）
 * @param  string $dir 目录名
 * @return boolean      成功或失败
 */
static public function del($file){
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
 * 复制目录
 * @param  [type] $res_dir [源目录]
 * @param  [type] $to_dir  [目标目录]
 * @return [type]          [description]
 */
 static public function copy_dir($res_dir,$to_dir){
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


/**
 * 移动目录
 * @param  [type] $res_dir [description]
 * @param  [type] $to_dir  [description]
 * @return [type]          [description]
 */
static public function move_dir($res_dir,$to_dir){
  copy_dir($res_dir,$to_dir);
  return del($res_dir);
}

/**
 * [mk_dir description]
 * @param  [type] $dir [description]要创建的目录
 * @return [type]      [description]返回有没有创建成功
 */
static public function mk_dir($dir){
	// a/b/c
      $dir=str_replace('\\','/',$dir)
      $dir=explode($dir);
      $path="";
      foreach($dir as $file){
      	$path.=$file.'/';
      }
      return is_dir($path) or mkdir($path,0777,true);
}

}









