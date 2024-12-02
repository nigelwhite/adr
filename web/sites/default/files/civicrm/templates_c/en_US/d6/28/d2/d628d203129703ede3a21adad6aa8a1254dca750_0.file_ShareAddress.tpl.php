<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:33
  from 'file:CRM/Contact/Form/ShareAddress.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd875930437_13415826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd628d203129703ede3a21adad6aa8a1254dca750' => 
    array (
      0 => 'CRM/Contact/Form/ShareAddress.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd875930437_13415826 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><tr>
  <td>
    <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['use_shared_address']['html'];
echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['use_shared_address']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"id-sharedAddress",'file'=>"CRM/Contact/Form/Contact.hlp"), $_smarty_tpl);?>

    <div id="shared-address-<?php echo $_smarty_tpl->getValue('blockId');?>
" class="form-layout-compressed">
      <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['master_contact_id']['label'];?>

      <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['master_contact_id']['html'];?>

      <div class="shared-address-add-relationship" style="display: none;">
        <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['add_relationship']['html'];?>

        <?php echo $_smarty_tpl->getValue('form')['address'][$_smarty_tpl->getValue('blockId')]['add_relationship']['label'];?>

        <span class="employer"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"id-sharedAddress-updateRelationships",'file'=>"CRM/Contact/Form/Contact"), $_smarty_tpl);?>
</span>
      </div>
      <div class="shared-address-list">
        <?php if (!empty($_smarty_tpl->getValue('sharedAddresses')[$_smarty_tpl->getValue('blockId')]['shared_address_display'])) {?>
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sharedAddresses')[$_smarty_tpl->getValue('blockId')]['shared_address_display']['options'], 'sa');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sa')->value) {
$foreach3DoElse = false;
?>
            <?php $_smarty_tpl->assign('sa_name', "selected_shared_address-".((string)$_smarty_tpl->getValue('blockId')), false, NULL);?>
            <?php $_smarty_tpl->assign('sa_id', ((string)$_smarty_tpl->getValue('sa_name'))."-".((string)$_smarty_tpl->getValue('sa')['id']), false, NULL);?>
            <input type="radio" name="<?php echo $_smarty_tpl->getValue('sa_name');?>
" id="<?php echo $_smarty_tpl->getValue('sa_id');?>
" value="<?php echo $_smarty_tpl->getValue('sa')['id'];?>
" <?php if ($_smarty_tpl->getValue('sa')['id'] == $_smarty_tpl->getValue('sharedAddresses')[$_smarty_tpl->getValue('blockId')]['shared_address_display']['master_id']) {?>checked="checked"<?php }?>>
            <label for="<?php echo $_smarty_tpl->getValue('sa_id');?>
"><?php echo $_smarty_tpl->getValue('sa')['display_text'];?>
</label><?php if ($_smarty_tpl->getValue('sa')['location_type']) {?>(<?php echo $_smarty_tpl->getValue('sa')['location_type'];?>
)<?php }?><br/>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php }?>
      </div>
    </div>
  </td>
</tr>



<?php echo '<script'; ?>
 type="text/javascript">
  CRM.$(function($) {
    var blockNo = <?php echo $_smarty_tpl->getValue('blockId');?>
,
      contactType = <?php echo json_encode($_smarty_tpl->getValue('contactType'));?>
,
      $addRelationshipSection = $('#shared-address-' + blockNo + ' .shared-address-add-relationship'),
      $employerSection = $('#shared-address-' + blockNo + ' .shared-address-add-relationship .employer'),
      $employerLabel = $('#shared-address-' + blockNo + ' .shared-address-add-relationship label .addrel-employer'),
      $householdLabel = $('#shared-address-' + blockNo + ' .shared-address-add-relationship label .addrel-household'),
      $contentArea = $('#shared-address-' + blockNo + ' .shared-address-list'),
      $masterElement = $('input[name="address[' + blockNo + '][master_id]"]');

    function showHideSharedAddress() {
      // based on checkbox, show or hide
      var share = $(this).prop('checked');
      $('#shared-address-' + blockNo).toggle(!!share);
      $('table#address_table_' + blockNo +', .crm-address-custom-set-block-' + blockNo).toggle(!share);
    }

    // "Use another contact's address" checkbox
    $('#address\\[' + blockNo + '\\]\\[use_shared_address\\]').each(showHideSharedAddress).click(showHideSharedAddress);

    // When an address is selected
    $contentArea.off().on('click', 'input', function() {
      $masterElement.val($(this).val());
    });

    // When shared contact is selected/unselected
    $('input[name="address[' + blockNo +'][master_contact_id]"]').change(function() {
      var $el = $(this),
        sharedContactId = $el.val();

      $contentArea.html('');
      $masterElement.val('');

      if (!sharedContactId || isNaN(sharedContactId)) {
        $employerSection.hide();
        $addRelationshipSection.hide();
        $employerLabel.hide();
        $householdLabel.hide();
        return;
      }

      var otherContactType = $el.select2('data').extra.contact_type;
      $addRelationshipSection.toggle(contactType === 'Individual' && (otherContactType === 'Organization' || otherContactType === 'Household'));
      $employerSection.toggle(contactType === 'Individual' && otherContactType === 'Organization');

      // use the appropriate label
      $employerLabel.toggle(contactType === 'Individual' && otherContactType === 'Organization');
      $householdLabel.toggle(contactType === 'Individual' && otherContactType === 'Household');


      $.post(CRM.url('civicrm/ajax/inline'), {
          'contact_id': sharedContactId,
          'type': 'method',
          'class_name': 'CRM_Contact_Page_AJAX',
          'fn_name': 'getAddressDisplay'
        },
        function(response) {
          // Avoid race conditions - check that value hasn't been changed by the user while we were waiting for response
          if (response && $el.val() === sharedContactId) {
            var selected = ' checked="checked"',
              addressHTML = '';

            $.each(response, function(i, val) {
              if (addressHTML) {
                selected = '';
              } else {
                $('input[name="address[' + blockNo + '][master_id]"]').val(val.id);
              }
              var name = 'selected_shared_address-'+ blockNo,
                id = name + '-' + val.id;
              addressHTML += '<input type="radio" name="' + name + '" id="' + id + '" value="' + val.id + '"' + selected +'><label for="' + id + '">' + val.display_text + '</label>('+val.location_type+')<br/>';
            });

            if (!addressHTML) {
              addressHTML = "<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Selected contact does not have an address. Please click the following link to edit that contact to add an address, or select a different contact.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>" + ' <a target="_blank" href="' + CRM.url('civicrm/contact/add', 'reset=1&action=update&cid=' + sharedContactId) + '"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Edit Contact Details<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a>';
            }

            $contentArea.html(addressHTML);
          }
        },'json');
    });
  });
<?php echo '</script'; ?>
>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
