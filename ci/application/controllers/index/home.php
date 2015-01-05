<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index() {
        // echo base_url() . 'style/index/css';
        echo site_url() . '/index/home/category';
        $this->load->view('index/index.html');
    }

    /**
     * 分类页显示
     */
    public function category() {
        $this->load->view('index/category.html');
    }

    /**
     * 文章阅读页显示
     */
    public function article() {
        $this->load->view('index/atricle.html');
    }
}