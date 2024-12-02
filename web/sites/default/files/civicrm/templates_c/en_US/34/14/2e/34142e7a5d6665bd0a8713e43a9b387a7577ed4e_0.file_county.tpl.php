<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:33
  from 'file:CRM/Contact/Form/Edit/Address/county.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd8759f9a91_44738196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34142e7a5d6665bd0a8713e43a9b387a7577ed4e' => 
    array (
      0 => 'CRM/Contact/Form/Edit/Address/county.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd8759f9a91_44738196 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Form/Edit/Address';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if (!empty($_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['county_id'])) {?>
   <tr>
     <td colspan="2">
        <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['county_id']['label'];?>
<br />
        <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['county_id']['html'];?>
<br />
     </td>
   </tr>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
