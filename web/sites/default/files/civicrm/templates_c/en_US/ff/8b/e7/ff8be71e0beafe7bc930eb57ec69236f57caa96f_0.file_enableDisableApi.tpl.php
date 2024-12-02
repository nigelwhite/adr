<?php
/* Smarty version 5.3.1, created on 2024-12-02 16:19:26
  from 'file:CRM/common/enableDisableApi.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dde0e37f800_99043519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff8be71e0beafe7bc930eb57ec69236f57caa96f' => 
    array (
      0 => 'CRM/common/enableDisableApi.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dde0e37f800_99043519 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/common';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
 type="text/javascript">
  CRM.$(function($) {
    var $a, $row, info, enabled, fieldLabel;

    function successMsg() {
             var msg = enabled ? '<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js",1=>"%1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>%1 Disabled<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js",1=>"%1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>' : '<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js",1=>"%1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>%1 Enabled<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js",1=>"%1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>';
      return ts(msg, {1: fieldLabel});
    }

    function refresh() {
      // the opposite of the current status based on row class
      var newStatus = $row.hasClass('disabled');
      $a.trigger('crmPopupFormSuccess', {
        'entity': info.entity,
        'id': info.id,
        'enabled': newStatus
      });
      CRM.refreshParent($row);
    }

    function save() {
      $row.closest('table').block();
      var params = {id: info.id};
      if (info.action == 'setvalue') {
        params.field = 'is_active';
        params.value = enabled ? 0 : 1;
      } else {
        params.is_active = enabled ? 0 : 1;
      }
      CRM.api3(info.entity, info.action, params, {success: successMsg}).done(refresh);
    }

    function checkResponse(e, response) {
      if (response.illegal) {
        $(this).dialog('option', 'buttons', [
          {text: '<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Close<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>', click: function() {$(this).dialog('close');}, icons: {primary: 'fa-times'}}
        ]);
      }
    }

    function enableDisable() {
      $row = $a.closest('.crm-entity');
      info = $a.crmEditableEntity();
      fieldLabel = info.label || info.title || info.display_name || info.name || '<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Record<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>';
      enabled = !$row.hasClass('disabled');
      if (enabled) {
        CRM.confirm({
          url: CRM.url('civicrm/ajax/statusmsg', {entity: info.entity, id: info.id}),
          title: ts('<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js",1=>'%1'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Disable %1<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js",1=>'%1'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>', {1: fieldLabel}),
          options: {yes: '<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Yes<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>', no: '<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>No<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>'},
          width: 300,
          height: 'auto'
        })
          .on('crmLoad', checkResponse)
          .on('crmConfirm:yes', save);
      } else {
        save();
      }
    }

    // Because this is an inline script it may get added to the document more than once, so remove handler before adding
    $('body')
      .off('.crmEnableDisable')
      .on('click.crmEnableDisable', '.action-item.crm-enable-disable', function(e) {
        e.preventDefault();
        $a = $(this);
        CRM.loadScript(CRM.config.resourceBase + 'js/jquery/jquery.crmEditable.js').done(enableDisable);
      });
  });
<?php echo '</script'; ?>
>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
