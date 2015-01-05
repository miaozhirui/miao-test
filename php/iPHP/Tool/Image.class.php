<?php
require "../../common/functions.php";
class pic{
	public $water_text="缪志瑞";
	public $water_size=30;
	public $water_fontfile="msyh.ttf";
	public $water_logo="logo.jpeg";
	public function tump($file,$t_w,$t_h){
	      if(!$this->check($file)){return false;}
                // 获得源图片
                $info=getimagesize($file);
                // p($info);
                switch($info['2']){
                	  case '1':
                	   $func="imageCreateFromgif";
                	   break;
                	   case '2':
                	     $func="imageCreateFromjpeg";
                	   break;
                	   case '3':
                	    $func="imageCreateFrompng";
                	   break;
                }
                // 获得原图片
                $img=$func($file);
                $img_w=imagesx($img);
                $img_h=imagesy($img);
                // 创建画布
                $res=imageCreateTrueColor($t_w,$t_h);
                // // 从新获得图片的宽度和高度
                if($img_w/$t_w>$img_h/$t_h){
                   $img_w=$img_h/$t_h*$t_h;
                }else{
                	$img_h=$img_w/$t_w*$t_w;
                }
                // 拷贝合并
                imagecopymerge ( $res,$img,0,0,0,0,$img_w,$img_h ,100);
                $shuchu=str_replace('/','',$info['mime']);
                return $shuchu($res,$file);
	}
              public function water($file,$type=1,$water_pos=9){
               if(!$this->check($file)){return false;}
                // 获得源图片
                $info=getimagesize($file);
                switch($info['2']){
                	  case '1':
                	   $func="imageCreateFromgif";
                	   break;
                	   case '2':
                	     $func="imageCreateFromjpeg";
                	   break;
                	   case '3':
                	    $func="imageCreateFrompng";
                	   break;
                }
                // 获得原图片
                $img=$func($file);
                if($type==1){
                     // 文字水印      
                     $box=imagettfbbox ($this->water_size,0,$this->water_fontfile,$this->water_text );
                      $box_w=$box[2]-$box[0];
                      $box_h=abs($box[5]-$box[1]);
                       $img_w=imagesx($img);
                       $img_h=imagesy($img);
                       $color=imageColorAllocate($img,0,0,255);
                       $water_pos=$this->water_pos($box_w,$box_h,$img_w,$img_h,$water_pos);
                       imagettftext ( $img,$this->water_size, 0,$water_pos[0],$water_pos[1], $color,$this->water_fontfile, $this->water_text);
                         $shuchu=str_replace('/','',$info['mime']);
                	        return $shuchu($img,$file);
                }else{
                	// 图片水印
                  $img_w=imagesx($img);
                  $img_h=imagesy($img);
                  $info=getimagesize($this->water_logo);
                  // p($info);
                  $src=imageCreateFromjpeg($this->water_logo);
                   $box_w=$info[0];
                  $box_h=$info[1];
                	$water_pos=$this->water_pos($box_w,$box_h,$img_w,$img_h,$water_pos);
                	imagecopymerge($img,$src,$water_pos[0],$water_pos[1] ,0,0,$box_w,$box_h,80 );
                	  $shuchu=str_replace('/','',$info['mime']);
                	  return $shuchu($img,$file);
                }
              }

  private function check($file){
                 return extension_loaded("GD")&&is_file($file);
  }
            public function water_pos($box_w,$box_h,$img_w,$img_h,$water_pos){
            	$x=20;$y=30;
                     switch($water_pos){
                     	case '1':
                                $x=20;$y=30;
                     	break;
                     	case '2':
                     	      $x=($img_w-$box_w)/2;
                     	break;
                     	case '3':
                     	$x=$img_w-$box_w-10;
                     	break;
                     	case '4':
                     	$y=($img_h-$box_h)/2;
                     	break;
                     	case '5':
                     	$x=($img_w-$box_w)/2;
                     	$y=($img_h-$box_h)/2;
                     	break;
                     	case '6':
                     	$x=$img_w-$box_w-10;
                     	 $y=($img_h-$box_h)/2;
                     	break;
                     	case '7':
                     	 $x=20;
                              $y=$img_h-$box_h-10;
                     	break;
                     	case '8':
                     	$x=($img_w-$box_w)/2;
                     	 $y=$img_h-$box_h-10;
                     	break;
                     	case '9':
                     	$x=$img_w-$box_w-10;
                             $y=$img_h-$box_h-10;
                     }
                     return array($x,$y);
            }
}