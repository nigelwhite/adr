<?php
/* Smarty version 5.3.1, created on 2024-11-27 17:43:49
  from 'file:CRM/common/notifications.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_67475a550658a1_03398641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c8ecf1f5abce9d755a1407939042c49bd3441d0' => 
    array (
      0 => 'CRM/common/notifications.tpl',
      1 => 1730963841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67475a550658a1_03398641 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/common';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div id="crm-notification-container" role="alert" aria-live="assertive" aria-atomic="true" style="display:none">
  <div id="crm-notification-alert" class="#{type}">
    <div class="icon ui-notify-close" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>close<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>"> </div>
    <a class="ui-notify-cross ui-notify-close" href="#" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>close<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>">x</a>
    <h1>#{title}</h1>
    <div class="notify-content">#{text}</div>
  </div>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
