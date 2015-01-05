<?php /* Smarty version 2.6.26, created on 2014-04-19 15:25:47
         compiled from success.html */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    	<?php echo $this->_tpl_vars['message']; ?>

    	<script>
//这边没有地址有的话，可以这样来使用header("location:url")这个是php语言，我们在这里要用js的语法
               var url='<?php echo $this->_tpl_vars['url']; ?>
';
               <?php echo '
               if(url){
               	location.href=url;
               }else{
               	window.history.go(-1);
               }
          '; ?>

    	</script>
    </body>
</html>