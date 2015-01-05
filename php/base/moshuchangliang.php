<?php
class Index{
    function _class() {
        echo __CLASS__ . "<br/>";
        echo __METHOD__ . "<br/>";
        echo __FUNCTION__ . "<br/>";
    }
}
// $obj = new Index();
// $obj -> _class();
echo str_replace('\\', '/', dirname(__FILE__));
echo DIRECTORY_SEPARATOR;//路径分隔符
echo __dir__;//5.3版本这个常量才有用
phpinfo();
