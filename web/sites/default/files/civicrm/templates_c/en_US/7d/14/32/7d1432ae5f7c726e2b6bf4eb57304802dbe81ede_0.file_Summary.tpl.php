<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:25
  from 'file:CRM/Contact/Page/View/Summary.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd86dbb05b2_72553834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d1432ae5f7c726e2b6bf4eb57304802dbe81ede' => 
    array (
      0 => 'CRM/Contact/Page/View/Summary.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Contact/Form/Contact.tpl' => 1,
    'file:CRM/Contact/Page/Inline/ContactName.tpl' => 1,
    'file:CRM/Contact/Page/Inline/Actions.tpl' => 1,
  ),
))) {
function content_674dd86dbb05b2_72553834 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Page/View';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('action') == 2) {?>
  <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Form/Contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else { ?>

  <div class="crm-summary-contactname-block crm-inline-edit-container">
    <div class="crm-summary-block" id="contactname-block">
      <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/ContactName.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
  </div>

  <?php if (!$_smarty_tpl->getValue('summaryPrint')) {?>
    <div class="crm-actions-ribbon">
      <ul id="actions">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-actions-ribbon"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_smarty_tpl->assign('urlParams', "reset=1", false, NULL);?>
        <?php if (!empty($_smarty_tpl->getValue('searchKey'))) {?>
          <?php $_smarty_tpl->assign('urlParams', ($_smarty_tpl->getValue('urlParams')).("&key=".((string)$_smarty_tpl->getValue('searchKey'))), false, NULL);?>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('context')) {?>
          <?php $_smarty_tpl->assign('urlParams', ($_smarty_tpl->getValue('urlParams')).("&context=".((string)$_smarty_tpl->getValue('context'))), false, NULL);?>
        <?php }?>

                <?php if (!$_smarty_tpl->getValue('isDeleted')) {?>
          <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmPermission')) {
throw new \Smarty\Exception('block tag \'crmPermission\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmPermission')->handle(array('has'=>'access CiviCRM'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <li class="crm-contact-activity crm-summary-block">
              <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/Actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            </li>
          <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmPermission')->handle(array('has'=>'access CiviCRM'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                    <?php if ($_smarty_tpl->getValue('permission') == 'edit') {?>
            <li>
              <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmButton')) {
throw new \Smarty\Exception('block tag \'crmButton\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/contact/add','q'=>((string)$_smarty_tpl->getValue('urlParams'))."&action=update&cid=".((string)$_smarty_tpl->getValue('contactId')),'class'=>"edit"), null, $_smarty_tpl, $_block_repeat);
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
?>Edit<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
              <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/contact/add','q'=>((string)$_smarty_tpl->getValue('urlParams'))."&action=update&cid=".((string)$_smarty_tpl->getValue('contactId')),'class'=>"edit"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            </li>
          <?php }?>
        <?php }?>

                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmPermission')) {
throw new \Smarty\Exception('block tag \'crmPermission\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmPermission')->handle(array('has'=>'access deleted contacts'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
          <?php if ($_smarty_tpl->getValue('is_deleted')) {?>
            <li class="crm-contact-restore">
              <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmButton')) {
throw new \Smarty\Exception('block tag \'crmButton\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/contact/view/delete','q'=>"reset=1&cid=".((string)$_smarty_tpl->getValue('contactId'))."&restore=1",'class'=>"delete",'icon'=>"undo"), null, $_smarty_tpl, $_block_repeat);
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
?>Restore from Trash<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
              <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/contact/view/delete','q'=>"reset=1&cid=".((string)$_smarty_tpl->getValue('contactId'))."&restore=1",'class'=>"delete",'icon'=>"undo"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            </li>

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmPermission')) {
throw new \Smarty\Exception('block tag \'crmPermission\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmPermission')->handle(array('has'=>'delete contacts'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
              <li class="crm-contact-permanently-delete">
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmButton')) {
throw new \Smarty\Exception('block tag \'crmButton\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/contact/view/delete','q'=>"reset=1&delete=1&cid=".((string)$_smarty_tpl->getValue('contactId'))."&skip_undelete=1",'class'=>"delete",'icon'=>"trash"), null, $_smarty_tpl, $_block_repeat);
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
?>Delete Permanently<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/contact/view/delete','q'=>"reset=1&delete=1&cid=".((string)$_smarty_tpl->getValue('contactId'))."&skip_undelete=1",'class'=>"delete",'icon'=>"trash"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
              </li>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmPermission')->handle(array('has'=>'delete contacts'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
          <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmPermission')->handle(array('has'=>'access deleted contacts'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                <?php if ($_smarty_tpl->getValue('nextPrevError')) {?>
          <li class="crm-next-action">
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"id-next-prev-buttons"), $_smarty_tpl);?>
&nbsp;
          </li>
        <?php } else { ?>
          <?php if ($_smarty_tpl->getValue('nextContactID')) {?>
            <li class="crm-next-action">
              <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmButton')) {
throw new \Smarty\Exception('block tag \'crmButton\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/contact/view','q'=>((string)$_smarty_tpl->getValue('urlParams'))."&cid=".((string)$_smarty_tpl->getValue('nextContactID')),'class'=>"view",'title'=>$_smarty_tpl->getValue('nextContactName'),'icon'=>"chevron-right"), null, $_smarty_tpl, $_block_repeat);
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
?>Next<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
              <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/contact/view','q'=>((string)$_smarty_tpl->getValue('urlParams'))."&cid=".((string)$_smarty_tpl->getValue('nextContactID')),'class'=>"view",'title'=>$_smarty_tpl->getValue('nextContactName'),'icon'=>"chevron-right"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            </li>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('prevContactID')) {?>
            <li class="crm-previous-action">
              <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmButton')) {
throw new \Smarty\Exception('block tag \'crmButton\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/contact/view','q'=>((string)$_smarty_tpl->getValue('urlParams'))."&cid=".((string)$_smarty_tpl->getValue('prevContactID')),'class'=>"view",'title'=>$_smarty_tpl->getValue('prevContactName'),'icon'=>"chevron-left"), null, $_smarty_tpl, $_block_repeat);
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
?>Previous<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
              <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/contact/view','q'=>((string)$_smarty_tpl->getValue('urlParams'))."&cid=".((string)$_smarty_tpl->getValue('prevContactID')),'class'=>"view",'title'=>$_smarty_tpl->getValue('prevContactName'),'icon'=>"chevron-left"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            </li>
          <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('groupOrganizationUrl')) {?>
          <li class="crm-contact-associated-groups">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmButton')) {
throw new \Smarty\Exception('block tag \'crmButton\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('href'=>$_smarty_tpl->getValue('groupOrganizationUrl'),'class'=>"associated-groups",'icon'=>"cubes"), null, $_smarty_tpl, $_block_repeat);
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
?>Associated Multi-Org Group<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('href'=>$_smarty_tpl->getValue('groupOrganizationUrl'),'class'=>"associated-groups",'icon'=>"cubes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
          </li>
        <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-actions-ribbon"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
      </ul>
      <div class="clear"></div>
    </div><!-- .crm-actions-ribbon -->
  <?php }?>

  <div class="crm-block crm-content-block crm-contact-page crm-inline-edit-container">
    <div id="mainTabContainer">
      <ul class="crm-contact-tabs-list">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('allTabs'), 'tabValue');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tabValue')->value) {
$foreach2DoElse = false;
?>
          <li id="tab_<?php echo $_smarty_tpl->getValue('tabValue')['id'];?>
" class="crm-tab-button ui-corner-all<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('is_numeric')($_smarty_tpl->getValue('tabValue')['count'])) {?> crm-count-<?php echo $_smarty_tpl->getValue('tabValue')['count'];
}
if ($_smarty_tpl->getValue('tabValue')['class']) {?> <?php echo $_smarty_tpl->getValue('tabValue')['class'];
}?>">
            <a href="<?php if ($_smarty_tpl->getValue('tabValue')['template']) {?>#contact-<?php echo $_smarty_tpl->getValue('tabValue')['id'];
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('tabValue')['url'],'nodefaults');
}?>" title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('tabValue')['title'], ENT_QUOTES, 'UTF-8', true);?>
">
              <i class="<?php if (!empty($_smarty_tpl->getValue('tabValue')['icon'])) {
