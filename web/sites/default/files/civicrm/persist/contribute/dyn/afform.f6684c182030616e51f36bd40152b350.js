(function(angular, $, _) {
  angular.module('afsearchContacts', CRM.angRequires('afsearchContacts'));
  angular.module('afsearchContacts').directive('afsearchContacts', function(afCoreDirective) {
    return afCoreDirective("afsearchContacts", {"title":"Contacts","redirect":null,"name":"afsearchContacts"}, {
      templateUrl: "~\/afsearchContacts\/afsearchContacts.aff.html"
    });
  });
})(angular, CRM.$, CRM._);

