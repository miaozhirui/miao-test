<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 后台登陆控制器
 */
class Login extends CI_Controller{
    /**
     * [index description]登陆默认的方法
     * @return [type] [description]
     */
    public function index() {
        $this->load->view('admin/login.html');
    }
}