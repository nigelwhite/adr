(function(angular, $, _) {
  angular.module('afsearchTabRel', CRM.angRequires('afsearchTabRel'));
  angular.module('afsearchTabRel').directive('afsearchTabRel', function(afCoreDirective) {
    return afCoreDirective("afsearchTabRel", {"title":"Relationships","name":"afsearchTabRel","redirect":null}, {
      templateUrl: "~\/afsearchTabRel\/afsearchTabRel.aff.html"
    });
  });
})(angular, CRM.$, CRM._);

