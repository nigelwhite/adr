<?php
/* Smarty version 5.3.1, created on 2024-12-02 16:15:21
  from 'file:CRM/Admin/Form/Setting/Localization.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674ddd192e4215_97881879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41e5d54392e6f831feacb751f7743997baeed4ea' => 
    array (
      0 => 'CRM/Admin/Form/Setting/Localization.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Admin/Form/Setting/SettingField.tpl' => 1,
    'file:CRM/common/formButtons.tpl' => 1,
  ),
))) {
function content_674ddd192e4215_97881879 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Admin/Form/Setting';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="help">
  <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Configure CiviCRM for your country and language.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
  <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('docURL')->handle(array('page'=>"i18n Administrator's Guide: Using CiviCRM in your own language",'resource'=>"wiki"), $_smarty_tpl);?>

</div>
<div class="crm-block crm-form-block crm-localization-form-block">
    <h3><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Language and Currency<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></h3>
        <table class="form-layout-compressed">
            <tr class="crm-localization-form-block-lcMessages">
                <td class="label"><?php echo $_smarty_tpl->getValue('form')['lcMessages']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('form')['lcMessages']['html'];?>
</td>
            </tr>
           <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('languageLimit',$_smarty_tpl->getValue('form'))) {?>
             <tr class="crm-localization-form-block-languageLimit">
                 <td class="label"><?php echo $_smarty_tpl->getValue('form')['languageLimit']['label'];?>
</td>
                 <td><?php echo $_smarty_tpl->getValue('form')['languageLimit']['html'];?>
<br />
                 <span class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Languages available to users of this installation.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span></td>
             </tr>
             <tr class="crm-localization-form-block-addLanguage">
                 <td class="label"><?php echo $_smarty_tpl->getValue('form')['addLanguage']['label'];?>
</td>
                 <td><?php echo $_smarty_tpl->getValue('form')['addLanguage']['html'];?>
<br />
                 <span class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Add a new language to this installation.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span></td>
             </tr>
          <?php }?>
            <tr class="crm-localization-form-block-inheritLocale">
              <td class="label"><?php echo $_smarty_tpl->getValue('form')['inheritLocale']['label'];?>
</td>
              <td><?php echo $_smarty_tpl->getValue('form')['inheritLocale']['html'];?>
<br />
                <span class="description"><?php echo $_smarty_tpl->getValue('settings_fields')['inheritLocale']['description'];?>
</span>
              </td>
            </tr>
                    <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('languageLimit',$_smarty_tpl->getValue('form'))) {?>
            <tr class="crm-localization-form-block-uiLanguages">
                <td class="label"><?php echo $_smarty_tpl->getValue('form')['uiLanguages']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('form')['uiLanguages']['html'];?>
</td>
            </tr>
          <?php }?>
          <tr class="crm-localization-form-contact_default_language">
            <td class="label"><?php echo $_smarty_tpl->getValue('form')['contact_default_language']['label'];?>
</td>
            <td><?php echo $_smarty_tpl->getValue('form')['contact_default_language']['html'];?>
<br />
              <span class="description"><?php echo $_smarty_tpl->getValue('settings_fields')['contact_default_language']['description'];?>
</span>
            </td>
          </tr>
          <tr class="crm-localization-form-partial_locales">
            <td class="label"><?php echo $_smarty_tpl->getValue('form')['partial_locales']['label'];?>
</td>
            <td><?php echo $_smarty_tpl->getValue('form')['partial_locales']['html'];?>
<br />
              <span class="description"><?php echo $_smarty_tpl->getValue('settings_fields')['partial_locales']['description'];?>
</span>
            </td>
          </tr>
          <tr class="crm-localization-form-block-defaultCurrency">
            <td class="label"><?php echo $_smarty_tpl->getValue('form')['defaultCurrency']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'defaultCurrency','title'=>$_smarty_tpl->getValue('form')['defaultCurrency']['label']), $_smarty_tpl);?>
</td>
            <td><?php echo $_smarty_tpl->getValue('form')['defaultCurrency']['html'];?>
</td>
          </tr>
          <tr class="crm-localization-form-block-format_locale">
            <td class="label"><?php echo $_smarty_tpl->getValue('form')['format_locale']['label'];?>
</td>
            <td><?php echo $_smarty_tpl->getValue('form')['format_locale']['html'];?>
<br />
              <span class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Locale to use when formatting money (and in future dates). This replaces thousandsSeparator & decimalSeparator settings.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span></td>
          </tr>
            <tr class="crm-localization-form-block-monetaryThousandSeparator">
                <td class="label"><?php echo $_smarty_tpl->getValue('form')['monetaryThousandSeparator']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('form')['monetaryThousandSeparator']['html'];?>
</td>
            </tr>
            <tr class="crm-localization-form-block-monetaryDecimalPoint">
                <td class="label"><?php echo $_smarty_tpl->getValue('form')['monetaryDecimalPoint']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('form')['monetaryDecimalPoint']['html'];?>
</td>
            </tr>
            <tr class="crm-localization-form-block-currencyLimit">
                <td class="label"><?php echo $_smarty_tpl->getValue('form')['currencyLimit']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('form')['currencyLimit']['html'],'nodefaults');?>
</td>
            </tr>
            <tr class="crm-localization-form-block-moneyformat">
                <td class="label"><?php echo $_smarty_tpl->getValue('form')['moneyformat']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'moneyformat','title'=>$_smarty_tpl->getValue('form')['moneyformat']['label']), $_smarty_tpl);?>
</td>
                <td><?php echo $_smarty_tpl->getValue('form')['moneyformat']['html'];?>
</td>
            </tr>
            <tr class="crm-localization-form-block-customTranslateFunction">
                <td class="label"><?php echo $_smarty_tpl->getValue('form')['customTranslateFunction']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'customTranslateFunction','title'=>$_smarty_tpl->getValue('form')['customTranslateFunction']['label']), $_smarty_tpl);?>
</td>
                <td><?php echo $_smarty_tpl->getValue('form')['customTranslateFunction']['html'];?>
</td>
            </tr>
            <tr class="crm-localization-form-block-legacyEncoding">
                <td class="label"><?php echo $_smarty_tpl->getValue('form')['legacyEncoding']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'legacyEncoding','title'=>$_smarty_tpl->getValue('form')['legacyEncoding']['label']), $_smarty_tpl);?>
</td>
                <td><?php echo $_smarty_tpl->getValue('form')['legacyEncoding']['html'];?>
</td>
            </tr>
            <tr class="crm-localization-form-block-fieldSeparator">
                <td class="label"><?php echo $_smarty_tpl->getValue('form')['fieldSeparator']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'fieldSeparator','title'=>$_smarty_tpl->getValue('form')['fieldSeparator']['label']), $_smarty_tpl);?>
</td>
                <td><?php echo $_smarty_tpl->getValue('form')['fieldSeparator']['html'];?>
</td>
            </tr>
        </table>
    <h3><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Contact Address Fields - Selection Values<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></h3>
        <table class="form-layout-compressed">
            <?php $_smarty_tpl->renderSubTemplate('file:CRM/Admin/Form/Setting/SettingField.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting_name'=>'defaultContactCountry','fieldSpec'=>$_smarty_tpl->getValue('settings_fields')['defaultContactCountry']), (int) 0, $_smarty_current_dir);
?>
            <tr class="crm-localization-form-block-pinnedContactCountries">
                <td class="label"><?php echo $_smarty_tpl->getValue('form')['pinnedContactCountries']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'pinnedContactCountries','title'=>$_smarty_tpl->getValue('form')['pinnedContactCountries']['label']), $_smarty_tpl);?>
</td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('form')['pinnedContactCountries']['html'],'nodefaults');?>
</td>
            </tr>
           <tr class="crm-localization-form-block-defaultContactStateProvince">
                <td class="label"><?php echo $_smarty_tpl->getValue('form')['defaultContactStateProvince']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'defaultContactCountry','title'=>$_smarty_tpl->getValue('form')['defaultContactStateProvince']['label']), $_smarty_tpl);?>
</td>
                <td><?php echo $_smarty_tpl->getValue('form')['defaultContactStateProvince']['html'];?>
</td>
            </tr>
            <tr class="crm-localization-form-block-countryLimit">
                <td class="label"><?php echo $_smarty_tpl->getValue('form')['countryLimit']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'countryLimit','title'=>$_smarty_tpl->getValue('form')['countryLimit']['label']), $_smarty_tpl);?>
</td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('form')['countryLimit']['html'],'nodefaults');?>
</td>
            </tr>
            <tr class="crm-localization-form-block-provinceLimit">
                <td class="label"><?php echo $_smarty_tpl->getValue('form')['provinceLimit']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'provinceLimit','title'=>$_smarty_tpl->getValue('form')['provinceLimit']['label']), $_smarty_tpl);?>
</td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('form')['provinceLimit']['html'],'nodefaults');?>
</td>
            </tr>
        </table>
    <h3><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Multiple Languages Support<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></h3>
      <table class="form-layout-compressed">
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('makeSinglelingual',$_smarty_tpl->getValue('form'))) {?>
          <tr class="crm-localization-form-block-makeSinglelingual_description">
              <td></td>
              <td><span class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>"http://documentation.civicrm.org"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>This is a multilingual installation. It contains certain schema differences compared to regular installations of CiviCRM. Please <a href="%1">refer to the documentation</a> for details.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>"http://documentation.civicrm.org"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span></td>
          </tr>
          <tr class="crm-localization-form-block-makeSinglelingual">
              <td class="label"><?php echo $_smarty_tpl->getValue('form')['makeSinglelingual']['label'];?>
</td>
              <td><?php echo $_smarty_tpl->getValue('form')['makeSinglelingual']['html'];?>
<br />
              <span class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Check this box and click 'Save' to switch this installation from multi-language to single-language.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span><br /><br />
              <span class="description font-red"><?php echo $_smarty_tpl->getValue('warning');?>
</span></td>
          </tr>
        <?php } elseif ($_smarty_tpl->getValue('form')['makeMultilingual']) {?>
          <tr class="crm-localization-form-block-makeMultilingual">
              <td class="label"><?php echo $_smarty_tpl->getValue('form')['makeMultilingual']['label'];?>
</td>
              <td><?php echo $_smarty_tpl->getValue('form')['makeMultilingual']['html'];?>
<br />
              <span class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Check this box and click 'Save' to switch this installation from single- to multi-language, then add further languages.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span><br /><br />
              <span class="description font-red"><?php echo $_smarty_tpl->getValue('warning');?>
</span></td>
        <?php } else { ?>
          <tr class="crm-localization-form-block-description">
              <td>
              <span class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>In order to use this functionality, the installation's database user must have privileges to create triggers and views (if binary logging is enabled – this means the SUPER privilege). This install does not have the required privilege(s) enabled.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>(Multilingual support currently cannot be enabled on installations with enabled logging.)<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span><br /><br />
              <span class="description font-red"><?php echo $_smarty_tpl->getValue('warning');?>
</span></td>
          </tr>
        <?php }?>
      </table>
    <div class="crm-submit-buttons">
        <?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"bottom"), (int) 0, $_smarty_current_dir);
?>
    </div>
<div class="spacer"></div>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
