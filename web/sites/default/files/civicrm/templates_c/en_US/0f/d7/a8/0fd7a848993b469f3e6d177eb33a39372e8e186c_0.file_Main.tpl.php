<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:59:24
  from 'file:Civi/Angular/Page/Main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd95cb676e6_74702836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fd7a848993b469f3e6d177eb33a39372e8e186c' => 
    array (
      0 => 'Civi/Angular/Page/Main.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd95cb676e6_74702836 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/Civi/Angular/Page';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
 type="text/javascript">
  if (CRM.hasOwnProperty('angularRoute') && CRM.angularRoute) {
    location.hash = CRM.angularRoute;
  }
<?php echo '</script'; ?>
>

<crm-angular-js modules="crmApp">
  <div ng-view></div>
</crm-angular-js>


<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
