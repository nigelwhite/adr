<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:57:15
  from 'file:CRM/Contact/Form/Task.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd8dbe7f418_55349089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f207deb817abc0bae270d7ad4fec0ffaefcb0ea6' => 
    array (
      0 => 'CRM/Contact/Form/Task.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd8dbe7f418_55349089 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('totalSelectedContacts')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Number of selected contacts: %1<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('totalSelectedContacts')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php if ($_smarty_tpl->getValue('isSelectedContacts')) {?>
<div id="popupContainer">
  <div class="crm-block crm-form-block crm-search-form-block">
    <table id="selectedRecords-" class="display crm-copy-fields crm-sortable">
      <thead>
      <tr class="columnheader">
        <th class="contact_details"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Name<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></th>
      </tr>
      </thead>

      <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('value'), 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
        <tr class="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('cycle')->handle(array('values'=>"odd-row,even-row"), $_smarty_tpl);?>
">
          <td class="name"><?php echo $_smarty_tpl->getValue('row');?>
</td>
        </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
  </div>
</div><br />
<a href="#" id="popup-button" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>View Selected Contacts<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>View Selected Contacts<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a>
<?php }?>

<?php if ($_smarty_tpl->getValue('isSelectedContacts')) {?>

<?php echo '<script'; ?>
 type="text/javascript">
  CRM.$(function($) {
    $("#popupContainer").css({
      "background-color":"#E0E0E0",
      'display':'none'
    });

    $("#popup-button").click(function() {
      $("#popupContainer").dialog({
        title: "<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Selected Contacts<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>",
        width:700,
        height:500,
        modal: true,
        overlay: {
          opacity: 0.5,
          background: "black"
        }
      });
      return false;
    });

    var count = 0; var columns = ''; var sortColumn = '';
    $('#selectedRecords- th').each(function() {
      if ($(this).attr('class') === 'contact_details') {
        sortColumn += '[' + count + ', "asc" ],';
        columns += '{"sClass": "contact_details"},';
      }
      else {
        columns += '{ "bSortable": false },';
      }
      count++;
    });

  });

<?php echo '</script'; ?>
>

<?php }?>

<?php if (!empty($_smarty_tpl->getValue('rows'))) {?>
<div class="form-item">
  <table width="30%">
    <tr class="columnheader">
      <th><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Name<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></th>
    </tr>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach1DoElse = false;
?>
      <tr class="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('cycle')->handle(array('values'=>"odd-row,even-row"), $_smarty_tpl);?>
">
        <td><?php echo $_smarty_tpl->getValue('row')['displayName'];?>
</td>
      </tr>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </table>
</div>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
