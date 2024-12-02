<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:42:28
  from 'file:CRM/Admin/Page/Admin.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd5649a05d9_46121028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ce1363baa15fec62d9d93cd70e48abb242d33cf' => 
    array (
      0 => 'CRM/Admin/Page/Admin.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd5649a05d9_46121028 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Admin/Page';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="crm-content-block">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('adminPanel'), 'group', false, 'groupName');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('groupName')->value => $_smarty_tpl->getVariable('group')->value) {
$foreach2DoElse = false;
?>
<div id="admin-section-<?php echo $_smarty_tpl->getValue('groupName');?>
">
  <h3><?php echo $_smarty_tpl->getValue('group')['title'];?>
</h3>
  <div class="admin-section-items">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('group')['fields'], 'panelItem', false, 'panelName');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('panelName')->value => $_smarty_tpl->getVariable('panelItem')->value) {
$foreach3DoElse = false;
?>
    <dl>
      <dt><a href="<?php echo $_smarty_tpl->getValue('panelItem')['url'];?>
"<?php if ($_smarty_tpl->getValue('panelItem')['extra']) {?> <?php echo $_smarty_tpl->getValue('panelItem')['extra'];
}?> id="id_<?php echo $_smarty_tpl->getValue('panelItem')['id'];?>
"><?php echo $_smarty_tpl->getValue('panelItem')['title'];?>
</a></dt>
      <dd><?php echo $_smarty_tpl->getValue('panelItem')['desc'];?>
</dd>
    </dl>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </div>
</div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
