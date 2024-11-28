<?php
/* Smarty version 5.3.1, created on 2024-11-27 17:43:49
  from 'file:CRM/common/formButtons.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_67475a550509c5_43279408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b823124b51c999088cd11972f5816c6767bdf598' => 
    array (
      0 => 'CRM/common/formButtons.tpl',
      1 => 1730963841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67475a550509c5_43279408 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/common';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'form-buttons'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('linkButtons')) {?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('linkButtons'), 'linkButton');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('linkButton')->value) {
$foreach2DoElse = false;
?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('accessKey',$_smarty_tpl->getValue('linkButton')) && $_smarty_tpl->getValue('linkButton')['accessKey']) {?>
      <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', 'accessKey', null);?>accesskey="<?php echo $_smarty_tpl->getValue('linkButton')['accessKey'];?>
"<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php } else {
$_smarty_tpl->assign('accessKey', '', false, NULL);?>
    <?php }?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('icon',$_smarty_tpl->getValue('linkButton')) && $_smarty_tpl->getValue('linkButton')['icon']) {?>
      <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', 'icon', null);?><i class="crm-i <?php echo $_smarty_tpl->getValue('linkButton')['icon'];?>
" aria-hidden="true"></i> <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php } else {
$_smarty_tpl->assign('icon', '', false, NULL);?>
    <?php }?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('ref',$_smarty_tpl->getValue('linkButton')) && $_smarty_tpl->getValue('linkButton')['ref']) {?>
      <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', 'linkname', null);?>name="<?php echo $_smarty_tpl->getValue('linkButton')['ref'];?>
"<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php } else {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', 'linkname', null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('name',$_smarty_tpl->getValue('linkButton'))) {?>name="<?php echo $_smarty_tpl->getValue('linkButton')['name'];?>
"<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php }?>
    <a class="button<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('class',$_smarty_tpl->getValue('linkButton'))) {?> <?php echo $_smarty_tpl->getValue('linkButton')['class'];
}?>" <?php echo $_smarty_tpl->getValue('linkname');?>
 href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>$_smarty_tpl->getValue('linkButton')['url'],'q'=>$_smarty_tpl->getValue('linkButton')['qs']), $_smarty_tpl);?>
" <?php echo $_smarty_tpl->getValue('accessKey');?>
 <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('extra',$_smarty_tpl->getValue('linkButton'))) {
echo $_smarty_tpl->getValue('linkButton')['extra'];?>
><?php }?><span><?php echo $_smarty_tpl->getValue('icon');
echo $_smarty_tpl->getValue('linkButton')['title'];?>
</span></a>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->getValue('form')) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('form')['buttons'], 'button', false, 'key', 'btns', array (
));
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('button')->value) {
$foreach3DoElse = false;
?>
  <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('substring')($_smarty_tpl->getValue('key'),0,4) == '_qf_') {?>
    <?php if ($_smarty_tpl->getValue('location')) {?>
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('crmReplace')($_smarty_tpl->getValue('form')['buttons'][$_smarty_tpl->getValue('key')]['html'],'id',((string)$_smarty_tpl->getValue('key'))."-".((string)$_smarty_tpl->getValue('location')));?>

    <?php } else { ?>
      <?php echo $_smarty_tpl->getValue('form')['buttons'][$_smarty_tpl->getValue('key')]['html'];?>

    <?php }?>
  <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>'form-buttons'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
