<?php
class Page{
	private $count;//总的条数
	private $row;//每一页显示的条数
	private $pageNum;//总的页数
	private $selfPage;//当前页
	private $url;//链接的地址
	function __construct($count,$row){
		$this->count=$count;
		$this->row=$row;
		$this->selfPage=isset($_GET['page'])?$_GET['page']:1;
                    $this->url=$this->getUrl();
	}
	//获得链接
          private function getUrl(){
                $get=$_GET;
                 unset($get['page']);
                 $str='';
                 foreach($get as $k=>$v){
                 	$str.=$k."={$v}&";
                 }
                return $str1=__WEB__.'?'.$str."page=";
          }
	//获得总的页码数
	private function pageNum(){
		return $this->pageNum=ceil($this->count/$this->row);
	}
	//生成分页码
	private function lisit(){
		$str='';
		for($i=1;$i<=$this->pageNum;$i++){
		     if($this->selfPage==$i){
		     	$str.="<span>".$i."</span>";
		     }else{
		     	$str.="<a href=".$this->url.$i.">".$i."</a>";
		     }     
		}
		return $str;
	}
   //上一页
   private function prePage(){
   	if($this->selfPage>1){
   		//url后面连接的要是一个整体
           return "<a href=".$this->url.($this->selfPage-1).">上一页</a>";
   	}else{
   	return "<span>上一页</span>";
   	}
   	
   }
   //下一页
   private function nextPage(){
   	if($this->selfPage<$this->pageNum){
          return "<a href=".$this->url.($this->selfPage+1).">下一页</a>";
   	}else{
   	return "<span>下一页</span>";
   	}
   	
   }
	public function show(){
		//获得总的页码数
                    $this->pageNum();
                    //生成分页码
                    return $this->prePage().$this->lisit().$this->nextPage();
	}

//截取数据的起始的位置
public function limit(){
	// 0 3 6
	return ($this->selfPage-1)*($this->row);
}







       
}