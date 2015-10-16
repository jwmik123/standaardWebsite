<?php /* Smarty version Smarty-3.1.18, created on 2015-10-16 13:41:38
         compiled from "views/agenda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1866395174561f7d3ec50743-14446053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd81c212df4d949e23d0bda4bedb3f0f8e9ba51a9' => 
    array (
      0 => 'views/agenda.tpl',
      1 => 1444995688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1866395174561f7d3ec50743-14446053',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561f7d3ecaf3a1_04694956',
  'variables' => 
  array (
    'result' => 0,
    'agenda' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561f7d3ecaf3a1_04694956')) {function content_561f7d3ecaf3a1_04694956($_smarty_tpl) {?>
<div class="agenda-space">

  <center><table class="agenda">

      <?php  $_smarty_tpl->tpl_vars['agenda'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['agenda']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['agenda']->key => $_smarty_tpl->tpl_vars['agenda']->value) {
$_smarty_tpl->tpl_vars['agenda']->_loop = true;
?>
      <tr>
      <td id="date"><?php echo $_smarty_tpl->tpl_vars['agenda']->value['date'];?>
 </td>
      <td id="venue"><?php echo $_smarty_tpl->tpl_vars['agenda']->value['venue'];?>
  </td>
      <td id="location"><?php echo $_smarty_tpl->tpl_vars['agenda']->value['location'];?>
</td>
    </tr>
      <?php } ?>
  </table></center>

</div>
<?php }} ?>
