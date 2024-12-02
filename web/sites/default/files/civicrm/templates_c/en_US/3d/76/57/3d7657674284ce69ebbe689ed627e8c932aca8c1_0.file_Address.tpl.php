<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:25
  from 'file:CRM/Contact/Page/Inline/Address.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd86dbf57f3_37619540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d7657674284ce69ebbe689ed627e8c932aca8c1' => 
    array (
      0 => 'CRM/Contact/Page/Inline/Address.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Contact/Page/Inline/BlockCustomData.tpl' => 1,
  ),
))) {
function content_674dd86dbf57f3_37619540 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Page/Inline';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div id="address-block-<?php echo $_smarty_tpl->getValue('locationIndex');?>
" class="address <?php if ($_smarty_tpl->getValue('add')) {?>crm-address_type_<?php echo $_smarty_tpl->getValue('add')['location_type'];
} else { ?>add-new<?php }
if ($_smarty_tpl->getValue('permission') == 'edit') {?> crm-inline-edit" data-dependent-fields='["#crm-contactinfo-content", ".crm-inline-edit.address:not(.add-new)"]' data-edit-params='{"cid": "<?php echo $_smarty_tpl->getValue('contactId');?>
", "class_name": "CRM_Contact_Form_Inline_Address", "locno": "<?php echo $_smarty_tpl->getValue('locationIndex');?>
", "aid": "<?php if ($_smarty_tpl->getValue('add')) {
echo $_smarty_tpl->getValue('add')['id'];
} else { ?>0<?php }?>"}' data-location-type-id="<?php if ($_smarty_tpl->getValue('add')) {
echo $_smarty_tpl->getValue('add')['location_type_id'];
} else { ?>0<?php }
}?>">
  <div class="crm-clear crm-inline-block-content" <?php if ($_smarty_tpl->getValue('permission') == 'edit') {?>title="<?php if ($_smarty_tpl->getValue('add')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Edit address<?php $_block_repeat=false;
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
?>Add address<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>"<?php }?>>
    <?php if ($_smarty_tpl->getValue('permission') == 'edit') {?>
      <div class="crm-edit-help">
        <span class="crm-i fa-pencil" aria-hidden="true"></span> <?php if ($_smarty_tpl->getValue('add')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Edit address<?php $_block_repeat=false;
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
?>Add address<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>
      </div>
    <?php }?>
    <?php if (!$_smarty_tpl->getValue('add')) {?>
      <div class="crm-summary-row">
        <div class="crm-label"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Address<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div>
        <div class="crm-content"></div>
      </div>
    <?php } else { ?>
      <div class="crm-summary-row <?php if ($_smarty_tpl->getValue('add')['is_primary'] == 1) {?> primary<?php }?>">
        <div class="crm-label">
          <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('add')['location_type']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>%1 Address<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('add')['location_type']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
          <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('privacyFlag')->handle(array('field'=>'do_not_mail','condition'=>$_smarty_tpl->getValue('privacy')['do_not_mail']), $_smarty_tpl);?>

          <?php if ($_smarty_tpl->getValue('config')->mapProvider && !empty($_smarty_tpl->getValue('add')['geo_code_1']) && $_smarty_tpl->getSmarty()->getModifierCallback('is_numeric')($_smarty_tpl->getValue('add')['geo_code_1']) && !empty($_smarty_tpl->getValue('add')['geo_code_2']) && $_smarty_tpl->getSmarty()->getModifierCallback('is_numeric')($_smarty_tpl->getValue('add')['geo_code_2'])) {?>
          <?php $_smarty_tpl->assign('mapLocationTypeID', $_smarty_tpl->getValue('add')['location_type_id'], false, NULL);?>
          <br /><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>'civicrm/contact/map','q'=>"reset=1&cid=".((string)$_smarty_tpl->getValue('contactId'))."&lid=".((string)$_smarty_tpl->getValue('mapLocationTypeID'))), $_smarty_tpl);?>
" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('add')['location_type']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Map %1 Address<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('add')['location_type']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>"><i class="crm-i fa-map-marker" aria-hidden="true"></i> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Map<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a>
          <?php }?>
        </div>
        <div class="crm-content">
          <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')($_smarty_tpl->getValue('locationIndex'),$_smarty_tpl->getValue('sharedAddresses')) && !empty($_smarty_tpl->getValue('sharedAddresses')[$_smarty_tpl->getValue('locationIndex')]['shared_address_display']['name'])) {?>
            <strong><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('sharedAddresses')[$_smarty_tpl->getValue('locationIndex')]['shared_address_display']['name']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Address belongs to %1<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('sharedAddresses')[$_smarty_tpl->getValue('locationIndex')]['shared_address_display']['name']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></strong><br />
          <?php }?>
          <?php echo nl2br((string) $_smarty_tpl->getSmarty()->getModifierCallback('purify')($_smarty_tpl->getValue('add')['display']), (bool) 1);?>

        </div>
      </div>
    <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/BlockCustomData.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('entity'=>'address','customGroups'=>$_smarty_tpl->getValue('add')['custom'],'identifier'=>$_smarty_tpl->getValue('locationIndex')), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
  </div>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
