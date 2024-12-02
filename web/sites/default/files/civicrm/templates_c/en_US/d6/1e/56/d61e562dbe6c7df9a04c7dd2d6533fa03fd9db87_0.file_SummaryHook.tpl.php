<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:25
  from 'file:CRM/Contact/Page/View/SummaryHook.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd86dbe5253_39244161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd61e562dbe6c7df9a04c7dd2d6533fa03fd9db87' => 
    array (
      0 => 'CRM/Contact/Page/View/SummaryHook.tpl',
      1 => 1732538360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd86dbe5253_39244161 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/web/sites/default/files/civicrm/ext/org.civicrm.contactlayout/templates/CRM/Contact/Page/View';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('layoutBlocks'), 'row', false, 'rowNum');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('rowNum')->value => $_smarty_tpl->getVariable('row')->value) {
$foreach10DoElse = false;
?>
  <div class="contact_panel crm-contact-summary-layout-row crm-contact-summary-layout-row-<?php echo $_smarty_tpl->getValue('rowNum')+1;?>
 crm-contact-summary-row-<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('row'));?>
-col">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('row'), 'column', false, 'colNum');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('colNum')->value => $_smarty_tpl->getVariable('column')->value) {
$foreach11DoElse = false;
?>
      <div class="crm-contact-summary-layout-col crm-contact-summary-layout-col-<?php echo $_smarty_tpl->getValue('colNum')+1;?>
">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('column'), 'block');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('block')->value) {
$foreach12DoElse = false;
?>
                    <?php if (empty($_smarty_tpl->getValue('block')['custom_group_id']) || !empty($_smarty_tpl->getValue('viewCustomData')[$_smarty_tpl->getValue('block')['custom_group_id']])) {?>
            <div class="<?php if (!empty($_smarty_tpl->getValue('block')['collapsible'])) {?>crm-collapsible<?php if (!empty($_smarty_tpl->getValue('block')['collapsed'])) {?> collapsed<?php }
}?>">
              <?php if ((!empty($_smarty_tpl->getValue('block')['collapsible']) || !empty($_smarty_tpl->getValue('block')['showTitle']))) {?>
                <div class="collapsible-title">
                  <?php echo $_smarty_tpl->getValue('block')['title'];?>

                </div>
              <?php }?>
              <div class="crm-summary-block">
                <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('block')['tpl_file'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              </div>
            </div>
          <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
