<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:33
  from 'file:CRM/Contact/Form/Inline/Address.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd8759138f9_94453332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcc826f65b61daaee2475832f1e8f904c75a2627' => 
    array (
      0 => 'CRM/Contact/Form/Inline/Address.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/common/formButtons.tpl' => 1,
    'file:CRM/Contact/Form/ShareAddress.tpl' => 1,
    'file:CRM/Contact/Form/Edit/Address/".((string)$_smarty_tpl->getValue(\'addressElement\')).".tpl' => 1,
    'file:CRM/Contact/Form/Edit/Address/geo_code.tpl' => 1,
    'file:CRM/Contact/Form/Edit/Address/CustomData.tpl' => 1,
  ),
))) {
function content_674dd8759138f9_94453332 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Form/Inline';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>  <table class="form-layout crm-edit-address-form crm-inline-edit-form">
    <tr>
      <td>
        <div class="crm-submit-buttons">
          <?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>''), (int) 0, $_smarty_current_dir);
?>
          <?php if ($_smarty_tpl->getValue('addressId')) {?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="button delete-button" href="#" style="display:inline-block;float:none;"><div class="icon delete-icon"></div> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Delete<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a>
          <?php }?>
        </div>
      </td>
    </tr>
     <tr>
        <td>
           <span class="crm-address-element location_type_id-address-element">
            <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['location_type_id']['label'];?>
&nbsp;<?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['location_type_id']['html'];?>

            </span>
        </td>
     </tr>
     <tr>
        <td>
           <span class="crm-address-element is_primary-address-element"><?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['is_primary']['html'];?>
</span>
           <span class="crm-address-element is_billing-address-element"><?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['is_billing']['html'];?>
</span>
        </td>
     </tr>

          <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Form/ShareAddress.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

     <tr>
      <td>
        <table id="address_table_<?php echo $_smarty_tpl->getValue('blockId');?>
" class="form-layout-compressed">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('addressSequence'), 'addressElement');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('addressElement')->value) {
$foreach0DoElse = false;
?>
            <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Form/Edit/Address/".((string)$_smarty_tpl->getValue('addressElement')).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
           <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
           <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Form/Edit/Address/geo_code.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
       </table>
      </td>
     </tr>
  </table>

  <div class="crm-edit-address-custom_data crm-inline-edit-form crm-address-custom-set-block-<?php echo $_smarty_tpl->getValue('blockId');?>
">
    <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Form/Edit/Address/CustomData.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  </div>

<?php echo '<script'; ?>
 type="text/javascript">
  
  cj('#address_<?php echo $_smarty_tpl->getValue('blockId');?>
_location_type_id').change(function() {
    var ele = cj(this);
    var lt = ele.val();
    var container = ele.closest('div.crm-inline-edit.address');
    container.data('location-type-id', '');
    var ok = true;
    if (lt != '') {
      cj('.crm-inline-edit.address').each(function() {
        if (ok && cj(this).data('location-type-id') == lt) {
          var label = cj('option:selected', ele).text();
          ele.select2('val', '');
          ele.crmError(label + " <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>has already been assigned to another address. Please select another location for this address.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>");
          ok = false;
        }
      });
      if (ok) {
        container.data('location-type-id', lt);
      }
    }
  });
  
  cj(':checkbox[id*="[is_primary"]', 'form[name=Address_<?php echo $_smarty_tpl->getValue('blockId');?>
]').change(function() {
    if (this.defaultChecked) {
      cj(this).crmError(" <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Please choose another address to be primary before changing this one.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>");
      cj(this).prop('checked', true);
    }
  });
  
  cj(':submit[name$=cancel]', 'form[name=Address_<?php echo $_smarty_tpl->getValue('blockId');?>
]').click(function() {
    var container = cj(this).closest('div.crm-inline-edit.address');
    var origValue = container.attr('data-location-type-id') || '';
    container.data('location-type-id', origValue);
  });
  
  <?php if ($_smarty_tpl->getValue('masterAddress')[$_smarty_tpl->getValue('blockId')]) {?>
    CRM.alert('<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js",1=>$_smarty_tpl->getValue('masterAddress')[$_smarty_tpl->getValue('blockId')]), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>This address is shared with %1 contact record(s). Modifying this address will automatically update the shared address for these contacts.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js",1=>$_smarty_tpl->getValue('masterAddress')[$_smarty_tpl->getValue('blockId')]), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>', '<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Editing Master Address<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>', 'info', {expires: 0});
  <?php }
echo '</script'; ?>
>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
