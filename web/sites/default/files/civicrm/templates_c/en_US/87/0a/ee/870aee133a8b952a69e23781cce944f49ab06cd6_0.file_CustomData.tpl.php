<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:55
  from 'file:CRM/Custom/Form/Edit/CustomData.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd88b609d71_63946558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '870aee133a8b952a69e23781cce944f49ab06cd6' => 
    array (
      0 => 'CRM/Custom/Form/Edit/CustomData.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Custom/Form/Edit/CustomField.tpl' => 1,
  ),
))) {
function content_674dd88b609d71_63946558 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Custom/Form/Edit';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if (!$_smarty_tpl->getValue('isSingleRecordEdit') && $_smarty_tpl->getValue('cd_edit')['is_multiple'] == 1 && $_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('table_id',$_smarty_tpl->getValue('cd_edit')) && $_smarty_tpl->getValue('cd_edit')['table_id'] && $_smarty_tpl->getValue('contactId') && !$_smarty_tpl->getValue('skipTitle') && $_smarty_tpl->getValue('cd_edit')['style'] == 'Inline') {?>
  <?php $_smarty_tpl->assign('tableID', $_smarty_tpl->getValue('cd_edit')['table_id'], false, NULL);?>
  <a href="#" class="crm-hover-button crm-custom-value-del" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('cd_edit')['title']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Delete %1<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('cd_edit')['title']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>"
     data-post='{"valueID": "<?php echo $_smarty_tpl->getValue('tableID');?>
", "groupID": "<?php echo $_smarty_tpl->getValue('group_id');?>
", "contactId": "<?php echo $_smarty_tpl->getValue('contactId');?>
", "key": "<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmKey')->handle(array('name'=>'civicrm/ajax/customvalue'), $_smarty_tpl);?>
"}'>
    <span class="icon delete-icon"></span> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Delete<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
  </a>
<?php }?>

<?php if ($_smarty_tpl->getValue('cd_edit')['help_pre']) {?>
  <div class="messages help"><?php echo $_smarty_tpl->getValue('cd_edit')['help_pre'];?>
</div>
<?php }?>
<table <?php if (!$_smarty_tpl->getValue('isSingleRecordEdit')) {?>class="form-layout-compressed"<?php }?>>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cd_edit')['fields'], 'element', false, 'field_id');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field_id')->value => $_smarty_tpl->getVariable('element')->value) {
$foreach1DoElse = false;
?>
    <?php if ($_smarty_tpl->getValue('customDataEntity') && $_smarty_tpl->getValue('blockId')) {?>
            <?php $_smarty_tpl->assign('element_name', $_smarty_tpl->getValue('element')['element_custom_name'], false, NULL);?>
      <?php $_smarty_tpl->assign('formElement', $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('customDataEntity')][$_smarty_tpl->getValue('blockId')][$_smarty_tpl->getValue('element_name')], false, NULL);?>
    <?php } else { ?>
      <?php $_smarty_tpl->assign('element_name', $_smarty_tpl->getValue('element')['element_name'], false, NULL);?>
      <?php $_smarty_tpl->assign('formElement', $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('element_name')], false, NULL);?>
    <?php }?>
    <?php $_smarty_tpl->renderSubTemplate("file:CRM/Custom/Form/Edit/CustomField.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</table>
<div class="spacer"></div>
<?php if ($_smarty_tpl->getValue('cd_edit')['help_post']) {?><div class="messages help"><?php echo $_smarty_tpl->getValue('cd_edit')['help_post'];?>
</div><?php }
if (!$_smarty_tpl->getValue('isSingleRecordEdit') && $_smarty_tpl->getValue('cd_edit')['is_multiple'] && (($_smarty_tpl->getValue('cd_edit')['max_multiple'] == '') || ($_smarty_tpl->getValue('cd_edit')['max_multiple'] > 0 && $_smarty_tpl->getValue('cd_edit')['max_multiple'] > $_smarty_tpl->getValue('cgCount')))) {?>
  <?php if ($_smarty_tpl->getValue('skipTitle')) {?>
        <div class="messages help">
      <em><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('cd_edit')['title']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Click "Edit Contact" to add more %1 records<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('cd_edit')['title']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></em>
    </div>
  <?php } else { ?>
    <div id="add-more-link-<?php echo $_smarty_tpl->getValue('cgCount');?>
" class="add-more-link-<?php echo $_smarty_tpl->getValue('group_id');?>
 add-more-link-<?php echo $_smarty_tpl->getValue('group_id');?>
-<?php echo $_smarty_tpl->getValue('cgCount');?>
">
      <a href="#" class="crm-hover-button" onclick="CRM.buildCustomData('<?php echo $_smarty_tpl->getValue('cd_edit')['extends'];?>
',<?php if ($_smarty_tpl->getValue('cd_edit')['subtype']) {?>'<?php echo $_smarty_tpl->getValue('cd_edit')['subtype'];?>
'<?php } else { ?>'<?php echo $_smarty_tpl->getValue('cd_edit')['extends_entity_column_id'];?>
'<?php }?>, '', <?php echo $_smarty_tpl->getValue('cgCount');?>
, <?php echo $_smarty_tpl->getValue('group_id');?>
, true ); return false;">
        <i class="crm-i fa-plus-circle" aria-hidden="true"></i>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('cd_edit')['title']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Another %1 record<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('cd_edit')['title']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
      </a>
    </div>
  <?php }
}?>

<?php $_smarty_tpl->assign('customDataEntity', '', false, NULL);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
