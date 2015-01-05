<?php
class userControl extends Control{
	//只要调用这个方法就可以生成一个验证码
	public function index(){
	       if(IS_POST){
	       	  //验证码验证
	       	  $error='';
	       	  if(strtoupper($_POST['code'])!==$_SESSION['code']){
	       	  	$error="验证码错误";
	       	  }
	       	  if($error){
			 $this->error=$error;
			  $this->display();
	       	  }else{
	       	  	$code=sub_str(md5(mt_rand(0,1000)),0,8);
	       	  	$password=md5($_POST['passwore'].$code);
	       	  	M('user')->all(array(
	       	  		'username'=>$_POST['username'],
	       	  		'password'=>$password,
	       	  		 'code'=>$code
	       	  	 ));
	       	  }
	       }else{
	       	$this->display();
	       }
	}
	//获得验证码
	public function code(){
                $code=new Code(4);
                $code->code();
	}
}
