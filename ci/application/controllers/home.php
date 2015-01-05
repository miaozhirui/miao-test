<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
    public function index() {
        $data['title'] = '我是ci框架';
        $data['name'] = array(
            '王五',
            '李斯',
            '马六'
            );
        p($data);
        $this->load->helper('url');
        echo site_url();
        echo "<br/>";
        echo base_url();
        
        $this->load->view('index/home', $data);
    }

}