<?php
class Model{
	public $option=array(
                'where'=>'',
                'group'=>'',
                'having'=>'',
                'order'=>'',
                'limit'=>'',
	 );
	private $table;
	function __construct($table){
		// 选择的是哪一张表
		$this->table=$table;
		// 链接数据库
		$this->connect();
	}
	// 链接数据库
	private function connect(){
		mysql_connect(C('DB_HOST'),C('DB_USER'),C('PASSWORD')) or halt("数据库连接失败");
		mysql_query('set names '.C('DB_CHARSET')) or halt("字符");
		mysql_select_db(C('DB_NAME')) or halt('错误');
	}
  public function save($data=null){
    if(is_null($data)){
      if(empty($_POST)){
           halt("没有可添加的数据");
      }else{
        $data=$_POST;
      }
  }
        $sql="UPDATE ".$this->table." SET ";
        foreach($data as $name=>$value){
              $sql.=$name."='{$value}',";
        }
        $sql=substr($sql,0,-1).$this->option['where'];
        // echo $sql;exit;
       return $this->exe($sql);
  }
  /**
   * 查找一条记录
   * @return [type] [description]
   */
 public function find(){
          $sql="SELECT * FROM ".$this->table.
          $this->option['where'];
          $result=$this->all($sql);
          return $result?current($result):$result;
  }
  /**
   * 删除里面的一条记录
   * @return [type] [description]
   */
public function del(){
     $sql="DELETE FROM ".$this->table.
     $this->option['where'];
     return $this->exe($sql);
}
/**
 * [add description]往数据库里面增加值
 * @param [type] $data [description]
 */
	public function add($data=null){
          if(is_null($data)){
                if(empty($_POST)){
                    halt("无数据添加");
                }else{
                  $data=$_POST;
                }
          }
		if(!is_array($data))return false;
                   $filed=implode(',',array_keys($data));
                   // 值转换为字符之后连接要用','来连接
                   $values=implode("','",array_values($data));
                   $sql="insert into ".$this->table.
                   "(".$filed.")values('".$values."');";//记住一点这边一定要加上一个引号
                   return $this->exe($sql);
	}
  /**
 * 查询结果集
 * @return [type] [description]
 */
public function all(){
         $sql="select * from ".$this->table.
          $this->option['where'].
          $this->option['group'].
          $this->option['having'].
          $this->option['order'].
          $this->option['limit'];
         return $this->query($sql);
}


private function query($sql){
          if($result=mysql_query($sql)){
            $data=array();
            $result=mysql_query($sql);
                   while($r=mysql_fetch_assoc($result)){
                    $data[]=$r;
                   }

                   return $data;
          }else{
            $this->error();
             return false;
          }    
}
private function exe($sql){
  // 当sql语句写错的时候就插不进去东西
  if(mysql_query($sql)){
      return mysql_insert_id()?mysql_insert_id():mysql_affected_rows();
  }else{
     $this->error();
     return false;
  }
}
         /**
          * DEBUG方法
          */
 function error(){

    if(DEBUG){
      halt(mysql_error());
    }
}


  /**
   * 获得总的数据
   * @param  string $filed [description]指的是按照上面字段来统计数量的
   * @return [type]        [description]
   */
  public function count($filed="*"){
    $sql="SELECT COUNT($filed) FROM ".$this->table;
     $data=$this->query($sql);
     return $data[0]["COUNT(*)"];
  }
//where条件
public function where($sql){
             $this->option['where']=" where ".$sql;
             return $this;
}

//group条件
public function group($sql){
             $this->option['group']=" group by ".$sql;
             return $this;
}
//having条件
public function having($sql){
             $this->option['having']=" having ".$sql;
             return $this;
}
//order条件
public function order($sql){
             $this->option['order']=" order by ".$sql;

             return $this;
}
//limit条件
public function limit($start,$end){
              $this->option['limit']=" limit ".$start.','.$end;
             return $this;
}

















}