<?php
/* Smarty version 5.3.1, created on 2024-11-27 17:40:26
  from 'file:CRM/Afform/Page/AfformBase.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_6747598aacfd43_25543933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5c024bb6dd265f4d46f36bec4ac3e9c54328558' => 
    array (
      0 => 'CRM/Afform/Page/AfformBase.tpl',
      1 => 1730963841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6747598aacfd43_25543933 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/ext/afform/core/templates/CRM/Afform/Page';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><crm-angular-js modules="afformStandalone">
  <form id="bootstrap-theme" ng-controller="AfformStandalonePageCtrl">
    
      <h1 style="display: none" crm-page-title ng-if="afformTitle">{{ afformTitle }}</h1>
    
    <<?php echo $_smarty_tpl->getValue('directive');?>
></<?php echo $_smarty_tpl->getValue('directive');?>
>
  </form>
</crm-angular-js>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
