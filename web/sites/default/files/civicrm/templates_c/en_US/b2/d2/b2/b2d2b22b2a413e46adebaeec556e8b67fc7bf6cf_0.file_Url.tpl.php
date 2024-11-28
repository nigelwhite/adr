<?php
/* Smarty version 5.3.1, created on 2024-11-27 17:43:48
  from 'file:CRM/Admin/Form/Setting/Url.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_67475a54ebfb16_06211323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2d2b22b2a413e46adebaeec556e8b67fc7bf6cf' => 
    array (
      0 => 'CRM/Admin/Form/Setting/Url.tpl',
      1 => 1730963841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/common/formButtons.tpl' => 1,
  ),
))) {
function content_67475a54ebfb16_06211323 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Admin/Form/Setting';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="help">
  <p>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>These settings define the URLs used to access CiviCRM resources (CSS files, Javascript files, images, etc.).<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
  </p>
  <p>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>You may configure these settings using absolute URLs or URL variables.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'id-url_vars'), $_smarty_tpl);?>

  </p>
</div>
<div class="crm-block crm-form-block crm-url-form-block">
<table class="form-layout">
    <tr class="crm-url-form-block-userFrameworkResourceURL">
        <td class="label">
            <?php echo $_smarty_tpl->getValue('form')['userFrameworkResourceURL']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'id-resource_url'), $_smarty_tpl);?>

        </td>
        <td>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('crmAddClass')($_smarty_tpl->getValue('form')['userFrameworkResourceURL']['html'],'huge40');?>

        </td>
    </tr>
    <tr class="crm-url-form-block-imageUploadURL">
        <td class="label">
            <?php echo $_smarty_tpl->getValue('form')['imageUploadURL']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'id-image_url'), $_smarty_tpl);?>

        </td>
        <td>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('crmAddClass')($_smarty_tpl->getValue('form')['imageUploadURL']['html'],'huge40');?>

        </td>
    </tr>
    <tr class="crm-url-form-block-customCSSURL">
        <td class="label">
            <?php echo $_smarty_tpl->getValue('form')['customCSSURL']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'id-css_url'), $_smarty_tpl);?>

        </td>
        <td>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('crmAddClass')($_smarty_tpl->getValue('form')['customCSSURL']['html'],'huge40');?>

        </td>
    </tr>
    <tr class="crm-url-form-block-disable_core_css">
        <td class="label">
            <?php echo $_smarty_tpl->getValue('form')['disable_core_css']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'id-css_url'), $_smarty_tpl);?>

        </td>
        <td>
            <?php echo $_smarty_tpl->getValue('form')['disable_core_css']['html'];?>
<br />
            <p class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo $_smarty_tpl->getValue('disable_core_css_description');
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></p>
        </td>
    </tr>
    <tr class="crm-url-form-block-extensionsURL">
        <td class="label">
            <?php echo $_smarty_tpl->getValue('form')['extensionsURL']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'id-extensions_url'), $_smarty_tpl);?>

        </td>
        <td>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('crmAddClass')($_smarty_tpl->getValue('form')['extensionsURL']['html'],'huge40');?>

        </td>
    </tr>
    <tr class="crm-url-form-block-enableSSL">
        <td class="label">
            <?php echo $_smarty_tpl->getValue('form')['enableSSL']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'id-enable_ssl'), $_smarty_tpl);?>

        </td>
        <td>
            <?php echo $_smarty_tpl->getValue('form')['enableSSL']['html'];?>

            <p class="description font-red"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo $_smarty_tpl->getValue('settings_fields')['enableSSL']['description'];
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></p>
        </td>
    </tr>
    <tr class="crm-url-form-block-verifySSL">
        <td class="label">
            <?php echo $_smarty_tpl->getValue('form')['verifySSL']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'id-verify_ssl'), $_smarty_tpl);?>

        </td>
        <td>
            <?php echo $_smarty_tpl->getValue('form')['verifySSL']['html'];?>
<br/>
            <p class="description font-red"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo $_smarty_tpl->getValue('settings_fields')['verifySSL']['description'];
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></p>
        </td>
    </tr>
    <tr class="crm-url-form-block-defaultExternUrl">
        <td class="label">
            <?php echo $_smarty_tpl->getValue('form')['defaultExternUrl']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'id-defaultExternUrl'), $_smarty_tpl);?>

        </td>
        <td>
            <?php echo $_smarty_tpl->getValue('form')['defaultExternUrl']['html'];?>
<br/>
            <p class="description font-red"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo $_smarty_tpl->getValue('settings_fields')['defaultExternUrl']['description'];
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></p>
        </td>
    </tr>
</table>
<div class="crm-submit-buttons"><?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"bottom"), (int) 0, $_smarty_current_dir);
?></div>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
