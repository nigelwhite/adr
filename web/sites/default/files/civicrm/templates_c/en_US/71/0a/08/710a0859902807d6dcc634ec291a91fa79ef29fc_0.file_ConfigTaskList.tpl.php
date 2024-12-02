<?php
/* Smarty version 5.3.1, created on 2024-12-02 16:15:15
  from 'file:CRM/Admin/Page/ConfigTaskList.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674ddd13c48e43_67574772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '710a0859902807d6dcc634ec291a91fa79ef29fc' => 
    array (
      0 => 'CRM/Admin/Page/ConfigTaskList.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674ddd13c48e43_67574772 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Admin/Page';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', "linkTitle", null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Edit settings<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', "adminMenu", null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin",'q'=>"reset=1"), $_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
<div class="help">
  <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('adminMenu')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Use this checklist to review configuration tasks for your site. Settings that you have not yet reviewed will be <span class="status-overdue">displayed in red</span>. After you have visited a page, the links will <span class="status-pending">display in green</span>. You can access this page again from the <a href="%1">Administer CiviCRM</a> menu at any time.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('adminMenu')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
</div>
<table class="selector">
    <tr class="columnheader">
        <td colspan="2"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Site Configuration<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/domain",'q'=>"action=update&reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Organization Contact Information<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Configure your organization name, email address and postal address.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/setting/localization",'q'=>"reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Localization<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Localization settings include user language, default currency and available countries for address input.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/setting/component",'q'=>"action=update&reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Components<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Enable or disable Components such as CiviContribute, CiviEvent, CiviCase, etc.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/extensions",'q'=>"reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Extensions<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Extensions are installable packages which give CiviCRM new functionality.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Some extenions are shipped with CiviCRM (known as core extensions, such as SearchKit and FormBuilder), but there are also many extensions developed by the community.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getValue('registerSite');?>
" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Register your site at CiviCRM.org. Opens in a new window.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>" target="_blank"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Register your site<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Join the community and help CiviCRM remain a leading CRM for organizations worldwide.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="columnheader">
        <td colspan="2"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Viewing and Editing Contacts<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/setting/preferences/display",'q'=>"reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Display Preferences<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Configure screen and form elements for Viewing Contacts, Editing Contacts, Advanced Search, Contact Dashboard and WYSIWYG Editor.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>"href='https://civicrm.org/themes' target='_blank'"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>You can also change the theme here, but first it must be installed as an extension. You can <a %1>explore CiviCRM themes</a> on the extension directory.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>"href='https://civicrm.org/themes' target='_blank'"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/setting/preferences/address",'q'=>"reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Address Settings<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Format addresses in mailing labels, input forms and how they are displayed on screens.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/setting/mapping",'q'=>"reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Mapping and Geocoding<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Configure a mapping provider (e.g. OpenStreetMap or Google) to display maps for contact addresses and event locations.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/setting/search",'q'=>"reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Search Settings<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Adjust search behaviors including wildcards, and data to include in quick search results. Adjusting search settings can improve performance for larger datasets.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/options/subtype",'q'=>"reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Contact Types<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>You can modify the names of the built-in contact types (Individual, Household, Organizations), and you can create or modify "contact subtypes" for more specific uses (e.g. Student, Parent, Team, etc.).<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="columnheader">
        <td colspan="2"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Sending Emails (also used for contribution receipts and event confirmations)<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/options/from_email_address",'q'=>"reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>From Email Addresses<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Define general email address(es) that can be used as the FROM address when sending email to contacts from within CiviCRM (e.g. info@example.org)<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/setting/smtp",'q'=>"reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Outbound Email<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Settings for outbound email - either SMTP server, port and authentication or Sendmail path and argument.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="columnheader">
        <td colspan="2"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Online Contributions / Online Membership Signup / Online Event Registration<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/paymentProcessor",'q'=>"reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Payment Processors<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Select and configure one or more payment processing services for online contributions, events and / or membership fees.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <?php if ($_smarty_tpl->getValue('config')->userSystem->is_drupal == '1') {?>
        <tr class="even">
            <?php if ($_smarty_tpl->getValue('config')->userFramework == 'Drupal') {?>
                <td class="tasklist"><a href="<?php echo $_smarty_tpl->getValue('config')->userFrameworkBaseURL;?>
?q=admin/people/permissions&civicrmDestination=civicrm/admin/configtask"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Permissions for Anonymous Users<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
            <?php } else { ?>
                <td class="tasklist"><a href="<?php echo $_smarty_tpl->getValue('config')->userFrameworkBaseURL;?>
?q=admin/user/permissions&civicrmDestination=civicrm/admin/configtask"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Permissions for Anonymous Users<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
            <?php }?>
            <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>You will also need to change Drupal permissions so anonymous users can make contributions, register for events and / or use profiles to enter contact information.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?> <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('docURL')->handle(array('page'=>"user/initial-set-up/permissions-and-access-control"), $_smarty_tpl);?>
</td>
        </tr>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('enabledComponents')['CiviContribute'] == 1) {?>
      <tr class="even">
          <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/setting/preferences/contribute",'q'=>"selectedChild=workflow&reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>CiviContribute Component Settings<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
          <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Review and modify the CiviContribute Component settings such as Taxes and Invoicing, Deferred Revenue, and Access Control by Financial Type<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
      </tr>
    <?php }?>
</table>
<br />

<div class="description">
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', 'docUrlText', null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Organizing Your Data<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', 'docLink', null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('docURL')->handle(array('page'=>"user/organising-your-data/overview",'text'=>$_smarty_tpl->getValue('docUrlText')), $_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('adminMenu'),2=>$_smarty_tpl->getValue('docLink')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>The next set of tasks involve planning and have multiple steps. You may want to check out the %2 section in the User and Administrator Guide before you begin. You will not be returned to this page after completing these tasks, but you can always get back here from the <a href="%1">Administer CiviCRM</a> menu.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('adminMenu'),2=>$_smarty_tpl->getValue('docLink')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
</div>

<table class="selector">
    <tr class="columnheader">
        <td colspan="2"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Organize your contacts<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/tag",'q'=>"reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Tags<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Tags can be assigned to any contact record, and are a convenient way to find contacts. You can create as many tags as needed to organize and segment your records.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/group",'q'=>"reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Manage Groups<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Use Groups to organize contacts (e.g. these contacts are part of our 'Steering Committee').<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>

    <tr class="columnheader">
        <td colspan="2"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Customize Data, Forms and Screens<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/custom/group",'q'=>"reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Custom Fields<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Configure custom fields to collect and store custom data which is not included in the standard CiviCRM forms.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/uf/group",'q'=>"reset=1&civicrmDestination=".((string)$_smarty_tpl->getValue('destination'))), $_smarty_tpl);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('linkTitle'), ENT_QUOTES, 'UTF-8', true);?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Profiles<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Profiles allow you to aggregate groups of fields and include them in your site as input forms, contact display pages, and search and listings features.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
</table>
<br />
<div class="description">
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Now you can move on to exploring, configuring and using the various optional components for fundraising and constituent engagement. The links below will take you to the online documentation for each component.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
</div>
<table class="selector">
    <tr class="columnheader">
        <td colspan="2"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Components<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap" style="width: 10%;"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('docURL')->handle(array('page'=>"user/contributions/what-is-civicontribute",'text'=>$_smarty_tpl->getValue('componentTitles')['CiviContribute']), $_smarty_tpl);?>
</td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Online fundraising and donor management, as well as offline contribution processing and tracking.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap" style="width: 10%;"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('docURL')->handle(array('page'=>"user/pledges/what-is-civipledge",'text'=>$_smarty_tpl->getValue('componentTitles')['CiviPledge']), $_smarty_tpl);?>
</td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Accept and track pledges (for recurring gifts).<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('docURL')->handle(array('page'=>"user/events/what-is-civievent",'text'=>$_smarty_tpl->getValue('componentTitles')['CiviEvent']), $_smarty_tpl);?>
</td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Online event registration and participant tracking.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('docURL')->handle(array('page'=>"user/membership/what-is-civimember",'text'=>$_smarty_tpl->getValue('componentTitles')['CiviMember']), $_smarty_tpl);?>
</td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Online signup and membership management.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('docURL')->handle(array('page'=>"user/email/what-is-civimail",'text'=>$_smarty_tpl->getValue('componentTitles')['CiviMail']), $_smarty_tpl);?>
</td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Personalized email blasts and newsletters.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('docURL')->handle(array('page'=>"user/campaign/what-is-civicampaign",'text'=>$_smarty_tpl->getValue('componentTitles')['CiviCampaign']), $_smarty_tpl);?>
</td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Link together events, mailings, activities, and contributions. Create surveys and online petitions.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="even">
        <td class="tasklist nowrap"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('docURL')->handle(array('page'=>"user/case-management/what-is-civicase",'text'=>$_smarty_tpl->getValue('componentTitles')['CiviCase']), $_smarty_tpl);?>
</td>
        <td><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Integrated case management for human service providers<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
</table>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
