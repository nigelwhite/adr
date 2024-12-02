<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:25
  from 'file:CRM/Contact/Page/Inline/ContactName.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd86dbb6652_14362828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '032edb7fbef79698014d96d071a5cd822602a20a' => 
    array (
      0 => 'CRM/Contact/Page/Inline/ContactName.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd86dbb6652_14362828 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Page/Inline';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div id="crm-contactname-content" <?php if ($_smarty_tpl->getValue('permission') == 'edit') {?>class="crm-inline-edit" data-edit-params='{"cid": "<?php echo $_smarty_tpl->getValue('contactId');?>
", "class_name": "CRM_Contact_Form_Inline_ContactName"}' data-dependent-fields='["#crm-communication-pref-content"]'<?php }?>>
  <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-page-contactname"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="crm-inline-block-content"<?php if ($_smarty_tpl->getValue('permission') == 'edit') {?> title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Edit Contact Name<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>"<?php }?>>
      <?php if ($_smarty_tpl->getValue('permission') == 'edit') {?>
        <div class="crm-edit-help">
          <span class="crm-i fa-pencil" aria-hidden="true"></span> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Edit name<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>
      <?php }?>

      <div class="crm-summary-display_name">
        <?php echo $_smarty_tpl->getValue('title');
if ($_smarty_tpl->getValue('domainContact')) {?> (<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>default organization<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>)<?php }?>
      </div>
    </div>
  <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-page-contactname"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