echo $_smarty_tpl->getValue('tabValue')['icon'];
} else { ?>crm-i fa-puzzle-piece<?php }?>" aria-hidden="true"></i>
              <span><?php echo $_smarty_tpl->getValue('tabValue')['title'];?>
</span>
              <?php if (empty($_smarty_tpl->getValue('tabValue')['hideCount'])) {?><em><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('is_numeric')($_smarty_tpl->getValue('tabValue')['count'])) {
echo $_smarty_tpl->getValue('tabValue')['count'];
}?></em><?php }?>
            </a>
          </li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </ul>

      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('allTabs'), 'tabValue');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tabValue')->value) {
$foreach3DoElse = false;
?>
        <?php if (!empty($_smarty_tpl->getValue('tabValue')['template'])) {?>
          <div id="contact-<?php echo $_smarty_tpl->getValue('tabValue')['id'];?>
">
            <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('tabValue')['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          </div>
        <?php }?>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
    <div class="clear"></div>
  </div>
<?php }?>


<?php echo '<script'; ?>
 type="text/javascript">
CRM.$(function($) {
  $('.crm-inline-edit-container').crmFormContactLock({
    ignoreLabel: "<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Ignore<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>",
    saveAnywayLabel: "<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Save Anyway<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>",
    reloadLabel: "<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Reload Page<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>"
  });
});
<?php echo '</script'; ?>
>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
