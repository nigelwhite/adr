(function(angular, $, _) {
  angular.module('afsearchTabNote', CRM.angRequires('afsearchTabNote'));
  angular.module('afsearchTabNote').directive('afsearchTabNote', function(afCoreDirective) {
    return afCoreDirective("afsearchTabNote", {"title":"Notes","name":"afsearchTabNote","redirect":null}, {
      templateUrl: "~\/afsearchTabNote\/afsearchTabNote.aff.html"
    });
  });
})(angular, CRM.$, CRM._);

