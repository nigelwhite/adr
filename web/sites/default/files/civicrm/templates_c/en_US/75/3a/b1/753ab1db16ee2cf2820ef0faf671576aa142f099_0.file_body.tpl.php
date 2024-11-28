<?php
/* Smarty version 5.3.1, created on 2024-11-27 17:43:48
  from 'file:CRM/Form/body.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_67475a54eb0d42_81099228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '753ab1db16ee2cf2820ef0faf671576aa142f099' => 
    array (
      0 => 'CRM/Form/body.tpl',
      1 => 1730963841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67475a54eb0d42_81099228 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if (!empty($_smarty_tpl->getValue('form')['javascript'])) {?>
  <?php echo $_smarty_tpl->getValue('form')['javascript'];?>

<?php }?>

<?php if (!empty($_smarty_tpl->getValue('form')['hidden'])) {?>
  <div><?php echo $_smarty_tpl->getValue('form')['hidden'];?>
</div>
<?php }?>

<?php if (($_smarty_tpl->getValue('snippet') !== 'json') && !$_smarty_tpl->getValue('suppressForm') && $_smarty_tpl->getValue('form')['errors']) {?>
   <div class="messages crm-error">
       <i class="crm-i fa-exclamation-triangle crm-i-red" aria-hidden="true"></i>
     <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Please correct the following errors in the form fields below:<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
     <ul id="errorList">
     <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('form')['errors'], 'error', false, 'errorName');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('errorName')->value => $_smarty_tpl->getVariable('error')->value) {
$foreach0DoElse = false;
?>
        <?php if (is_array($_smarty_tpl->getValue('error'))) {?>
           <li><?php echo $_smarty_tpl->getValue('error')['label'];?>
 <?php echo $_smarty_tpl->getValue('error')['message'];?>
</li>
        <?php } else { ?>
           <li><?php echo $_smarty_tpl->getValue('error');?>
</li>
        <?php }?>
     <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
     </ul>
   </div>
<?php }?>

<?php if ($_smarty_tpl->getValue('beginHookFormElements')) {?>
  <table class="form-layout-compressed">
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('beginHookFormElements'), 'hookFormElement', false, 'dontCare');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('dontCare')->value => $_smarty_tpl->getVariable('hookFormElement')->value) {
$foreach1DoElse = false;
?>
      <tr><td class="label nowrap"><?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('hookFormElement')]['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('hookFormElement')]['html'];?>
</td></tr>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </table>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
