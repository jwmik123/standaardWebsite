<?php /* Smarty version Smarty-3.1.18, created on 2015-10-16 09:54:25
         compiled from "views/searchEngine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2056842435560a43e5edec84-36048525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78851d5f60ebac001bd8280259d2366a44da43b0' => 
    array (
      0 => 'views/searchEngine.tpl',
      1 => 1444982062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2056842435560a43e5edec84-36048525',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560a43e6005f38_06346582',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560a43e6005f38_06346582')) {function content_560a43e6005f38_06346582($_smarty_tpl) {?>
<center><form class="searchForm" name="form" class="form" method="post" action="?page=search">
    <input type="text" name="search_string" size="40" maxlength="50"/>
    <input type="submit" name="submit" value="search" >
</form></center>
<?php }} ?>
