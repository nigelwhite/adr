<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:33
  from 'file:CRM/common/snippet.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd8758f3f05_79129004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ac0e610bac155b7b46d8f5e623bb4bd884cb121' => 
    array (
      0 => 'CRM/common/snippet.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/common/debug.tpl' => 1,
    'file:CRM/Form/default.tpl' => 2,
    'file:CRM/common/print.tpl' => 1,
    'file:CRM/common/status.tpl' => 1,
  ),
))) {
function content_674dd8758f3f05_79129004 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/common';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('config')->debug) {
$_smarty_tpl->renderSubTemplate("file:CRM/common/debug.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
if ($_GET['snippet'] == 4) {
if ($_smarty_tpl->getValue('isForm')) {
$_smarty_tpl->renderSubTemplate("file:CRM/Form/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else {
$_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('tplFile'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
} else {
if ($_GET['snippet'] == 1) {
$_smarty_tpl->renderSubTemplate("file:CRM/common/print.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'ajax-snippet'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'ajax-snippet'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'page-header','allowCmsOverride'=>0), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'page-header','allowCmsOverride'=>0), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'page-body'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_GET['snippet'] != 'json') {?><div class="crm-container-snippet"><?php $_smarty_tpl->renderSubTemplate("file:CRM/common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
if ($_smarty_tpl->getValue('isForm')) {
$_smarty_tpl->renderSubTemplate("file:CRM/Form/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else {
$_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('tplFile'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
if ($_GET['snippet'] != 'json') {?></div><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'page-body'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'page-footer','allowCmsOverride'=>0), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'page-footer','allowCmsOverride'=>0), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
