<?php /* Smarty version Smarty-3.1.18, created on 2015-10-06 09:09:06
         compiled from "views/newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115441973455fff0ca75f507-92385377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a5f4b5596e58361f517860f8b37beb43c98474' => 
    array (
      0 => 'views/newsarticles.tpl',
      1 => 1444115342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115441973455fff0ca75f507-92385377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fff0ca7d38a2_85845748',
  'variables' => 
  array (
    'result' => 0,
    'newsarticle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fff0ca7d38a2_85845748')) {function content_55fff0ca7d38a2_85845748($_smarty_tpl) {?>

<section id="wrap">

	<?php  $_smarty_tpl->tpl_vars['newsarticle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsarticle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsarticle']->key => $_smarty_tpl->tpl_vars['newsarticle']->value) {
$_smarty_tpl->tpl_vars['newsarticle']->_loop = true;
?>

	<article class="article">

	<h1> <?php echo $_smarty_tpl->tpl_vars['newsarticle']->value['title'];?>
 </h1>
	<content> <?php echo $_smarty_tpl->tpl_vars['newsarticle']->value['content'];?>
 </content>

	</article>

	<?php } ?>

</section>
<?php }} ?>
