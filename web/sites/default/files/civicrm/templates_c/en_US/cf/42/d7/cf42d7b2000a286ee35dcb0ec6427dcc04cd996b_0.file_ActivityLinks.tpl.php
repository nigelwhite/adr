<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:25
  from 'file:CRM/Activity/Form/ActivityLinks.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd86dbcae05_27433281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf42d7b2000a286ee35dcb0ec6427dcc04cd996b' => 
    array (
      0 => 'CRM/Activity/Form/ActivityLinks.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd86dbcae05_27433281 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Activity/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('as_select')) {?> <select name="other_activity" class="crm-form-select crm-select2 crm-action-menu fa-plus" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>New Activity<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>">
  <option value=""><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>New Activity<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></option>
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('activityTypes'), 'act');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('act')->value) {
$foreach6DoElse = false;
?>
  <option value="<?php echo $_smarty_tpl->getValue('act')['url'];?>
" data-icon="<?php echo $_smarty_tpl->getValue('act')['icon'];?>
"><?php echo $_smarty_tpl->getValue('act')['label'];?>
</option>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</select>

<?php echo '<script'; ?>
 type="text/javascript">
  CRM.$(function($) {
    $('[name=other_activity].crm-action-menu').change(function() {
      var
        $el = $(this),
        url = $el.val();
      if (url) {
        $el.select2('val', '');
        CRM.loadForm(url).on('crmFormSuccess', function() {
          CRM.refreshParent($el);
        });
      }
    });
  });
<?php echo '</script'; ?>
>

<?php } else { ?>
<ul>
  <li class="crm-activity-tab"><a href="#" data-tab="activity"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Record Activity:<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></li>
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('activityTypes'), 'act', false, 'k');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('k')->value => $_smarty_tpl->getVariable('act')->value) {
$foreach7DoElse = false;
?>
<li class="crm-activity-type_<?php echo $_smarty_tpl->getValue('k');?>
">
  <a href="<?php echo $_smarty_tpl->getValue('act')['url'];?>
" data-tab="activity">
    <i class="crm-i <?php echo $_smarty_tpl->getValue('act')['icon'];?>
" aria-hidden="true"></i> <?php echo $_smarty_tpl->getValue('act')['label'];?>

  </a>
</li>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->getValue('hookLinks')) {?>
   <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('hookLinks'), 'link');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('link')->value) {
$foreach8DoElse = false;
?>
    <li>
        <a href="<?php echo $_smarty_tpl->getValue('link')['url'];?>
" data-tab="activity"<?php if (!empty($_smarty_tpl->getValue('link')['title'])) {?> title="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('link')['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>
        <?php if (!empty($_smarty_tpl->getValue('link')['class'])) {?> class="<?php echo $_smarty_tpl->getValue('link')['class'];?>
"<?php }?>>
          <?php if ($_smarty_tpl->getValue('link')['img']) {?>
                <img src="<?php echo $_smarty_tpl->getValue('link')['img'];?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('link')['title'], ENT_QUOTES, 'UTF-8', true);?>
" />&nbsp;
          <?php }?>
          <?php echo $_smarty_tpl->getValue('link')['name'];?>

        </a>
    </li>
   <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?>

</ul>

<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
