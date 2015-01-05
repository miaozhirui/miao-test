<?php
// 主程序
class mainController extends Controller {
    public function index() {
    $this->pageName = 'index';
    $this ->view();
    } 

    public function list1() {
$this->pageName = 'list1';
$this ->view();
} 
}