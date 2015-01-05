<?php
header("Content-type:text/html; charset=utf8");
class Pc{
    public $yanse;
    public $pinpai;
    function wanyouxi() {
        echo "我正在玩游戏";
    }
}

$shili = new Pc();
$shili->yanse = "黑色";
$shili->pinpai = "suoni";
echo $shili->yanse;
echo "<pre>";
echo $shili->pinpai;
echo "<pre>";
$shili->wanyouxi();
echo "<pre>";
$a = 10;
$b = &$a;
$a = 20;
echo $b;