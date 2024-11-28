<?php
/* Smarty version 5.3.1, created on 2024-11-27 17:43:48
  from 'file:CRM/Form/default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_67475a54ea41d3_25798195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59c9eb5fe4e0f44b579271526316af2ec4fbbeb3' => 
    array (
      0 => 'CRM/Form/default.tpl',
      1 => 1730963841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Form/body.tpl' => 1,
  ),
))) {
function content_67475a54ea41d3_25798195 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if (!$_smarty_tpl->getValue('suppressForm')) {?>
<form <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('form')['attributes'],'nodefaults');?>
>
  <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'form-top'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'form-top'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>

  <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'form-body'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->renderSubTemplate("file:CRM/Form/body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('tplFile'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'form-body'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php if (!$_smarty_tpl->getValue('suppressForm')) {?>
  <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'form-bottom'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'form-bottom'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
</form>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
