<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:55
  from 'file:CRM/Custom/Form/Edit/CustomField.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd88b61ad88_24339463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b06447b334c27f4ad4da7fe71781dcb5ed5e02bc' => 
    array (
      0 => 'CRM/Custom/Form/Edit/CustomField.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Custom/Form/ContactReference.tpl' => 1,
  ),
))) {
function content_674dd88b61ad88_24339463 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Custom/Form/Edit';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('element')['help_pre']) {?>
  <tr class="custom_field-help-pre-row <?php echo $_smarty_tpl->getValue('element')['element_name'];?>
-row-help-pre">
    <td>&nbsp;</td>
    <td class="html-adjust description"><?php echo $_smarty_tpl->getValue('element')['help_pre'];?>
</td>
  </tr>
<?php }
if ($_smarty_tpl->getValue('element')['html_type'] === 'Hidden') {?>
    <tr class="custom_field-row <?php echo $_smarty_tpl->getValue('element')['element_name'];?>
-row hiddenElement">
    <td><?php echo $_smarty_tpl->getValue('formElement')['html'];?>
</td>
  </tr>
<?php } elseif ($_smarty_tpl->getValue('element')['options_per_line']) {?>
  <tr class="custom_field-row <?php echo $_smarty_tpl->getValue('element')['element_name'];?>
-row">
    <td class="label"><?php echo $_smarty_tpl->getValue('formElement')['label'];
if ($_smarty_tpl->getValue('element')['help_post']) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>$_smarty_tpl->getValue('element')['id'],'file'=>"CRM/Custom/Form/CustomField.hlp",'title'=>$_smarty_tpl->getValue('element')['label']), $_smarty_tpl);
}?></td>
    <td class="html-adjust">

      <div class="crm-multiple-checkbox-radio-options crm-options-per-line" style="--crm-opts-per-line:<?php echo $_smarty_tpl->getValue('element')['options_per_line'];?>
;">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('formElement'), 'item', false, 'key', 'outer', array (
));
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach2DoElse = false;
?>
          <?php if (is_array($_smarty_tpl->getValue('item')) && $_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('html',$_smarty_tpl->getValue('item'))) {?>
            <div class="crm-option-label-pair" ><?php echo $_smarty_tpl->getValue('formElement')[$_smarty_tpl->getValue('key')]['html'];?>
</div>
          <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </div>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strstr')($_smarty_tpl->getValue('formElement')['html'],"crm-option-edit-link")) {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('regex_replace')($_smarty_tpl->getValue('formElement')['html'],"@^.*(<a href=.*? class=.crm-option-edit-link.*?</a>)"."$"."@","$"."1");?>

      <?php }?>

    </td>
  </tr>
<?php } else { ?>
  <tr class="custom_field-row <?php echo $_smarty_tpl->getValue('element')['element_name'];?>
-row">
    <td class="label"><?php echo $_smarty_tpl->getValue('formElement')['label'];?>

      <?php if ($_smarty_tpl->getValue('element')['help_post']) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>$_smarty_tpl->getValue('element')['id'],'file'=>"CRM/Custom/Form/CustomField.hlp",'title'=>$_smarty_tpl->getValue('element')['label']), $_smarty_tpl);
}?>
    </td>
    <td class="html-adjust">
      <?php echo $_smarty_tpl->getValue('formElement')['html'];?>
&nbsp;
      <?php if ($_smarty_tpl->getValue('element')['data_type'] == 'File') {?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('element_value',$_smarty_tpl->getValue('element')) && $_smarty_tpl->getValue('element')['element_value']['data']) {?>
          <div class="crm-attachment-wrapper crm-entity" id="file_<?php echo $_smarty_tpl->getValue('element')['element_name'];?>
">
            <span class="html-adjust"><br/>&nbsp;<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Attached File<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>: &nbsp;
              <?php if ($_smarty_tpl->getValue('element')['element_value']['displayURL']) {?>
                <a href="<?php echo $_smarty_tpl->getValue('element')['element_value']['displayURL'];?>
" class='crm-image-popup crm-attachment'>
                  <img src="<?php echo $_smarty_tpl->getValue('element')['element_value']['displayURL'];?>
"
                       height="<?php echo $_smarty_tpl->getValue('element')['element_value']['imageThumbHeight'];?>
"
                       width="<?php echo $_smarty_tpl->getValue('element')['element_value']['imageThumbWidth'];?>
">
                </a>
              <?php } else { ?>
                <a class="crm-attachment" href="<?php echo $_smarty_tpl->getValue('element')['element_value']['fileURL'];?>
"><?php echo $_smarty_tpl->getValue('element')['element_value']['fileName'];?>
</a>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('element')['element_value']['deleteURL']) {?>
                <a href="#" class="crm-hover-button delete-attachment"
                   data-filename="<?php echo $_smarty_tpl->getValue('element')['element_value']['fileName'];?>
"
                   data-args="<?php echo $_smarty_tpl->getValue('element')['element_value']['deleteURLArgs'];?>
" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Delete File<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>">
                  <span class="icon delete-icon"></span>
                </a>
              <?php }?>
            </span>
          </div>
        <?php }?>
      <?php } elseif ($_smarty_tpl->getValue('element')['html_type'] == 'Autocomplete-Select') {?>
        <?php if ($_smarty_tpl->getValue('element')['data_type'] == 'ContactReference') {?>
          <?php $_smarty_tpl->assign('element_name', $_smarty_tpl->getValue('element')['element_name'], false, NULL);?>
          <?php $_smarty_tpl->renderSubTemplate("file:CRM/Custom/Form/ContactReference.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
      <?php }?>
    </td>
  </tr>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
