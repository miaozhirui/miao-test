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

//在config文件夹里面新建一个form_validation.php这个文件

//form表单在提交验证的时候
1.载入验证类$this->load->library('form_validation');
2.设置验证规则，一般我们再config里面form_validation来设置$this->form_validation->set_rules('title', '文章标题', 'required|min_lengtg[5]');
3.执行验证$status = $this->form_validation->run();


//操作模型
在控制器里面的时候，当我们需要模型的时候，我们要去载入这个模型
$this->load->model('');

