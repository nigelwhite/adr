<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:33
  from 'file:CRM/Contact/Form/Edit/Address/geo_code.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd875a06466_66299625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12812048180cb8ff6da57f5dcb0a40aa40b12e4f' => 
    array (
      0 => 'CRM/Contact/Form/Edit/Address/geo_code.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd875a06466_66299625 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Form/Edit/Address';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('geo_code_1',$_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]) && $_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('geo_code_2',$_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')])) {?>
  <tr>
    <td colspan="2">
      <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['geo_code_1']['label'];?>
,&nbsp;<?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['geo_code_2']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"id-geo-code",'file'=>"CRM/Contact/Form/Contact.hlp"), $_smarty_tpl);?>
<br />
      <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['geo_code_1']['html'];?>
,&nbsp;<?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['geo_code_2']['html'];?>
<br />
    </td>
  </tr>
  <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('manual_geo_code',$_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')])) {?>
    <tr>
      <td colspan="2">
        <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['manual_geo_code']['html'];?>

        <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['manual_geo_code']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"id-geo-code-override",'file'=>"CRM/Contact/Form/Contact.hlp"), $_smarty_tpl);?>

      </td>
    </tr>
  <?php }
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
