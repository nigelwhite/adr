<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:25
  from 'file:CRM/Contact/Page/Inline/Phone.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd86dc0b832_66934538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd12a396357d984f565c43c8724eee4519d8912a8' => 
    array (
      0 => 'CRM/Contact/Page/Inline/Phone.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd86dc0b832_66934538 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Page/Inline';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div id="crm-phone-content" <?php if ($_smarty_tpl->getValue('permission') == 'edit') {?> class="crm-inline-edit" data-edit-params='{"cid": "<?php echo $_smarty_tpl->getValue('contactId');?>
", "class_name": "CRM_Contact_Form_Inline_Phone"}' data-dependent-fields='["#crm-contact-actions-wrapper"]'<?php }?>>
  <div class="crm-clear crm-inline-block-content" <?php if ($_smarty_tpl->getValue('permission') == 'edit') {?>title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Add or edit phone<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>"<?php }?>>
    <?php if ($_smarty_tpl->getValue('permission') == 'edit') {?>
      <div class="crm-edit-help">
        <span class="crm-i fa-pencil" aria-hidden="true"></span> <?php if (empty($_smarty_tpl->getValue('phone'))) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Add phone<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Add or edit phone<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>
      </div>
    <?php }?>
    <?php if (empty($_smarty_tpl->getValue('phone'))) {?>
      <div class="crm-summary-row">
        <div class="crm-label">
          <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Phone<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
          <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('privacyFlag')->handle(array('field'=>'do_not_sms','condition'=>$_smarty_tpl->getValue('privacy')['do_not_sms']), $_smarty_tpl);?>

          <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('privacyFlag')->handle(array('field'=>'do_not_phone','condition'=>$_smarty_tpl->getValue('privacy')['do_not_phone']), $_smarty_tpl);?>

        </div>
        <div class="crm-content"></div>
      </div>
    <?php }?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('phone'), 'item');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach17DoElse = false;
?>
      <?php if (!empty($_smarty_tpl->getValue('item')['phone']) || !empty($_smarty_tpl->getValue('item')['phone_ext'])) {?>
        <div class="crm-summary-row <?php if (!empty($_smarty_tpl->getValue('item')['is_primary'])) {?>primary<?php }?>">
          <div class="crm-label">
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('privacyFlag')->handle(array('field'=>'do_not_sms','condition'=>$_smarty_tpl->getValue('privacy')['do_not_sms']), $_smarty_tpl);?>

            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('privacyFlag')->handle(array('field'=>'do_not_phone','condition'=>$_smarty_tpl->getValue('privacy')['do_not_phone']), $_smarty_tpl);?>

            <?php echo $_smarty_tpl->getValue('item')['location_type'];?>
 <?php echo $_smarty_tpl->getValue('item')['phone_type'];?>

          </div>
          <div class="crm-content crm-contact_phone">
            <?php echo $_smarty_tpl->getValue('item')['phone'];
if (!empty($_smarty_tpl->getValue('item')['phone_ext'])) {?>&nbsp;&nbsp;<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>ext.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?> <?php echo $_smarty_tpl->getValue('item')['phone_ext'];
}?>
          </div>
        </div>
      <?php }?>
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
