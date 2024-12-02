<?php
/* Smarty version 5.3.1, created on 2024-12-02 13:39:04
  from 'file:CRM/common/CMSPrint.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674db878d043b4_00225411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49dbaf1587cae807fae72a2160541ad9c119d19f' => 
    array (
      0 => 'CRM/common/CMSPrint.tpl',
      1 => 1730963841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/common/debug.tpl' => 1,
    'file:CRM/common/status.tpl' => 1,
    'file:CRM/Form/".((string)$_smarty_tpl->getValue(\'formTpl\')).".tpl' => 1,
    'file:CRM/common/publicFooter.tpl' => 1,
    'file:CRM/common/footer.tpl' => 1,
  ),
))) {
function content_674db878d043b4_00225411 (\Smarty\Template $_smarty_tpl) {
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
}?>

<div id="crm-container" class="crm-container<?php if ($_smarty_tpl->getValue('urlIsPublic')) {?> crm-public<?php }?>" lang="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('config')->lcMessages,2,'',true);?>
" xml:lang="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('config')->lcMessages,2,'',true);?>
">

<?php if ($_smarty_tpl->getValue('breadcrumb')) {?>
  <div class="breadcrumb">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('breadcrumb'), 'crumb', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('crumb')->value) {
$foreach0DoElse = false;
?>
      <?php if ($_smarty_tpl->getValue('key') != 0) {?>
        <i class="crm-i fa-angle-double-right" aria-hidden="true"></i>
      <?php }?>
      <?php echo $_smarty_tpl->getValue('crumb');?>

    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </div>
<?php }?>

<?php if ($_smarty_tpl->getValue('urlIsPublic')) {?>
    <?php if ($_smarty_tpl->getValue('pageTitle')) {?>
      <div class="crm-title">
        <h2 class="title"><?php echo $_smarty_tpl->getValue('pageTitle');?>
</h2>
      </div>
    <?php }
} else { ?>
    <?php if ($_smarty_tpl->getValue('pageTitle')) {?>
      <div class="crm-title crm-page-title-wrapper">
        <h1 class="title"><?php if ($_smarty_tpl->getValue('isDeleted')) {?>
          <del><?php }
echo $_smarty_tpl->getValue('pageTitle');
if ($_smarty_tpl->getValue('isDeleted')) {?></del><?php }?></h1>
      </div>
    <?php }
}?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'page-header'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'page-header'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
<div class="clear"></div>

<div id="crm-main-content-wrapper">
  <?php $_smarty_tpl->renderSubTemplate("file:CRM/common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'page-body'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if ($_smarty_tpl->getValue('isForm') && $_smarty_tpl->getValue('formTpl')) {?>
      <?php $_smarty_tpl->renderSubTemplate("file:CRM/Form/".((string)$_smarty_tpl->getValue('formTpl')).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
      <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('tplFile'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
  <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'page-body'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
</div>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'page-footer'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('urlIsPublic')) {?>
  <?php $_smarty_tpl->renderSubTemplate("file:CRM/common/publicFooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else { ?>
  <?php $_smarty_tpl->renderSubTemplate("file:CRM/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'page-footer'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

</div> <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
