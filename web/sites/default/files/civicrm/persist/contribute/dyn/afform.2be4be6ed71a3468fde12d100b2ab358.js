(function(angular, $, _) {
  angular.module('afformAddContact', CRM.angRequires('afformAddContact'));
  angular.module('afformAddContact').directive('afformAddContact', function(afCoreDirective) {
    return afCoreDirective("afformAddContact", {"title":"Add contact","redirect":null,"name":"afformAddContact"}, {
      templateUrl: "~\/afformAddContact\/afformAddContact.aff.html"
    });
  });
})(angular, CRM.$, CRM._);

