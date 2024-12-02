<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:55
  from 'file:CRM/Contact/Form/Inline/CustomData.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd88b5ed107_14079351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f28d4e8d13278567bce54326c4b7181b66be7545' => 
    array (
      0 => 'CRM/Contact/Form/Inline/CustomData.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/common/formButtons.tpl' => 1,
    'file:CRM/Custom/Form/CustomData.tpl' => 1,
  ),
))) {
function content_674dd88b5ed107_14079351 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Form/Inline';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<div class="crm-inline-edit-form">
  <div class="crm-inline-button">
    <?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>''), (int) 0, $_smarty_current_dir);
?>
  </div>
  <?php $_smarty_tpl->renderSubTemplate("file:CRM/Custom/Form/CustomData.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('skipTitle'=>true), (int) 0, $_smarty_current_dir);
?>
</div> <!-- end of main -->
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
