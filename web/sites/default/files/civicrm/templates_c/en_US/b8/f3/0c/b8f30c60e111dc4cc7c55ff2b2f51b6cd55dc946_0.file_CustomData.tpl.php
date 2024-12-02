<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:59
  from 'file:CRM/Contact/Page/Inline/CustomData.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd88fb56e98_41242051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8f30c60e111dc4cc7c55ff2b2f51b6cd55dc946' => 
    array (
      0 => 'CRM/Contact/Page/Inline/CustomData.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Contact/Page/View/CustomDataFieldView.tpl' => 1,
  ),
))) {
function content_674dd88fb56e98_41242051 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Page/Inline';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/View/CustomDataFieldView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
