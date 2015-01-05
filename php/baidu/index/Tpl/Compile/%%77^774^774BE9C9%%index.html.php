<?php /* Smarty version 2.6.26, created on 2014-04-18 03:05:57
         compiled from index.html */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <style>
            <?php echo '
              table {
                 width:300px;

                 /*text-align: center;*/
                 border-collapse: collapse;
              }
              a{
                text-decoration: none;
              }
              a:hover{
                background:red;
                color:white;
              }
            '; ?>

            </style>
    </head>
    <body>
    	<table border=1 align="center">
    		<tr>
    			<th colspan='5'>学生记录</th>
    		</tr>
                          <tr>
                              <td colspan="5">
                                  <a href="?c=index&m=add">添加学生</a>
                              </td>
                          </tr>
    		<?php unset($this->_sections['s']);
$this->_sections['s']['loop'] = is_array($_loop=$this->_tpl_vars['stu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['s']['name'] = 's';
$this->_sections['s']['show'] = true;
$this->_sections['s']['max'] = $this->_sections['s']['loop'];
$this->_sections['s']['step'] = 1;
$this->_sections['s']['start'] = $this->_sections['s']['step'] > 0 ? 0 : $this->_sections['s']['loop']-1;
if ($this->_sections['s']['show']) {
    $this->_sections['s']['total'] = $this->_sections['s']['loop'];
    if ($this->_sections['s']['total'] == 0)
        $this->_sections['s']['show'] = false;
} else
    $this->_sections['s']['total'] = 0;
if ($this->_sections['s']['show']):

            for ($this->_sections['s']['index'] = $this->_sections['s']['start'], $this->_sections['s']['iteration'] = 1;
                 $this->_sections['s']['iteration'] <= $this->_sections['s']['total'];
                 $this->_sections['s']['index'] += $this->_sections['s']['step'], $this->_sections['s']['iteration']++):
$this->_sections['s']['rownum'] = $this->_sections['s']['iteration'];
$this->_sections['s']['index_prev'] = $this->_sections['s']['index'] - $this->_sections['s']['step'];
$this->_sections['s']['index_next'] = $this->_sections['s']['index'] + $this->_sections['s']['step'];
$this->_sections['s']['first']      = ($this->_sections['s']['iteration'] == 1);
$this->_sections['s']['last']       = ($this->_sections['s']['iteration'] == $this->_sections['s']['total']);
?>
    		<tr>
    			<td><?php echo $this->_tpl_vars['stu'][$this->_sections['s']['index']]['sname']; ?>
</td>
                                        <td> <?php echo $this->_tpl_vars['stu'][$this->_sections['s']['index']]['sex']; ?>
  </td>
                                        <td><?php echo $this->_tpl_vars['stu'][$this->_sections['s']['index']]['age']; ?>
</td>
                                        <td><a href="?c=index&m=del&sid=<?php echo $this->_tpl_vars['stu'][$this->_sections['s']['index']]['sid']; ?>
">删除</a></td>
                                        <td><a href="?c=index&m=save&sid=<?php echo $this->_tpl_vars['stu'][$this->_sections['s']['index']]['sid']; ?>
">更新</a></td>
    		</tr>
    		<?php endfor; endif; ?>
    	</table>
    </body>
</html>