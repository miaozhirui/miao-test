<?php
/**
 * 调用这个函数需要往构造函数里面传入三个参数$dir $allow_size $allow_type
 */
class Upload{
	public $dir;
	public $allow_type;
	public $allow_size;
	// 创建配置项
  /**
   * [__construct description]
   * @param [type] $dir        [description]要上传到那个目录
   * @param [type] $allow_size [description]允许上传文件的大小
   * @param [type] $allow_type [description]允许上传文件的类型
   */
	public function __construct($dir=null,$allow_size=null,$allow_type=null){
                $this->dir=$dir?$dir:'upload'.'/'.date("Y/m/d");
                $this->allow_size=$allow_size?$allow_size:2000000;
                $this->allow_type=$allow_type?$allow_type:array("jpg","jpeg","png","gif");
                $this->allow_type=$this->array_change_value($allow_type);
	}

	
	// 通过这个函数在外面进行调用
	public function upload(){
		// 判断用户是否上传了内容
               if(empty($_FILES))return false;
               // 格式化上传的文件
               $files=$this->format();
               // 过滤上传的文件，不符合要求的我就把他给过滤掉
               $date=$this->check($files);
               // 把临时上传到服务器的内容，存到硬盘上面
               $upload=$this->save($date);
               // 记录成功上传的文件
               return $upload;
	}


 /**
  * [format description]格式化上传的文件
  * @return [type] [description]格式化之后的文件，一个二维数组
  */
     private function format(){
      // 建立一个新的数组
     	    $date=array();
     	    foreach ($_FILES as $file){
            // 判断$file["name"]是否是一个数组，是的话，说明前台用户是通过li[]这种方式上传的，不是的话，就是通过name=pic的这种方式上传的，我们要将他们进行统一
                 if(is_array($file["name"])){
                  // 建立一个新的数组，将通过[]这种方式上传的文件进行遍历，然后把里面对应的内容给取出来放到新的数组当中，将这个数组作为元素单元最后压倒$date这个数组里面
                     $new=array();
                     foreach($file["name"] as $k=>$v){
                     	$new['name']=$file["name"][$k];
                     	$new['type']=$file["type"][$k];
                     	$new["tmp_name"]=$file["tmp_name"][$k];
                     	$new["error"]=$file["error"][$k];
                     	$new["size"]=$file["size"][$k];
                     	$date[]=$new;
                     }
                 }else{
                  // 如果$file["name"]不是一个数组的话，说明$file里面就是具体的值，把这个数组作为元素单元压倒$date这个数组当中
                 	$date[]=$file;
                 }
     	    }
             return $date;
     }


/**
 * [check description]过滤不正常的文件
 * @param  [type] $files [description]格式化之后的文件
 * @return [type]        [description]返回的结果是过滤之后的文件
 */
  public function check($files){
    // 检测统一之后的数组，定义新的数组，将符合要求的元素单元放到新的数组当中
          $date=array();
          foreach($files as $f=>$v){
            // 上传错误的时候推出这次循环，并且扔掉当前的元素单元
          	if($v["error"]>0)continue;
            // 检测是否通过http post这种方式上传的
          	if(!is_uploaded_file($v["tmp_name"]))continue;
            // 检测上传的尺寸是否符合要求
          	if($v["size"]>$this->allow_size){continue;}
          	$info=pathinfo($v["name"]);
          	$houzui=strtolower($info["extension"]);
            // 检测上传的类型是否符合要求
                   if(!in_array($houzui,$this->allow_type))continue;
                   $date[]=$v;
          	
          }
          return $date;

  }


	/**
	 * [save description]把临时放在服务器的文件保存到硬盘当中
	 * @param  [type] $date [description]要上传到硬盘的文件
	 * @return [type]       [description] 返回的是上传成功的文件
	 */
      private function save($date){
        定义一个新的数组，记录上传成功的文件
      	$dates=array();
        // 判断要上传到的那个目录是否存在，存在我们就往下面执行，不存在就创建一个新的目录
      	is_dir($this->dir) or mkdir($this->dir,0755,true);
              foreach ($date as $v){
                // 获得在服务器临时存放的文件
                   $src=$v["tmp_name"];
                   $info=pathinfo($v["name"]);
                   // 定义一个新的硬盘目录
                   $to=$this->dir.'/'.time().mt_rand(1,10000).'.'.$info["extension"];
                   // 有权限上传的话，我们就记录上传成功的文件
                   if(move_uploaded_file($src, $to)){
                   	$v["time"]=time();
                   	$v["filename"]=$to;
                   	p($v);
                            $dates[]=$v;
                   }
              }
              return $dates;
      }

    // 将程序员上传的数组里面的值格式化为小写
    private function array_change_value($arr,$case=0){
     $func=$case?'strtoUpper':'strtoLower';
     foreach ($arr as $k => $v) {
              $arr[$k]=is_array($v)?array_change_value($v,$case):$func($v);
     }
     return $arr;
}
}
