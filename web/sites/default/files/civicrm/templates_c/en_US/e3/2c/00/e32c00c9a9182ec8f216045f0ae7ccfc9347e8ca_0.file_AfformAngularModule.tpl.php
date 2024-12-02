<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:45:54
  from 'file:afform/AfformAngularModule.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd632946530_07578125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e32c00c9a9182ec8f216045f0ae7ccfc9347e8ca' => 
    array (
      0 => 'afform/AfformAngularModule.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd632946530_07578125 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/ext/afform/core/templates/afform';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
(function(angular, $, _) {
  angular.module('<?php echo $_smarty_tpl->getValue('afform')['camel'];?>
', CRM.angRequires('<?php echo $_smarty_tpl->getValue('afform')['camel'];?>
'));
  angular.module('<?php echo $_smarty_tpl->getValue('afform')['camel'];?>
').directive('<?php echo $_smarty_tpl->getValue('afform')['camel'];?>
', function(afCoreDirective) {
    return afCoreDirective(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('json')($_smarty_tpl->getValue('afform')['camel']);?>
, <?php echo json_encode($_smarty_tpl->getValue('afform')['meta']);?>
, {
      templateUrl: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('json')($_smarty_tpl->getValue('afform')['templateUrl']);?>

    });
  });
})(angular, CRM.$, CRM._);

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
