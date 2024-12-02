<?php
/* Smarty version 5.3.1, created on 2024-12-02 13:39:04
  from 'file:CRM/common/info.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674db878d16213_34029519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '387166c82265cd19f94980af7ebb1c44f2c777b8' => 
    array (
      0 => 'CRM/common/info.tpl',
      1 => 1730963841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674db878d16213_34029519 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/common';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('infoMessage'),'nodefaults') || $_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('infoTitle'),'nodefaults')) {?>
  <div class="messages status <?php echo $_smarty_tpl->getValue('infoType');?>
"<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('infoOptions'),'nodefaults')) {?> data-options='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('infoOptions'),'nodefaults');?>
'<?php }?>>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('icon')) {
throw new \Smarty\Exception('block tag \'icon\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('icon')->handle(array('icon'=>"fa-info-circle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('icon')->handle(array('icon'=>"fa-info-circle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <span class="msg-title"><?php echo $_smarty_tpl->getValue('infoTitle');?>
</span>
    <span class="msg-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('purify')($_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('infoMessage'),'nodefaults'));?>
</span>
  </div>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
