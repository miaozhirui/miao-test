<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller{
    /**
     * [send_article description]发表文章模板显示
     * @return [type] [description]
     */
    public function send_article() {
        $this->load->helper('form');
        $this->load->view('admin/article.html');
    } 
    /**
     * 发表文章动作
     */
     public function send() {
        header('Content-type:text/html; charset=utf8');
        //载入验证类
        $this->load->library('form_validation');
        //执行验证
        $status = $this->form_validation->run('article');

        if($status) {
            echo '数据库操作';
        } else {
              $this->load->helper('form');
             $this->load->view('admin/article.html');
        }
     }

     /**
      * 编辑文章
      */
     public function edit_article() {
        $this->load->helper('form');
        $this->load->view('admin/edit_article.html');
     }

     /**
      * 编辑动作
      */
     public function edit() {
            //载入验证类
        $this->load->library('form_validation');
         //执行验证
        $status = $this->form_validation->run('article');

        if($status) {
            echo '数据库操作';
        } else {
            $this->load->helper('form');
            $this->load->view('admin/edit_article.html');
        }

     }






}










