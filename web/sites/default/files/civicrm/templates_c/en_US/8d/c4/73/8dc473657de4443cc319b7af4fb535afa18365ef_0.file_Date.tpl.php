<?php
/* Smarty version 5.3.1, created on 2024-12-02 16:16:26
  from 'file:CRM/Admin/Form/Setting/Date.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674ddd5a672598_50264121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dc473657de4443cc319b7af4fb535afa18365ef' => 
    array (
      0 => 'CRM/Admin/Form/Setting/Date.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/common/formButtons.tpl' => 1,
  ),
))) {
function content_674ddd5a672598_50264121 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Admin/Form/Setting';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="help">
  <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', 'crmURL', null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>'civicrm/admin/setting/preferences/date','q'=>'action=reset=1'), $_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('crmURL')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Use this screen to configure default formats for date display and date input fields throughout your site. Settings use standard POSIX specifiers. New installations are preconfigured with standard United States formats. You can override this default setting and define the range of allowed dates for specific field types at <a href="%1">Administer > Customize Data and Screens > Date Preferences</a><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('crmURL')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?> <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'date-format'), $_smarty_tpl);?>

</div>
<div class="crm-block crm-form-block crm-date-form-block">
<fieldset><legend><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Date Display<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></legend>
   <table class="form-layout-compressed">
       <tr class="crm-date-form-block-dateformatDatetime">
          <td class="label"><?php echo $_smarty_tpl->getValue('form')['dateformatDatetime']['label'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('form')['dateformatDatetime']['html'];?>
</td>
       </tr>
       <tr class="crm-date-form-block-dateformatFull">
          <td class="label"><?php echo $_smarty_tpl->getValue('form')['dateformatFull']['label'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('form')['dateformatFull']['html'];?>
</td>
       </tr>
       <tr class="crm-date-form-block-dateformatPartial">
          <td class="label"><?php echo $_smarty_tpl->getValue('form')['dateformatPartial']['label'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('form')['dateformatPartial']['html'];?>
</td>
       </tr>
       <tr class="crm-date-form-block-dateformatYear">
          <td class="label"><?php echo $_smarty_tpl->getValue('form')['dateformatYear']['label'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('form')['dateformatYear']['html'];?>
</td>
       </tr>
       <tr class="crm-date-form-block-dateformatTime">
          <td class="label"><?php echo $_smarty_tpl->getValue('form')['dateformatTime']['label'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('form')['dateformatTime']['html'];?>
</td>
       </tr>
       <tr class="crm-date-form-block-dateformatTime">
          <td class="label"><?php echo $_smarty_tpl->getValue('form')['dateformatFinancialBatch']['label'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('form')['dateformatFinancialBatch']['html'];?>
</td>
       </tr>
       <tr class="crm-date-form-block-dateformatTime">
          <td class="label"><?php echo $_smarty_tpl->getValue('form')['dateformatshortdate']['label'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('form')['dateformatshortdate']['html'];?>
</td>
       </tr>
     </table>
</fieldset>
<fieldset><legend><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Date Input Fields<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></legend>
   <table class="form-layout-compressed">
       <tr class="crm-date-form-block-dateInputFormat">
          <td class="label"><?php echo $_smarty_tpl->getValue('form')['dateInputFormat']['label'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('form')['dateInputFormat']['html'];?>
</td>
       </tr>
       <tr class="crm-date-form-block-timeInputFormat">
          <td class="label"><?php echo $_smarty_tpl->getValue('form')['timeInputFormat']['label'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('form')['timeInputFormat']['html'];?>
</td>
       </tr>
   </table>
</fieldset>
<fieldset><legend><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Calendar<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></legend>
   <table class="form-layout-compressed">
       <tr class="crm-date-form-block-weekBegins">
         <td class="label"><?php echo $_smarty_tpl->getValue('form')['weekBegins']['label'];?>
</td>
         <td><?php echo $_smarty_tpl->getValue('form')['weekBegins']['html'];?>
</td>
       </tr>
       <tr class="crm-date-form-block-fiscalYearStart">
          <td class="label"><?php echo $_smarty_tpl->getValue('form')['fiscalYearStart']['label'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('form')['fiscalYearStart']['html'];?>
</td>
       </tr>
   </table>
</fieldset>
    <div class="crm-submit-buttons"><?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"bottom"), (int) 0, $_smarty_current_dir);
?></div>
<div class="spacer"></div>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
