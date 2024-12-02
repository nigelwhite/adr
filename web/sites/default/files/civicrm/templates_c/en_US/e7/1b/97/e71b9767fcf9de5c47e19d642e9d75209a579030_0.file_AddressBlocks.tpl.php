<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:25
  from 'file:CRM/Contactlayout/Page/Inline/AddressBlocks.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd86dbe9bc6_72701754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e71b9767fcf9de5c47e19d642e9d75209a579030' => 
    array (
      0 => 'CRM/Contactlayout/Page/Inline/AddressBlocks.tpl',
      1 => 1732538360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Contact/Page/Inline/Address.tpl' => 2,
  ),
))) {
function content_674dd86dbe9bc6_72701754 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/web/sites/default/files/civicrm/ext/org.civicrm.contactlayout/templates/CRM/Contactlayout/Page/Inline';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('locationIndex', 1, false, NULL);
if ($_smarty_tpl->getValue('address')) {?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('address'), 'add', false, 'locationIndex');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('locationIndex')->value => $_smarty_tpl->getVariable('add')->value) {
$foreach13DoElse = false;
?>
    <div class="crm-address_<?php echo $_smarty_tpl->getValue('locationIndex');?>
 crm-address-block crm-summary-block">
      <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/Address.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  <?php $_smarty_tpl->assign('locationIndex', $_smarty_tpl->getValue('locationIndex')+1, false, NULL);
}
if ($_smarty_tpl->getValue('permission') == 'edit') {?>
  <?php $_smarty_tpl->assign('add', 0, false, NULL);?>
  <div class="crm-address-block crm-summary-block">
    <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/Address.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  </div>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
