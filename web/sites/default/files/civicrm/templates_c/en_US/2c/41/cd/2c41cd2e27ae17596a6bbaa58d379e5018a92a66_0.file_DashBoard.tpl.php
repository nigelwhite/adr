<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:59:12
  from 'file:CRM/Contact/Page/DashBoard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd9500627d8_30554522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c41cd2e27ae17596a6bbaa58d379e5018a92a66' => 
    array (
      0 => 'CRM/Contact/Page/DashBoard.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Contact/Page/DashBoardDashlet.tpl' => 3,
  ),
))) {
function content_674dd9500627d8_30554522 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Page';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if (empty($_smarty_tpl->getValue('hookContent'))) {?>
    <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/DashBoardDashlet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else { ?>
    <?php if ($_smarty_tpl->getValue('hookContentPlacement') != 2 && $_smarty_tpl->getValue('hookContentPlacement') != 3) {?>
        <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/DashBoardDashlet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('hookContent'), 'content', false, 'title');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('title')->value => $_smarty_tpl->getVariable('content')->value) {
$foreach0DoElse = false;
?>
    <fieldset><legend><?php echo $_smarty_tpl->getValue('title');?>
</legend>
        <?php echo $_smarty_tpl->getValue('content');?>

    </fieldset>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->getValue('hookContentPlacement') == 2) {?>
        <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/DashBoardDashlet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
