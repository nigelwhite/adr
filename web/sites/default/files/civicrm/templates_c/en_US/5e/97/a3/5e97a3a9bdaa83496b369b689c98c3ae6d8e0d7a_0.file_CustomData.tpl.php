<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:33
  from 'file:CRM/Contact/Form/Edit/Address/CustomData.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd875a0caa7_38164243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e97a3a9bdaa83496b369b689c98c3ae6d8e0d7a' => 
    array (
      0 => 'CRM/Contact/Form/Edit/Address/CustomData.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Custom/Form/Edit/CustomData.tpl' => 1,
  ),
))) {
function content_674dd875a0caa7_38164243 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Form/Edit/Address';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('address_groupTree')[$_smarty_tpl->getValue('blockId')], 'cd_edit', false, 'group_id');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group_id')->value => $_smarty_tpl->getVariable('cd_edit')->value) {
$foreach4DoElse = false;
?>
<div id="<?php echo $_smarty_tpl->getValue('cd_edit')['name'];?>
_<?php echo $_smarty_tpl->getValue('group_id');?>
_<?php echo $_smarty_tpl->getValue('blockId');?>
" class="form-item">
    <details class="crm-accordion-light crm-<?php echo $_smarty_tpl->getValue('cd_edit')['name'];?>
_<?php echo $_smarty_tpl->getValue('group_id');?>
_<?php echo $_smarty_tpl->getValue('blockId');?>
-accordion" <?php if (!$_smarty_tpl->getValue('cd_edit')['collapse_display']) {?>open<?php }?>>
        <summary>
            <?php echo $_smarty_tpl->getValue('cd_edit')['title'];?>

        </summary>
        <div class="crm-accordion-body">
        <?php $_smarty_tpl->renderSubTemplate("file:CRM/Custom/Form/Edit/CustomData.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customDataEntity'=>'address','isSingleRecordEdit'=>false,'prefix'=>''), (int) 0, $_smarty_current_dir);
?>
        </div><!-- crm-accordion-body-->
    </details>

    <div id="custom_group_<?php echo $_smarty_tpl->getValue('group_id');?>
_<?php echo $_smarty_tpl->getValue('blockId');?>
"></div>
</div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
