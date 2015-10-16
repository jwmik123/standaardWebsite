<?php /* Smarty version Smarty-3.1.18, created on 2015-10-01 13:20:06
         compiled from "views/articles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208583827255fefb6308c930-12580891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb5a2422e5a37a98ae8caf5f03bcc9915fb4aa4f' => 
    array (
      0 => 'views/articles.tpl',
      1 => 1443698400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208583827255fefb6308c930-12580891',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fefb630dd5b5_06517988',
  'variables' => 
  array (
    'result' => 0,
    'newsarticle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fefb630dd5b5_06517988')) {function content_55fefb630dd5b5_06517988($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="wrap" style="height: 2000px">
    <?php  $_smarty_tpl->tpl_vars['newsarticle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsarticle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsarticle']->key => $_smarty_tpl->tpl_vars['newsarticle']->value) {
$_smarty_tpl->tpl_vars['newsarticle']->_loop = true;
?>
        <div class="article">
            <h3> <?php echo $_smarty_tpl->tpl_vars['newsarticle']->value['title'];?>
 </h3>
            <p> <?php echo $_smarty_tpl->tpl_vars['newsarticle']->value['content'];?>
 </p>
        </div>
    <?php } ?>
</div>
<?php }} ?>
