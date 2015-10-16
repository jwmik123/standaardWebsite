<?php /* Smarty version Smarty-3.1.18, created on 2015-10-16 10:21:37
         compiled from "views/searchResults.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5394305905620acd1b24509-54803186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49821065f5998dfb96d6ad2c0ffa705f92294564' => 
    array (
      0 => 'views/searchResults.tpl',
      1 => 1444983693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5394305905620acd1b24509-54803186',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5620acd1ba8441_24680832',
  'variables' => 
  array (
    'result' => 0,
    'newsarticle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5620acd1ba8441_24680832')) {function content_5620acd1ba8441_24680832($_smarty_tpl) {?>

<div id="wrap">
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

<?php echo $_smarty_tpl->getSubTemplate ("pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
