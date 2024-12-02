<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:25
  from 'file:CRM/Contact/Page/View/Summary-tab.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd86dbdd2a5_37221975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d12751b812767ddd782cba3d906e779a63c5d61' => 
    array (
      0 => 'CRM/Contact/Page/View/Summary-tab.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Contact/Page/View/SummaryHook.tpl' => 3,
    'file:CRM/Contact/Page/Inline/ContactInfo.tpl' => 1,
    'file:CRM/Contact/Page/ContactImage.tpl' => 1,
    'file:CRM/Contact/Page/Inline/Basic.tpl' => 1,
    'file:CRM/Contact/Page/Inline/Email.tpl' => 1,
    'file:CRM/Contact/Page/Inline/Website.tpl' => 1,
    'file:CRM/Contact/Page/Inline/Phone.tpl' => 1,
    'file:CRM/Contact/Page/Inline/IM.tpl' => 1,
    'file:CRM/Contact/Page/Inline/OpenID.tpl' => 1,
    'file:CRM/Contact/Page/Inline/Address.tpl' => 2,
    'file:CRM/Contact/Page/Inline/CommunicationPreferences.tpl' => 1,
    'file:CRM/Contact/Page/Inline/Demographics.tpl' => 1,
    'file:CRM/Contact/Page/View/CustomDataView.tpl' => 2,
  ),
))) {
function content_674dd86dbdd2a5_37221975 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Page/View';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('hookContentPlacement') !== 3) {?>

  <?php if ($_smarty_tpl->getValue('hookContent') && $_smarty_tpl->getValue('hookContentPlacement') == 2) {?>
    <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/View/SummaryHook.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <?php }?>

  <div class="contactTopBar contact_panel">
    <div class="contactCardLeft">
      <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-basic-info-left"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <div class="crm-summary-contactinfo-block">
          <div class="crm-summary-block" id="contactinfo-block">
            <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/ContactInfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          </div>
        </div>
      <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-basic-info-left"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
    <div class="contactCardRight">
      <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-basic-info-right"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
      <?php if ($_smarty_tpl->getValue('imageURL')) {?>
        <div id="crm-contact-thumbnail">
          <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/ContactImage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>
      <?php }?>
        <div class="<?php if ($_smarty_tpl->getValue('imageURL')) {?> float-left<?php }?>">
          <div class="crm-summary-basic-block crm-summary-block">
            <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/Basic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          </div>
        </div>
      <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-basic-info-right"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
  </div>
  <div class="contact_details">
    <div class="contact_panel">
      <div class="contactCardLeft">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-details-left"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
          <div >
            <?php if ($_smarty_tpl->getValue('showEmail')) {?>
              <div class="crm-summary-email-block crm-summary-block" id="email-block">
                <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/Email.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('showWebsite')) {?>
              <div class="crm-summary-website-block crm-summary-block" id="website-block">
                <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/Website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              </div>
            <?php }?>
          </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-details-left"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
      </div><!-- #contactCardLeft -->

      <div class="contactCardRight">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-details-right"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
          <div>
            <?php if ($_smarty_tpl->getValue('showPhone')) {?>
              <div class="crm-summary-phone-block crm-summary-block" id="phone-block">
                <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/Phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('showIM')) {?>
              <div class="crm-summary-im-block crm-summary-block" id="im-block">
                <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/IM.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('showOpenID')) {?>
              <div class="crm-summary-openid-block crm-summary-block" id="openid-block">
                <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/OpenID.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              </div>
            <?php }?>
          </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-details-right"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
      </div><!-- #contactCardRight -->

      <div class="clear"></div>
    </div><!-- #contact_panel -->
    <?php if ($_smarty_tpl->getValue('showAddress')) {?>
      <div class="contact_panel">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-addresses"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_smarty_tpl->assign('locationIndex', 1, false, NULL);?>
        <?php if ($_smarty_tpl->getValue('address')) {?>
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('address'), 'add', false, 'locationIndex');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('locationIndex')->value => $_smarty_tpl->getVariable('add')->value) {
$foreach9DoElse = false;
?>
            <div class="<?php if ((1 & $_smarty_tpl->getValue('locationIndex'))) {?>contactCardLeft<?php } else { ?>contactCardRight<?php }?> crm-address_<?php echo $_smarty_tpl->getValue('locationIndex');?>
 crm-address-block crm-summary-block">
              <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/Address.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            </div>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          <?php $_smarty_tpl->assign('locationIndex', $_smarty_tpl->getValue('locationIndex')+1, false, NULL);?>
        <?php }?>
                  <?php if ($_smarty_tpl->getValue('permission') == 'edit') {?>
          <?php $_smarty_tpl->assign('add', 0, false, NULL);?>
          <div class="<?php if ((1 & $_smarty_tpl->getValue('locationIndex'))) {?>contactCardLeft<?php } else { ?>contactCardRight<?php }?> crm-address-block crm-summary-block">
            <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/Address.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          </div>
        <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-addresses"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
      </div> <!-- end of contact panel -->
    <?php }?>
    <div class="contact_panel">
      <?php if ($_smarty_tpl->getValue('showCommunicationPreferences')) {?>
        <div class="contactCardLeft">
          <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-comm-pref"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="crm-summary-comm-pref-block">
              <div class="crm-summary-block" id="communication-pref-block" >
                <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/CommunicationPreferences.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              </div>
            </div>
          <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-comm-pref"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div> <!-- contactCardLeft -->
      <?php }?>
      <?php if ($_smarty_tpl->getValue('contact_type') == 'Individual' && $_smarty_tpl->getValue('showDemographics')) {?>
        <div class="contactCardRight">
          <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-demographic"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="crm-summary-demographic-block">
              <div class="crm-summary-block" id="demographic-block">
                <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/Inline/Demographics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              </div>
            </div>
          <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"contact-demographic"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div> <!-- contactCardRight -->
      <?php }?>
      <div class="clear"></div>
      <div class="separator"></div>
    </div> <!-- contact panel -->
  </div><!--contact_details-->

  <?php if ($_smarty_tpl->getValue('showCustomData')) {?>
    <div id="customFields">
      <div class="contact_panel">
        <div class="contactCardLeft">
          <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/View/CustomDataView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('side'=>'1','skipTitle'=>false), (int) 0, $_smarty_current_dir);
?>
        </div><!--contactCardLeft-->
        <div class="contactCardRight">
          <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/View/CustomDataView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('side'=>'0','skipTitle'=>false), (int) 0, $_smarty_current_dir);
?>
        </div>

        <div class="clear"></div>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->getValue('hookContent') && $_smarty_tpl->getValue('hookContentPlacement') == 1) {?>
    <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/View/SummaryHook.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <?php }
} else { ?>
  <?php $_smarty_tpl->renderSubTemplate("file:CRM/Contact/Page/View/SummaryHook.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
