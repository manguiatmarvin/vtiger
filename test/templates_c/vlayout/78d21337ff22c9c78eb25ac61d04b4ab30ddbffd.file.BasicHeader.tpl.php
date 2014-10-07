<?php /* Smarty version Smarty-3.1.7, created on 2014-10-07 07:05:54
         compiled from "/home/marvin/Documents/vhost/marvin.app1.com/public/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/BasicHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1069571081543390d251dc95-15306977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78d21337ff22c9c78eb25ac61d04b4ab30ddbffd' => 
    array (
      0 => '/home/marvin/Documents/vhost/marvin.app1.com/public/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/BasicHeader.tpl',
      1 => 1412664830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1069571081543390d251dc95-15306977',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_543390d2523d5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543390d2523d5')) {function content_543390d2523d5($_smarty_tpl) {?>
<div class="navbar navbar-fixed-top  navbar-inverse noprint"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('MenuBar.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CommonActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>