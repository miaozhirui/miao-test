<?php
//验证码类
class Code{
      private $num;//生成的文字数量
      private $fontSize;//生成的文字的大小
      private $width;//生成的验证码的宽度
      private $height;//生成的验证码的高度
      private $code;//图像上面的文字
      private $img;//创建图像资源
      public function __construct($num=4,$fontSize=16,$width=100,$height=30){//传递进来的参数在下面要用到，所以要定义成类属性
	       $this->num=$num;
	       $this->fontSize=$fontSize;
	       $this->width=$width;
	       $this->height=$height;
      }
      //通过访问这个接口函数，来放执行类里面的其他的方法
      public function code(){
      	//生成验证码的文字
      	$this->set_code();
      	//创建一个画布
      	$this->create_image();
      	//像画布里面写入文字
      	$this->write();
      	//设置干扰线
      	$this->set_line();
             header("Content-type:image/png;charset=utf8");
             imagepng($this->img);

      }
      //设置干扰线
   private function set_line(){
   	for($i=0;$i<4;$i++){
   	$color=imagecolorallocate($this->img, mt_rand(0,155),mt_rand(0,155), mt_rand(0,155));
           imageline($this->img, mt_rand(0,$this->width), mt_rand(0,$this->height), mt_rand(0,$this->width), mt_rand(0,$this->height),$color);
   	}

   	//设置杂色
   	 for($i=0;$i<200;$i++){
                   imagesetpixel ( $this->img ,mt_rand(0,$this->width) ,mt_rand(0,$this->height) ,$color );
                   }
   	
   }

      //像画布里面写入文字(其实这个时候这儿画布就是相当于一张图片)
     private function write(){
     	//这里面要的颜色一定要在外面创建一下
     	$fontfile=IPHP_PATH.'Data/Font/'.'msyhbd.ttf';
     	
          $w=$this->width/$this->num;
     	for($i=0;$i<$this->num;$i++){
     		$color=imagecolorallocate($this->img,mt_rand(0,155),mt_rand(0,155),mt_rand(0,155));
     		imagettftext ( $this->img,$this->fontSize,mt_rand(-20,20),$w*$i+5,$this->height*0.8 ,$color,$fontfile,$this->code[$i] );
     	}
     }
      //创建一个画布
     private function create_image(){
          $img=imagecreatetruecolor($this->width,$this->height);//画布默认的背景是黑色的
          $white=imagecolorallocate($img,255,255,255);
          imagefill($img,0,0, $white);
          $color=imagecolorallocate($img,188,188,188);
          imageRectangle($img,0,0,$this->width-1,$this->height-1,$color);

          $this->img=$img; 
     }

      //生成验证码的文字
      private function set_code(){
      	$str='4567890rfghjklvbnm456785678tyuiouiyui';//想获取里面的随机的四个，（可以先获取其中的一个，然后再获取在连接）
      	$len=strlen($str);
          $code='';
          for($i=0;$i<$this->num;$i++){
          	$code.=$str[mt_rand(0,$len-1)];
          }
      	//因为这个$code变量是在别的函数当中用的，所以我们在类当中我们要将它定义成类属性
      	$this->code=strtoUpper($code);//一生成这个验证码文字我就把他存到session当中去
      	$_SESSION['code']=$this->code;

      }

}



































