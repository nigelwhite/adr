<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:59:12
  from 'file:CRM/Contact/Page/DashBoardDashlet.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd95006d036_85135214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1f354ff57f63b195b019bde252a67c47280066b' => 
    array (
      0 => 'CRM/Contact/Page/DashBoardDashlet.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd95006d036_85135214 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Page';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo $_smarty_tpl->getValue('communityMessages');?>

<div class="clear"></div>
<div class="crm-block crm-content-block">

  <crm-angular-js modules="crmDashboard">
    <crm-dashboard></crm-dashboard>
  </crm-angular-js>

</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
