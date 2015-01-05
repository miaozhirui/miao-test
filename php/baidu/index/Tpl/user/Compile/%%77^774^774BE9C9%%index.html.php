<?php /* Smarty version 2.6.26, created on 2014-04-20 12:49:32
         compiled from index.html */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <style>
        <?php echo '
          img{
          	
          }
          '; ?>

        </style>
    </head>
    <body>
    	<form action="?c=user&m=index" method="post">
    	<table>
    		  <tr>
         	<td>
         			姓名：<input type="text" value=''  name="sname"  id="" >
         	</td>
         </tr>
         <tr>
         	<td>
         			密码：<input type="password" name="passwordF" id="" value="">
         	</td>
         </tr>
         <tr>
         	<td>
         		再输一次：<input type="password" name="passwordS" id="">
         	</td>
         </tr>
         <tr>
         	<td>
         		验证码：<input type="text" name="code" id=""><img src="?c=user&m=code" alt="">
         	</td>
         </tr>
         <tr>
         	<td>
         		<input type="submit" value="提交">
         	</td>
         </tr>
    	</table>
    	</form>
    	
       
    </body>
</html>