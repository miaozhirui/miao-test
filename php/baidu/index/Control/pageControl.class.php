<?php
class pageControl extends Control{
                  public function index(){
                  	//记录总的条数
                  	 $count=M('stu')->count();
                  	 //每一页显示的内容
                  	  $page=new Page($count,3);
                  	  $this->data=M('stu')->limit($page->limit(),3)->all();
                     $this->page=$page->show();
                     $this->display();
                  }
              }