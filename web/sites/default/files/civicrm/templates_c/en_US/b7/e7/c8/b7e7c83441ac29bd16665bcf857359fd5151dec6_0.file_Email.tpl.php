<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:25
  from 'file:CRM/Contact/Page/Inline/Email.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd86dc1cb64_23481417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7e7c83441ac29bd16665bcf857359fd5151dec6' => 
    array (
      0 => 'CRM/Contact/Page/Inline/Email.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Contact/Page/Inline/BlockCustomData.tpl' => 1,
  ),
))) {
function content_674dd86dc1cb64_23481417 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Page/Inline';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div id="crm-email-content" <?php if ($_smarty_tpl->getValue('permission') == 'edit') {?> class="crm-inline-edit" data-edit-params='{"cid": "<?php echo $_smarty_tpl->getValue('contactId');?>
", "class_name": "CRM_Contact_Form_Inline_Email"}' data-dependent-fields='["#crm-contact-actions-wrapper"]'<?php }?>>
  <div class="crm-clear crm-inline-block-content" <?php if ($_smarty_tpl->getValue('permission') == 'edit') {?>title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Add or edit email<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>"<?php }?>>
  <?php if ($_smarty_tpl->getValue('permission') == 'edit') {?>
    <div class="crm-edit-help">
      <span class="crm-i fa-pencil" aria-hidden="true"></span> <?php if (empty($_smarty_tpl->getValue('email'))) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Add email<?php $_block_repeat=false;
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
?>Add or edit email<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>
    </div>
  <?php }?>
  <?php if (empty($_smarty_tpl->getValue('email'))) {?>
    <div class="crm-summary-row">
      <div class="crm-label">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Email<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php if ($_smarty_tpl->getValue('privacy')['do_not_email']) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('privacyFlag')->handle(array('field'=>'do_not_email'), $_smarty_tpl);
}?>
      </div>
      <div class="crm-content"></div>
    </div>
  <?php }?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('email'), 'item', false, 'blockId');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('blockId')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach18DoElse = false;
?>
    <?php if ($_smarty_tpl->getValue('item')['email']) {?>
    <div class="crm-summary-row <?php if (!empty($_smarty_tpl->getValue('item')['is_primary'])) {?>primary<?php }?>">
      <div class="crm-label">
        <?php echo $_smarty_tpl->getValue('item')['location_type'];?>
 <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Email<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('privacyFlag')->handle(array('field'=>'do_not_email','condition'=>$_smarty_tpl->getValue('privacy')['do_not_email']), $_smarty_tpl);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('privacyFlag')->handle(array('field'=>'on_hold','condition'=>$_smarty_tpl->getValue('item')['on_hold']), $_smarty_tpl);?>

      </div>
      <div class="crm-content crm-contact_email">
        <?php if (!$_smarty_tpl->getValue('item')['on_hold'] && !$_smarty_tpl->getValue('privacy')['do_not_email']) {?>
          <?php if ($_smarty_tpl->getValue('mailingOutboundOption') == 2) {?>             <a href="mailto:<?php echo $_smarty_tpl->getValue('item')['email'];?>
" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('item')['email']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Send email to %1<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('item')['email']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>">
            <?php echo $_smarty_tpl->getValue('item')['email'];?>

            </a>
          <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/activity/email/add",'q'=>"action=add&reset=1&email_id=".((string)$_smarty_tpl->getValue('item')['id'])), $_smarty_tpl);?>
" class="crm-popup" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('item')['email']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Send email to %1<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('item')['email']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>">
            <?php echo $_smarty_tpl->getValue('item')['email'];?>

            </a>
          <?php }?>
        <?php } else { ?>
          <?php echo $_smarty_tpl->getValue('item')['email'];?>

        <?php }?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmAPI')->handle(array('var'=>'civi_mail','entity'=>'Extension','action'=>'get','full_name'=>"civi_mail",'is_active'=>1), $_smarty_tpl);?>

        <?php if ($_smarty_tpl->getValue('item')['on_hold'] == 2) {?>&nbsp;(<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>On Hold - Opt Out<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>)&nbsp;<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('crmDate')($_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('item')['hold_date'],10,''));
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
} elseif ($_smarty_tpl->getValue('item')['on_hold']) {?>&nbsp;<?php if ($_smarty_tpl->getValue('civi_mail')['count']) {?><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/contact/view/bounces",'f'=>"?email_id=".((string)$_smarty_tpl->getValue('item')['id'])), $_smarty_tpl);?>
" class="crm-popup" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('item')['email']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Email Bounce History<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('item')['email']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>"><?php }?>(<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>On Hold<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>)&nbsp;<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('crmDate')($_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('item')['hold_date'],10,''));
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('civi_mail')['count']) {?>&nbsp;<i class="crm-i fa-list-alt" aria-hidden="true"></i></a><?php }
}
if ($_smarty_tpl->getValue('item')['is_bulkmail']) {?>&nbsp;(<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Bulk<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>)<?php }?>
        <?php if (!empty($_smarty_tpl->getValue('item')['signature_text']) || !empty($_smarty_tpl->getValue('item')['signature_html'])) {?>
        <span class="signature-link description">
          <a href="#" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Signature<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>" onClick="showHideSignature( '<?php echo $_smarty_tpl->getValue('blockId');?>
' ); return false;"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>(signature)<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a>
        </span>
        <?php }?>
        <div id="Email_Block_<?php echo $_smarty_tpl->getValue('blockId');?>
_signature" class="hiddenElement">
          <strong><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Signature HTML<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></strong><br /><?php if (!empty($_smarty_tpl->getValue('item')['signature_html'])) {
echo $_smarty_tpl->getValue('item')['signature_html'];
}?><br /><br />
        <strong><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Signature Text<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></strong><br /><?php if (!empty($_smarty_tpl->getValue('item')['signature_text'])) {
echo nl2br((string) $_smarty_tpl->getValue('item')['signature_text'], (bool) 1);
}?></div>
      </div>
    </div>
      <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/BlockCustomData.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('entity'=>'email','customGroups'=>$_smarty_tpl->getValue('item')['custom'],'identifier'=>$_smarty_tpl->getValue('blockId')), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </div>
</div>


<?php echo '<script'; ?>
 type="text/javascript">

function showHideSignature( blockId ) {
  cj("#Email_Block_" + blockId + "_signature").show( );

  cj("#Email_Block_" + blockId + "_signature").dialog({
      title: "Signature",
      modal: true,
      width: 900,
      height: 500,
      beforeclose: function(event, ui) {
        cj(this).dialog("destroy");
      },
      buttons: {
        "Done": function() {
                  cj(this).dialog("destroy");
                }
      }
  });
}
<?php echo '</script'; ?>
>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
