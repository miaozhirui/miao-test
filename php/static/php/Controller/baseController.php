<?php 
// 控制器基类
class Controller {
    protected $pageName = '';
    protected $loadJs = true;
    protected function view($name = '') {
        $name = $name ? $name : VIEW . '.ctp';
        $this->fileName = $fileName= ROOT_PATH .'view/'. $name;

        // 可能是权限问题，再去解决
        if(!file_exists($fileName)) {
            echo "<h1 style='text-align:center; margin-top:50px;'><span style='color:red; font-weight:700;'>傻X!</span>，你肯定没有按照提示一步一步的操作</h2>
                    <h1 style='text-align:center; margin-top:50px;'><span style='color:red; font-weight:700;'>/view/". VIEW .".ctp</span>这个文件肯定不存在，再仔细好好的检查检查！</h1>
            "; 
            exit;
        }
        
       require('/view/enter/template.ctp');
    }

    public function renderMainContent() {
        require($this->fileName);
    }

    protected function renderCssContent() {
        $pageName = $this->pageName;
        $cssJson = ROOT_PATH . 'css/' . 'link.json';
        $cssArray  = json_decode(file_get_contents($cssJson, true));

        foreach($cssArray as $key => $value) {
            if($key === "GLOBAL") :
                foreach($value as $v) {
                    echo "\t<link rel='stylesheet' type='text/css' href=/css/" . $v.">\n\t";
                }
                endif;

            if($pageName) :
                if($key === $pageName):
                    foreach($value as $v) {
                        echo "\t<link rel='stylesheet' type='text/css' href=/css/" . $v.">\n\t";
                    }
                    endif;
                endif;
        }
    }

    protected function renderJsContent() {
        $pageVars = array();
        $pageVars['NAME'] = $this->pageName;    
        $pageVars['LOADJS'] = $this->loadJs;
        $pageVars = json_encode($pageVars);

        $jsContent =<<<js
        <script>
             var   zPREFACE = {$pageVars};
        </script>
js;
    echo $jsContent;

    echo "\n\t\t<script src='/js/libs/sea.js'></script>\n";
    echo "\n\t\t<script src='/js/c_config.js'></script>\n";
    echo "\n\t\t<script>
            seajs.use('/js/boot.js', function() {

            })
            </script>\n";


    }

}









