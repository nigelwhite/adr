<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:55
  from 'file:CRM/Custom/Form/CustomData.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd88b5fb376_87248379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f5db3f8f33f82ab1eb2dbf5a8756d4c3c3c2a46' => 
    array (
      0 => 'CRM/Custom/Form/CustomData.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Custom/Form/Edit/CustomData.tpl' => 2,
    'file:CRM/Form/attachmentjs.tpl' => 1,
  ),
))) {
function content_674dd88b5fb376_87248379 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Custom/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groupTree'), 'cd_edit', false, 'group_id', 'custom_sets', array (
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group_id')->value => $_smarty_tpl->getVariable('cd_edit')->value) {
$foreach0DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('cd_edit')['is_multiple'] && $_smarty_tpl->getValue('multiRecordDisplay') == 'single') {?>
      <?php $_smarty_tpl->assign('isSingleRecordEdit', true, false, NULL);?>
    <?php } else { ?>
            <?php $_smarty_tpl->assign('isSingleRecordEdit', false, false, NULL);?>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('isSingleRecordEdit')) {?>
      <div class="custom-group custom-group-<?php echo $_smarty_tpl->getValue('cd_edit')['name'];?>
">
        <?php $_smarty_tpl->renderSubTemplate("file:CRM/Custom/Form/Edit/CustomData.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customDataEntity'=>''), (int) 0, $_smarty_current_dir);
?>
      </div>
    <?php } else { ?>
     <details class="custom-group custom-group-<?php echo $_smarty_tpl->getValue('cd_edit')['name'];?>
 crm-accordion-bold crm-custom-accordion" <?php if ($_smarty_tpl->getValue('cd_edit')['collapse_display'] && empty($_smarty_tpl->getValue('skipTitle'))) {
} else { ?>open<?php }?>>
      <?php if (empty($_smarty_tpl->getValue('skipTitle'))) {?>
      <summary>
        <?php echo $_smarty_tpl->getValue('cd_edit')['title'];?>

       </summary>
      <?php }?>
      <div class="crm-accordion-body">
        <?php $_smarty_tpl->renderSubTemplate("file:CRM/Custom/Form/Edit/CustomData.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customDataEntity'=>''), (int) 0, $_smarty_current_dir);
?>
      </div>
     </details>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('cgCount')) {?>
      <div id="custom_group_<?php echo $_smarty_tpl->getValue('group_id');?>
_<?php echo $_smarty_tpl->getValue('cgCount');?>
"></div>
    <?php } else { ?>
      <div id="custom_group_<?php echo $_smarty_tpl->getValue('group_id');?>
"></div>
    <?php }?>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->renderSubTemplate("file:CRM/Form/attachmentjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
