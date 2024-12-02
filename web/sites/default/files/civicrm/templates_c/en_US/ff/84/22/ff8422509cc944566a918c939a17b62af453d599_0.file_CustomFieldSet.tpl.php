<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:25
  from 'file:CRM/Contactlayout/Page/Inline/CustomFieldSet.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd86dbfa713_49673113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff8422509cc944566a918c939a17b62af453d599' => 
    array (
      0 => 'CRM/Contactlayout/Page/Inline/CustomFieldSet.tpl',
      1 => 1732538360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Contact/Page/View/CustomDataFieldView.tpl' => 1,
  ),
))) {
function content_674dd86dbfa713_49673113 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/web/sites/default/files/civicrm/ext/org.civicrm.contactlayout/templates/CRM/Contactlayout/Page/Inline';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('customGroupId', $_smarty_tpl->getValue('block')['custom_group_id'], false, NULL);
$_smarty_tpl->assign('customValues', $_smarty_tpl->getValue('viewCustomData')[$_smarty_tpl->getValue('customGroupId')], false, NULL);
$_smarty_tpl->assign('cgcount', 1, false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('customValues'), 'cd_edit', false, 'customRecId');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('customRecId')->value => $_smarty_tpl->getVariable('cd_edit')->value) {
$foreach14DoElse = false;
?>
  <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/View/CustomDataFieldView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <?php $_smarty_tpl->assign('cgcount', $_smarty_tpl->getValue('cgcount')+1, false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
