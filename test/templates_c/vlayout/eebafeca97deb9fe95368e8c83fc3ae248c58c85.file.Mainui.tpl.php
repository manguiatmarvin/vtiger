<?php /* Smarty version Smarty-3.1.7, created on 2014-10-07 06:43:19
         compiled from "/srv/www/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169472854454338b872689f6-20132027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eebafeca97deb9fe95368e8c83fc3ae248c58c85' => 
    array (
      0 => '/srv/www/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1412664047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169472854454338b872689f6-20132027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54338b87296da',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54338b87296da')) {function content_54338b87296da($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>