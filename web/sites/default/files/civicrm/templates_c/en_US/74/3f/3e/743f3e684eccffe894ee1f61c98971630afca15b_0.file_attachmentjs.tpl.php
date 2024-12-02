<?php
/* Smarty version 5.3.1, created on 2024-12-02 15:55:55
  from 'file:CRM/Form/attachmentjs.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674dd88b61efd6_34328473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '743f3e684eccffe894ee1f61c98971630afca15b' => 
    array (
      0 => 'CRM/Form/attachmentjs.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674dd88b61efd6_34328473 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Form';
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
    $('a.delete-attachment').off('.crmAttachments').on('click.crmAttachments', function(e) {
      var $el = $(this),
        $row = $el.closest('.crm-attachment-wrapper'),
        msg = '<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js",1=>"%1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>This will immediately delete the file %1. This action cannot be undone.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js",1=>"%1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>';
      CRM.confirm({
        title: $el.attr('title'),
        message: ts(msg, {1: '<em>' + $el.data('filename') + '</em>'})
      }).on('crmConfirm:yes', function() {
        var postUrl = "<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>'civicrm/file/delete','h'=>0), $_smarty_tpl);?>
";
        var request = $.post(postUrl, $el.data('args'));
        CRM.status({success: '<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Removed<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>"js"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>'}, request);
        request.done(function() {
          $el.trigger('crmPopupFormSuccess');
          $row.remove();
          <?php if ($_smarty_tpl->getValue('context') == 'MessageTemplate') {?>
            $('#file_id').show();
          <?php }?>
        });
      });
      e.preventDefault();
    });
  });

<?php echo '</script'; ?>
>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
