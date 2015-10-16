<?php /* Smarty version Smarty-3.1.18, created on 2015-10-16 09:35:30
         compiled from "views/landingPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95564735555feb51e242974-12368751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90d20ac0c542394cc1f7ba24007e4b3bb2f785b4' => 
    array (
      0 => 'views/landingPage.tpl',
      1 => 1444980928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95564735555feb51e242974-12368751',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55feb51e2b5ca0_11641131',
  'variables' => 
  array (
    'curr_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55feb51e2b5ca0_11641131')) {function content_55feb51e2b5ca0_11641131($_smarty_tpl) {?>
<header class="bird-box">
    <div class="back-bird"></div>
    <div class="logo"></div>
    <div class="fore-bird"></div>
</header>



<nav class="header-nav">
  <ul class="header-ul">
    <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=="shows") {?> class="selected"<?php }?> class="header-li"> <a href="?page=shows">Shows</a> </li>
    <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=="contact") {?> class="selected"  <?php }?> class="header-li"><a href="?page=contact">Contact</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=="info") {?> class="selected"  <?php }?> class="header-li"><a href="?page=info">Info</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=="agenda") {?> class="selected"  <?php }?> class="header-li"><a href="?page=agenda">Agenda</a></li>

  </ul>
</nav>
<?php }} ?>
