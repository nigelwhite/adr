<?php
/* Smarty version 5.3.1, created on 2024-12-02 16:27:03
  from 'file:CRM/Contact/Page/View/Log.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_674ddfd79fd841_43704918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed99174e6f12fbda42e8a84851f155950286bfd1' => 
    array (
      0 => 'CRM/Contact/Page/View/Log.tpl',
      1 => 1732610235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674ddfd79fd841_43704918 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/vendor/civicrm/civicrm-core/templates/CRM/Contact/Page/View';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div id="changeLog" class="view-content">
   <h3><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Change Log:<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?> <?php echo $_smarty_tpl->getValue('displayName');?>
</h3>
   <?php if ($_smarty_tpl->getValue('useLogging')) {?>
     <div class='instance_data'><div class="crm-loading-element"></div></div>
   <?php } else { ?>
    <div class="form-item">
     <?php if ($_smarty_tpl->getValue('logCount') > 0) {?>
       <table>
       <tr class="columnheader"><th><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Changed By<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></th><th><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Change Date<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></th></tr>
       <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('log'), 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
         <tr class="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('cycle')->handle(array('values'=>"odd-row,even-row"), $_smarty_tpl);?>
">
            <td> <?php echo $_smarty_tpl->getValue('row')['image'];?>
&nbsp;<a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>'civicrm/contact/view','q'=>"action=view&reset=1&cid=".((string)$_smarty_tpl->getValue('row')['id'])), $_smarty_tpl);?>
"><?php echo $_smarty_tpl->getValue('row')['name'];?>
</a></td>
            <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('crmDate')($_smarty_tpl->getValue('row')['date']);?>
</td>
         </tr>
       <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
       </table>
     <?php } else { ?>
     <div class="messages status no-popup">
      <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('icon')) {
throw new \Smarty\Exception('block tag \'icon\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('icon')->handle(array('icon'=>"fa-info-circle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('icon')->handle(array('icon'=>"fa-info-circle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
      <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>None found.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
     </div>
     <?php }?>
    </div>
   <?php }?>
 </p>
</div>

<?php if ($_smarty_tpl->getValue('useLogging')) {?>

  <?php echo '<script'; ?>
 type="text/javascript">
  CRM.$(function($) {
    $('#changeLog .instance_data').on('crmLoad', function(e, data) {
      CRM.tabHeader.updateCount('#tab_log', data.totalRows);
    });
    CRM.reloadChangeLogTab = function(url) {
      if (url) {
        $('#changeLog .instance_data').crmSnippet({url: url});
      }
      $('#changeLog .instance_data').crmSnippet('refresh');
    };
    CRM.incrementChangeLogTab = function() {
      CRM.tabHeader.updateCount('#tab_log', 1 + CRM.tabHeader.getCount('#tab_log'));
    };
    CRM.reloadChangeLogTab("<?php echo $_smarty_tpl->getValue('instanceUrl');?>
");
  });

  <?php echo '</script'; ?>
>

<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
