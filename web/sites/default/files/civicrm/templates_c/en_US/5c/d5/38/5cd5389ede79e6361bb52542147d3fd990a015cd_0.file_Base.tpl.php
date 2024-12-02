<?php
/* Smarty version 5.3.1, created on 2024-12-02 16:18:25
  from 'file:CRM/Contactlayout/Page/Base.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dddd196fb54_66241829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cd5389ede79e6361bb52542147d3fd990a015cd' => 
    array (
      0 => 'CRM/Contactlayout/Page/Base.tpl',
      1 => 1732538360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dddd196fb54_66241829 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/web/sites/default/files/civicrm/ext/org.civicrm.contactlayout/templates/CRM/Contactlayout/Page';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div id="bootstrap-theme" ng-app="contactlayout">

  <contact-layout-editor></contact-layout-editor>

  <div style="display:none;">
    <input id="cse-icon-picker" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Choose Icon<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>"/>
  </div>
</div>

  <style type="text/css">
    #cse-block-container .cse-layout-col .block-multiple:not(.collapsed):after {
      content: '+ <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Multiple<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>';
    }
  </style>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
