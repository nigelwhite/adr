<?php
/* Smarty version 5.3.1, created on 2024-12-02 16:15:21
  from 'file:CRM/Admin/Form/Setting/SettingField.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674ddd192f2762_88520199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '667508a75cad28c49b4bccc8292378e721e45640' => 
    array (
      0 => 'CRM/Admin/Form/Setting/SettingField.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674ddd192f2762_88520199 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Admin/Form/Setting';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><tr class="crm-setting-form-block-<?php echo $_smarty_tpl->getValue('setting_name');?>
">
  <td class="label">
    <?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('setting_name')]['label'];?>

    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('help_text',$_smarty_tpl->getValue('fieldSpec')) && $_smarty_tpl->getValue('fieldSpec')['help_text']) {?>
            <?php $_smarty_tpl->assign('tplhelp_id', $_smarty_tpl->getSmarty()->getModifierCallback('replace')(($_smarty_tpl->getValue('setting_name')).('-id'),'_','-'), false, NULL);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>((string)$_smarty_tpl->getValue('tplhelp_id'))), $_smarty_tpl);?>

    <?php }?>
  </td>
  <td>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('wrapper_element',$_smarty_tpl->getValue('fieldSpec')) && !empty($_smarty_tpl->getValue('fieldSpec')['wrapper_element'])) {?>
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('fieldSpec')['wrapper_element'][0],'nodefaults');
echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('setting_name')]['html'];
echo $_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('fieldSpec')['wrapper_element'][1],'nodefaults');?>

    <?php } else { ?>
      <?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('setting_name')]['html'];?>

    <?php }?>
    <div class="description">
      <?php echo $_smarty_tpl->getValue('fieldSpec')['description'];?>

    </div>
  </td>
</tr>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
