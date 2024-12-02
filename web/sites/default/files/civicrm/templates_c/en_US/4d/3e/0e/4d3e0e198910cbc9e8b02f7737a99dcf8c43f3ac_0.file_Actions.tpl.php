<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:25
  from 'file:CRM/Contact/Page/Inline/Actions.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd86dbc16b7_67290872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d3e0e198910cbc9e8b02f7737a99dcf8c43f3ac' => 
    array (
      0 => 'CRM/Contact/Page/Inline/Actions.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Activity/Form/ActivityLinks.tpl' => 1,
  ),
))) {
function content_674dd86dbc16b7_67290872 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Page/Inline';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<div id="crm-contact-actions-wrapper" data-edit-params='{"cid": "<?php echo $_smarty_tpl->getValue('contactId');?>
", "class_name": "CRM_Contact_Page_Inline_Actions"}'>
  <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmButton')) {
throw new \Smarty\Exception('block tag \'crmButton\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('id'=>"crm-contact-actions-link",'href'=>"#",'icon'=>"bars"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Actions<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
  <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('id'=>"crm-contact-actions-link",'href'=>"#",'icon'=>"bars"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-page-inline-actions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
      <div class="ac_results" id="crm-contact-actions-list">
        <div class="crm-contact-actions-list-inner">
          <div class="crm-contact_activities-list">
          <?php $_smarty_tpl->renderSubTemplate("file:CRM/Activity/Form/ActivityLinks.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('as_select'=>false), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div class="crm-contact_print-list">
            <ul class="contact-print">
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('actionsMenuList')['otherActions'], 'row');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach4DoElse = false;
?>
                <?php if (!empty($_smarty_tpl->getValue('row')['href']) || !empty($_smarty_tpl->getValue('row')['tab'])) {?>
                <li class="crm-contact-<?php echo $_smarty_tpl->getValue('row')['ref'];?>
">
                  <a href="<?php if (!empty($_smarty_tpl->getValue('row')['href'])) {
echo $_smarty_tpl->getValue('row')['href'];
if ($_smarty_tpl->getSmarty()->getModifierCallback('strstr')($_smarty_tpl->getValue('row')['href'],'?')) {?>&cid=<?php echo $_smarty_tpl->getValue('contactId');
}
} else { ?>#<?php }?>" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('row')['title'], ENT_QUOTES, 'UTF-8', true);?>
" data-tab="<?php echo $_smarty_tpl->getValue('row')['tab'];?>
" <?php if (!empty($_smarty_tpl->getValue('row')['class'])) {?>class="<?php echo $_smarty_tpl->getValue('row')['class'];?>
"<?php }?>>
                    <span><i <?php if (!empty($_smarty_tpl->getValue('row')['icon'])) {?>class="<?php echo $_smarty_tpl->getValue('row')['icon'];?>
"<?php }?>></i> <?php echo $_smarty_tpl->getValue('row')['title'];?>
</span>
                  </a>
                </li>
                <?php }?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </ul>
          </div>
          <div class="crm-contact_actions-list">
          <ul class="contact-actions">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('actionsMenuList')['moreActions'], 'row');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach5DoElse = false;
?>
            <?php if (!empty($_smarty_tpl->getValue('row')['href']) || !empty($_smarty_tpl->getValue('row')['tab'])) {?>
            <li class="crm-action-<?php echo $_smarty_tpl->getValue('row')['ref'];?>
">
              <a href="<?php if (!empty($_smarty_tpl->getValue('row')['href'])) {
echo $_smarty_tpl->getValue('row')['href'];
if ($_smarty_tpl->getSmarty()->getModifierCallback('strstr')($_smarty_tpl->getValue('row')['href'],'?')) {?>&cid=<?php echo $_smarty_tpl->getValue('contactId');
}
} else { ?>#<?php }?>" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('row')['title'], ENT_QUOTES, 'UTF-8', true);?>
" data-tab="<?php echo $_smarty_tpl->getValue('row')['tab'];?>
" <?php if (!empty($_smarty_tpl->getValue('row')['class'])) {?>class="<?php echo $_smarty_tpl->getValue('row')['class'];?>
"<?php }?>><?php echo $_smarty_tpl->getValue('row')['title'];?>
</a>
            </li>
            <?php }?>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
                </div>


          <div class="clear"></div>
        </div>
      </div>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-page-inline-actions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
  </div>


<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
