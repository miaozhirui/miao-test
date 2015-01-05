<?php
header("Content-type:text/html; charset=utf8");
session_start();
$_SESSION['type'] = isset($_GET['type']) ? $_GET['type'] : false;
class study{
    private $name;
    private $age;
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    function say() {
        echo "我的名字是:".$this->name."我的年龄是:". $this->age;
    }
    function __set($k, $v) {
        if($_SESSION['type'] === 'admin') {
            $this->$k = $v;
        } else {
            die("对不起您没有权限访问私有的方法<br/>");
        }
    }
    function __get($k) {
        return $this->$k;
    }
}
$lisi= new study('王五', 21);
echo $lisi ->age;
echo $lisi ->name;
//当我们对私有属性调用的时候,类里面的__set的这个函数会自动执行
// $lisi->name;
// $lisi->age = 28;
// $lisi->name="缪志瑞";
// $lisi->say();








class teacher{
    function run() {
        echo "我会跑步";
    }
    function add() {
        echo "我会添加";
    }
    function eat() {
        echo "我会吃饭";
    }
}
// print_r(get_class_methods('teacher'));
$str = "teacher";

// $obj = new $str();
// foreach(get_class_methods($str) as $v) {
//     $obj -> $v();
// }









