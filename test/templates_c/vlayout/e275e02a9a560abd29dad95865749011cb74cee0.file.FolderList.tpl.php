<?php /* Smarty version Smarty-3.1.7, created on 2014-10-07 07:06:12
         compiled from "/home/marvin/Documents/vhost/marvin.app1.com/public/vtigercrm/includes/runtime/../../layouts/vlayout/modules/MailManager/FolderList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:747235242543390e4728058-88174644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e275e02a9a560abd29dad95865749011cb74cee0' => 
    array (
      0 => '/home/marvin/Documents/vhost/marvin.app1.com/public/vtigercrm/includes/runtime/../../layouts/vlayout/modules/MailManager/FolderList.tpl',
      1 => 1412664830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '747235242543390e4728058-88174644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FOLDERS' => 0,
    'FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_543390e474405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543390e474405')) {function content_543390e474405($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['FOLDERS']->value){?><div id="foldersList" class="row-fluid"><div class="span10"><ul class="nav nav-list"><?php  $_smarty_tpl->tpl_vars['FOLDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FOLDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER']->key => $_smarty_tpl->tpl_vars['FOLDER']->value){
$_smarty_tpl->tpl_vars['FOLDER']->_loop = true;
?><li><a class="mm_folder" id='_mailfolder_<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
' href='#<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
' onclick="MailManager.clearSearchString(); MailManager.folder_open('<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
'); "><?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->unreadCount()){?><b><?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
 (<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->unreadCount();?>
)</b><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
<?php }?></a></li><?php } ?></ul></div></div><?php }?><?php }} ?>