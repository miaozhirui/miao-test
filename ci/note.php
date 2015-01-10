<?php
site_url()//得到的是形如http://m.local-test.com/ci/index.php ，可以用来做路由使用
base_url()//得到的形如http://m.local-test.com/ci/ ，可以用来加载根目录下面的文件

// 验证
$this->load->library('form_validation');
$this->form_validation->set_rules('title', '文章标题', 'required|min_lengtg[5]');
$status = $this->form_validation->run();//会返回一个验证的布尔值

// 载入form的辅助函数，并且打印出错误信息
$this->load->helper('form');
form_error('title', '<span>', '</span>')//提示错误信息,第二三参数是错误信息放的标签
set_value('title')//保留默认的填写的内容
1111122233333333333