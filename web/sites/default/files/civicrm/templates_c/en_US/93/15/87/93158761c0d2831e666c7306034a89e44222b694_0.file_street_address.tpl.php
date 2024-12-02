<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:33
  from 'file:CRM/Contact/Form/Edit/Address/street_address.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd8759f6849_09937373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93158761c0d2831e666c7306034a89e44222b694' => 
    array (
      0 => 'CRM/Contact/Form/Edit/Address/street_address.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd8759f6849_09937373 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Form/Edit/Address';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if (!empty($_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['street_address'])) {?>
   <tr id="streetAddress_<?php echo $_smarty_tpl->getValue('blockId');?>
">
     <td colspan="2">
      <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['street_address']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"id-street-address",'file'=>"CRM/Contact/Form/Contact.hlp"), $_smarty_tpl);?>
<br />
      <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['street_address']['html'];?>

      <?php if ($_smarty_tpl->getValue('parseStreetAddress') == 1 && ($_smarty_tpl->getValue('action') == 1 || $_smarty_tpl->getValue('action') == 2)) {?>
          &nbsp;&nbsp;<a href="#" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Edit Address Elements<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>" onClick="processAddressFields( 'addressElements' , '<?php echo $_smarty_tpl->getValue('blockId');?>
', 1 );return false;"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Edit Address Elements<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a>
          <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"id-edit-street-elements",'file'=>"CRM/Contact/Form/Contact.hlp"), $_smarty_tpl);?>

      <?php }?>
    </td>
  </tr>

  <?php if ($_smarty_tpl->getValue('parseStreetAddress') == 1 && ($_smarty_tpl->getValue('action') == 1 || $_smarty_tpl->getValue('action') == 2)) {?>
    <tr id="addressElements_<?php echo $_smarty_tpl->getValue('blockId');?>
" class=hiddenElement>
      <td>
         <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['street_number']['label'];?>
<br />
         <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['street_number']['html'];?>

       </td>

      <td>
         <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['street_name']['label'];?>
<br />
         <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['street_name']['html'];?>
<br />
      </td>

      <td colspan="2">
        <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['street_unit']['label'];?>
<br />
        <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['street_unit']['html'];?>

        <a href="#" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Edit Street Address<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>" onClick="processAddressFields( 'streetAddress', '<?php echo $_smarty_tpl->getValue('blockId');?>
', 1 );return false;"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Edit Complete Street Address<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"id-edit-complete-street",'file'=>"CRM/Contact/Form/Contact.hlp"), $_smarty_tpl);?>

      </td>
    </tr>
  <?php }?>

<?php if ($_smarty_tpl->getValue('parseStreetAddress') == 1) {?>

<?php echo '<script'; ?>
 type="text/javascript">
function processAddressFields( name, blockId, loadData ) {

  if ( loadData ) {
            var allAddressValues = <?php if ($_smarty_tpl->getValue('allAddressFieldValues')) {
echo $_smarty_tpl->getValue('allAddressFieldValues');
} else { ?>''<?php }?>;

      var streetName    = eval( "allAddressValues.street_name_"    + blockId );
      if (streetName === null) streetName = '';
      var streetUnit    = eval( "allAddressValues.street_unit_"    + blockId );
      if (streetUnit === null) streetUnit = '';
      var streetNumber  = eval( "allAddressValues.street_number_"  + blockId );
      if (streetNumber === null) streetNumber = '';
      var streetAddress = eval( "allAddressValues.street_address_" + blockId );
      if (streetAddress === null) streetAddress = '';
  }

        if ( name == 'addressElements' ) {
             if ( loadData ) {
            streetAddress = '';
       }

       cj('#addressElements_' + blockId).show();
       cj('#streetAddress_' + blockId).hide();
  } else {
             if ( loadData ) {
                  streetNumber = streetName = streetUnit = '';
             }

             cj('#streetAddress_' +  blockId).show();
             cj('#addressElements_'+ blockId).hide();
       }

       // set the values.
       if ( loadData ) {
          cj( '#address_' + blockId +'_street_name'    ).val( streetName    );
          cj( '#address_' + blockId +'_street_unit'    ).val( streetUnit    );
          cj( '#address_' + blockId +'_street_number'  ).val( streetNumber  );
          cj( '#address_' + blockId +'_street_address' ).val( streetAddress );
       }
}

<?php echo '</script'; ?>
>

<?php }
}?>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
