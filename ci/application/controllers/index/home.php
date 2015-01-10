<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
    /**
     * 默认控制器方法
     * @return [type] [description]
     */
    public function index() {
        $_SESSION['name'] = 'miaozhirui';
       $this->load->view('index/home.html');
    }

    /**
     * 分类页显示
     */
    public function category() {
        $this->load->view('index/category.html');
    }

    /**
     * 文章详情页
     */
    public function article() {
        $this->load->view('index/article.html');
    }







}