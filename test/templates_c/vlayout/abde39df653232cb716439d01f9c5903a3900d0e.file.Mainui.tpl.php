<?php /* Smarty version Smarty-3.1.7, created on 2014-10-07 07:06:08
         compiled from "/home/marvin/Documents/vhost/marvin.app1.com/public/vtigercrm/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:972992245543390e0cfef99-79312076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abde39df653232cb716439d01f9c5903a3900d0e' => 
    array (
      0 => '/home/marvin/Documents/vhost/marvin.app1.com/public/vtigercrm/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1412664830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '972992245543390e0cfef99-79312076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_543390e0d11ae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543390e0d11ae')) {function content_543390e0d11ae($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>