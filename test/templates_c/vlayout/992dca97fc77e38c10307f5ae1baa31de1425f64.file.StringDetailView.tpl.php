<?php /* Smarty version Smarty-3.1.7, created on 2014-10-07 07:06:35
         compiled from "/home/marvin/Documents/vhost/marvin.app1.com/public/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/StringDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1089274173543390fb8333c8-88896567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '992dca97fc77e38c10307f5ae1baa31de1425f64' => 
    array (
      0 => '/home/marvin/Documents/vhost/marvin.app1.com/public/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/StringDetailView.tpl',
      1 => 1412664830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1089274173543390fb8333c8-88896567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_543390fb83abf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543390fb83abf')) {function content_543390fb83abf($_smarty_tpl) {?>



<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>
<?php }} ?>