              <?php
              class indexControl extends Control{
                  public function index(){
                    //在外面访问stu的时候，其实就是想当于访问里面的属性，
                     $this->stu=M("stu")->all();
                     //如果用smarty的display必须要传递一个模板进去，这样的话，这个方法不是特别的好用，所以在这里我们就不去继承这个smarty了，而是去用实例化这个类，然后我可以调用这个类
                     $this->display();
                    }
                 public function del(){
                      $db=M('stu');
                      $id=$_GET['sid'];
                      //删除要知道删除的是哪一条记录，我们多这个记录先进行筛选，筛选完之后，再执行删除，发一个sql语句，执行删除就可以了
                      //这边的sql语句可能发错了，如果发错的话，返回的是假，所以我们要判断一下是否返回的值是假，如果是假的话，就说明出错了，没有的话，就提示说成功了
                      if($db->where("sid=".$id)->del()!==false){
                          $this->success("删除成功");
                      }else{
                            halt("操作失败");
                      }
                 }

                 public function add(){
                  //IS_POST在这边就判断$_POST里面的值是不是空的
                      if(IS_POST){
                            if(M('stu')->add()){
                               $this->success("添加成功");
                            }else{
                               halt("操作失败");
                            }
                      }else{
                             $this->display();
                      }
                 }
         public function save(){
            if(IS_POST){
                            if($r=M('stu')->where("sid=".$_POST['sid'])->save()){
                               $this->success("修改成功");
                            }else{
                               halt("操作失败");
                            }
                      }else{
                             $id=$_GET['sid'];
                              $result=$this->stu=M('stu')->where("sid=".$id)->find();
                             $this->display();
                      }
                 }
          }

          
  

            
             