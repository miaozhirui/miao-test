<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller{
    /**
     * 添加栏目
     */
    public function add_cate() {
        $this->load->helper('form');
        $this->load->view('admin/add_cate.html');
    }

    /**
     * 添加动作
     */
    public function add() {
        //载入表单验证类
        $this->load->library('form_validation');
        $status = $this->form_validation->run('cate');
        if($status) {
            $this->load->model('category_model', 'cate');
            $this->cate->add();
        } else {
            $this->load->helper('form');
            $this->load->view('admin/add_cate.html');
        }
    }

    /**
     * 编辑
     */
    public function edit_cate() {
        $this->load->helper('form');
        $this->load->view('admin/edit_cate.html');
    }

    /**
     * 编辑动作
     */
    public function edit() {
        //载入表单验证类
        $this->load->library('form_validation');
        $status = $this->form_validation->run('cate');
        if($status) {
            echo '操作数据库';
        } else {
            $this->load->helper('form');
            $this->load->view('admin/edit_cate.html');
        }
    }
}









