<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:33
  from 'file:CRM/Contact/Form/Edit/Address/city_postal_code.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd8759eafd0_16647895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24f8f05d8096ac64cdcc830c63ba187f8668fd56' => 
    array (
      0 => 'CRM/Contact/Form/Edit/Address/city_postal_code.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd8759eafd0_16647895 (\Smarty\Template $_smarty_tpl) {
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
    <?php if (!empty($_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['city'])) {?>
       <td>
          <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['city']['label'];?>
<br />
          <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['city']['html'];?>

       </td>
    <?php }?>
    <?php if (!empty($_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['postal_code'])) {?>
       <td>
          <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['postal_code']['label'];?>
<br />
          <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['postal_code']['html'];?>

       </td>
      <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('postal_code_suffix',$_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')])) {?>
          <td>
            <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['postal_code_suffix']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"id-postal-code-suffix",'file'=>"CRM/Contact/Form/Contact.hlp"), $_smarty_tpl);?>
<br/>
            <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['postal_code_suffix']['html'];?>

          <td>
      <?php }?>
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
