<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:46
  from 'file:CRM/Contact/Page/Inline/BlockCustomData.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd882238351_79732650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76bd558edf625a45ef83d3c279a67c90d939231e' => 
    array (
      0 => 'CRM/Contact/Page/Inline/BlockCustomData.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Contact/Page/Inline/CustomDataFieldInstance.tpl' => 1,
  ),
))) {
function content_674dd882238351_79732650 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Page/Inline';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('customGroups'), 'customGroup', false, 'customGroupID');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('customGroupID')->value => $_smarty_tpl->getVariable('customGroup')->value) {
$foreach0DoElse = false;
?>   <?php if ((!empty($_smarty_tpl->getValue('customGroup')['fields']))) {?>
    <details id="<?php echo $_smarty_tpl->getValue('entity');?>
_custom_<?php echo $_smarty_tpl->getValue('customGroupID');?>
_<?php echo $_smarty_tpl->getValue('identifier');?>
" class="crm-<?php echo $_smarty_tpl->getValue('entity');?>
-custom-<?php echo $_smarty_tpl->getValue('customGroupID');?>
-<?php echo $_smarty_tpl->getValue('identifier');?>
-accordion crm-accordion-light" <?php if ($_smarty_tpl->getValue('customGroup')['collapse_display']) {
} else { ?>open<?php }?>>
      <summary class="collapsible-title">
        <?php echo $_smarty_tpl->getValue('customGroup')['title'];?>

      </summary>
      <div class="crm-summary-block">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('customGroup')['fields'], 'customField');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('customField')->value) {
$foreach1DoElse = false;
?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('customField'), 'instance');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('instance')->value) {
$foreach2DoElse = false;
?>
            <div class="crm-summary-row">
            <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/CustomDataFieldInstance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('instance'=>$_smarty_tpl->getValue('instance')), (int) 0, $_smarty_current_dir);
?>
            </div>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </div>
    </details>
  <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> <!-- end custom data -->
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
