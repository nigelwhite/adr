// http://civicrm.org/licensing
// <script> Generated 02 Dec 2024 13:24:49
(function($) {
  // Config settings
  CRM.config.userFramework = "Drupal8";
    CRM.config.resourceBase = "http:\/\/d10-adr.ddev.site\/libraries\/civicrm\/core\/";
    CRM.config.packagesBase = "http:\/\/d10-adr.ddev.site\/libraries\/civicrm\/packages\/";
  CRM.config.lcMessages = "en_US";
  CRM.config.locale = "en_US";
  CRM.config.cid = 0;
  $.datepicker._defaults.dateFormat = CRM.config.dateInputFormat = "mm\/dd\/yy";
  CRM.config.timeIs24Hr = false;
  CRM.config.ajaxPopupsEnabled = true;
  CRM.config.allowAlertAutodismissal = true;
  CRM.config.resourceCacheCode = "HRbNYen_US";
  CRM.config.quickAdd = [];

  // Merge entityRef settings
  CRM.config.entityRef = $.extend({}, {"filters":{"Activity":[{"key":"activity_type_id","value":"Activity Type"},{"key":"status_id","value":"Activity Status"}],"Contact":[{"key":"contact_type","value":"Contact Type"},{"key":"email","value":"Email","entity":"Email","type":"text"},{"key":"group","value":"Group","entity":"GroupContact"},{"key":"tag","value":"Tag","entity":"EntityTag"},{"key":"city","value":"City","type":"text","entity":"Address"},{"key":"postal_code","value":"Postal Code","type":"text","entity":"Address"},{"key":"state_province","value":"State\/Province","entity":"Address"},{"key":"country","value":"Country","entity":"Address"},{"key":"first_name","value":"First Name","type":"text","condition":{"contact_type":"Individual"}},{"key":"last_name","value":"Last Name","type":"text","condition":{"contact_type":"Individual"}},{"key":"nick_name","value":"Nick Name","type":"text","condition":{"contact_type":"Individual"}},{"key":"organization_name","value":"Employer name","type":"text","condition":{"contact_type":"Individual"}},{"key":"gender_id","value":"Gender","condition":{"contact_type":"Individual"}},{"key":"is_deceased","value":"Deceased","condition":{"contact_type":"Individual"}},{"key":"external_identifier","value":"External ID","type":"text"},{"key":"source","value":"Contact Source","type":"text"}],"Email":{"0":{"key":"contact_id.contact_type","value":"Contact Type","entity":"Contact"},"8":{"key":"contact_id.first_name","value":"First Name","type":"text","condition":{"contact_type":"Individual"},"entity":"Contact"},"9":{"key":"contact_id.last_name","value":"Last Name","type":"text","condition":{"contact_type":"Individual"},"entity":"Contact"},"10":{"key":"contact_id.nick_name","value":"Nick Name","type":"text","condition":{"contact_type":"Individual"},"entity":"Contact"},"11":{"key":"contact_id.organization_name","value":"Employer name","type":"text","condition":{"contact_type":"Individual"},"entity":"Contact"},"12":{"key":"contact_id.gender_id","value":"Gender","condition":{"contact_type":"Individual"},"entity":"Contact"},"13":{"key":"contact_id.is_deceased","value":"Deceased","condition":{"contact_type":"Individual"},"entity":"Contact"},"14":{"key":"contact_id.external_identifier","value":"External ID","type":"text","entity":"Contact"},"15":{"key":"contact_id.source","value":"Contact Source","type":"text","entity":"Contact"}}},"links":{"Contact":[{"label":"New Household","url":"\/civicrm\/profile\/create?reset=1&context=dialog&gid=6","type":"Household","icon":"fa-home"},{"label":"New Individual","url":"\/civicrm\/profile\/create?reset=1&context=dialog&gid=4","type":"Individual","icon":"fa-user"},{"label":"New Organization","url":"\/civicrm\/profile\/create?reset=1&context=dialog&gid=5","type":"Organization","icon":"fa-building"}]}}, CRM.config.entityRef || {});

  // Initialize CRM.url and CRM.formatMoney
  CRM.url({back: '/civicrm/crmajax-placeholder-url-path?civicrm-placeholder-url-query=1', front: '/civicrm/crmajax-placeholder-url-path?civicrm-placeholder-url-query=1'});
  CRM.formatMoney('init', false, "\u00a3 1,234.56");

  // Localize select2
  $.fn.select2.defaults.formatNoMatches = "None found.";
  $.fn.select2.defaults.formatLoadMore = "Loading...";
  $.fn.select2.defaults.formatSearching = "Searching...";
  $.fn.select2.defaults.formatInputTooShort = function() {
    return ($(this).data('api-entity') === 'contact' || $(this).data('api-entity') === 'Contact') ? "Search by name\/email or id..." : "Enter search term or id...";
  };

  // Localize jQuery UI
  $.ui.dialog.prototype.options.closeText = "Close";

  // Localize jQuery DataTables
  // Note the first two defaults set here aren't localization related,
  // but need to be set globally for all DataTables.
  $.extend( $.fn.dataTable.defaults, {
    "searching": false,
    "jQueryUI": true,
    "language": {
      "emptyTable": "None found.",
      "info":  "Showing _START_ to _END_ of _TOTAL_ entries",
      "infoEmpty": "Showing 0 to 0 of 0 entries",
      "infoFiltered": "(filtered from _MAX_ total entries)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Show _MENU_ entries",
      "loadingRecords": " ",
      "processing": " ",
      "zeroRecords": "None found.",
      "paginate": {
        "first": "First",
        "last": "Last",
        "next": "Next",
        "previous": "Previous"
      }
    }
  });

  // Localize strings for jQuery.validate
  var messages = {
    required: "This field is required.",
    remote: "Please fix this field.",
    email: "Please enter a valid email address.",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (YYYY-MM-DD).",
    number: "Please enter a valid number.",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Please enter the same value again.",
    accept: "Please enter a value with a valid extension.",
    maxlength: $.validator.format("Please enter no more than {0} characters."),
    minlength: $.validator.format("Please enter at least {0} characters."),
    rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
    range: $.validator.format("Please enter a value between {0} and {1}."),
    max: $.validator.format("Please enter a value less than or equal to {0}."),
    min: $.validator.format("Please enter a value greater than or equal to {0}.")
  };
  $.extend($.validator.messages, messages);
  

  var params = {
    errorClass: 'crm-inline-error alert-danger',
    messages: {},
    ignore: '.select2-offscreen, [readonly], :hidden:not(.crm-select2), .crm-no-validate',
    ignoreTitle: true,
    errorPlacement: function(error, element) {
      if (element.prop('type') === 'radio') {
        error.appendTo(element.parents('div.content')[0]);
      }
      else {
        error.insertAfter(element);
      }
    }
  };

  // use civicrm notifications when there are errors
  params.invalidHandler = function(form, validator) {
    // If there is no container for display then red text will still show next to the invalid fields
    // but there will be no overall message. Currently the container is only available on backoffice pages.
    if ($('#crm-notification-container').length) {
      $.each(validator.errorList, function(k, error) {
        $(error.element).parents('.crm-custom-accordion.collapsed').crmAccordionToggle();
        $(error.element).parents('.crm-custom-accordion').prop('open', true);
        $(error.element).crmError(error.message);
      });
    }
  };

  CRM.validate = {
    _defaults: params,
    params: {},
    functions: []
  };

})(jQuery);

