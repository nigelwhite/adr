<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:33
  from 'file:CRM/Contact/Form/Edit/Address/country_state_province.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd8759eeca3_68427313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '222d4b3afa678c406fbc7de938d4f60ae2e8b667' => 
    array (
      0 => 'CRM/Contact/Form/Edit/Address/country_state_province.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd8759eeca3_68427313 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Form/Edit/Address';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><tr><td colspan="3" style="padding:0;">
<table class="crm-address-element">
<tr>
   <?php if (!empty($_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['country_id'])) {?>
     <td>
        <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['country_id']['label'];?>
<br />
        <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['country_id']['html'];?>

     </td>
   <?php }?>
   <?php if (!empty($_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['state_province_id'])) {?>
     <td>
        <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['state_province_id']['label'];?>
<br />
        <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['state_province_id']['html'];?>

     </td>
   <?php }?>
   <td colspan="2">&nbsp;&nbsp;</td>
</tr>
</table>
</td></tr>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
