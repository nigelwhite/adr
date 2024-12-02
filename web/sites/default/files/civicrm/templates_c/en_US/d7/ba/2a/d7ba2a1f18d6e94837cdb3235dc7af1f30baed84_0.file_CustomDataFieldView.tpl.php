<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:25
  from 'file:CRM/Contact/Page/View/CustomDataFieldView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd86dc01837_65086871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7ba2a1f18d6e94837cdb3235dc7af1f30baed84' => 
    array (
      0 => 'CRM/Contact/Page/View/CustomDataFieldView.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd86dc01837_65086871 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Page/View';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div id="custom-set-content-<?php echo $_smarty_tpl->getValue('customGroupId');?>
" <?php if ($_smarty_tpl->getValue('permission') == 'edit' && !empty($_smarty_tpl->getValue('cd_edit')['editable'])) {?> class="crm-inline-edit" data-edit-params='{"cid": "<?php echo $_smarty_tpl->getValue('contactId');?>
", "class_name": "CRM_Contact_Form_Inline_CustomData", "groupID": "<?php echo $_smarty_tpl->getValue('customGroupId');?>
", "customRecId": "<?php echo $_smarty_tpl->getValue('customRecId');?>
", "cgcount" : "<?php echo $_smarty_tpl->getValue('cgcount');?>
"}' data-dependent-fields='["#crm-communication-pref-content"]'<?php }?>>
  <div class="crm-clear crm-inline-block-content" <?php if ($_smarty_tpl->getValue('permission') == 'edit' && !empty($_smarty_tpl->getValue('cd_edit')['editable'])) {?>title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Edit<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>"<?php }?>>
    <?php if ($_smarty_tpl->getValue('permission') == 'edit' && !empty($_smarty_tpl->getValue('cd_edit')['editable'])) {?>
      <div class="crm-edit-help">
        <span class="crm-i fa-pencil" aria-hidden="true"></span> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Edit<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
      </div>
    <?php }?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cd_edit')['fields'], 'element', false, 'field_id');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field_id')->value => $_smarty_tpl->getVariable('element')->value) {
$foreach15DoElse = false;
?>
      <div class="crm-summary-row">
        <?php if ($_smarty_tpl->getValue('element')['options_per_line'] != 0) {?>
          <div class="crm-label"><?php echo $_smarty_tpl->getValue('element')['field_title'];?>
</div>
          <div class="crm-content crm-custom_data">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('element')['field_value'], 'val');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('val')->value) {
$foreach16DoElse = false;
?>
                <?php echo $_smarty_tpl->getValue('val');?>

              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </div>
        <?php } else { ?>
          <div class="crm-label"><?php echo $_smarty_tpl->getValue('element')['field_title'];?>
</div>
          <?php if ($_smarty_tpl->getValue('element')['field_data_type'] == 'ContactReference' && $_smarty_tpl->getValue('element')['contact_ref_links']) {?>
                        <div class="crm-content crm-custom-data crm-contact-reference">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('implode')(', ',$_smarty_tpl->getValue('element')['contact_ref_links']);?>

            </div>
          <?php } else { ?>
            <div class="crm-content crm-custom-data"><?php echo $_smarty_tpl->getValue('element')['field_value'];?>
</div>
          <?php }?>
        <?php }?>
      </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </div>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
