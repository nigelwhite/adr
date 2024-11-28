(function(angular, $, _) {
  angular.module('ng')
    .config(['$locationProvider', function($locationProvider) {
      $locationProvider.hashPrefix('');
    }]);


angular.module('af', CRM.angRequires('af'));

var modelProps = {
    type: '@',
    data: '=',
    actions: '=',
    modelName: '@name',
    label: '@'
  };
  angular.module('af').component('afEntity', {
    require: {afForm: '^afForm'},
    bindings: modelProps,
    controller: function() {

      this.$onInit = function() {
        var entity = _.pick(this, _.keys(modelProps));
        entity.actions = entity.actions || {update: true, create: true};
        entity.id = null;
        this.afForm.registerEntity(entity);
      };
    }

  });

var id = 0;
  angular.module('af').component('afField', {
    require: {
      afFieldset: '^^afFieldset',
      afJoin: '?^^afJoin',
      afRepeatItem: '?^^afRepeatItem'
    },
    templateUrl: '~/af/afField.html',
    bindings: {
      fieldName: '@name',
      defn: '='
    },
    controller: function($scope, $element, crmApi4, $timeout) {
      var ts = $scope.ts = CRM.ts('org.civicrm.afform'),
        ctrl = this,
        namePrefix = '',
        fieldOptions = null;
      this.inputAttrs = [];

      this.$onInit = function() {
        var closestController = $($element).closest('[af-fieldset],[af-join],[af-repeat-item]');
        $scope.dataProvider = closestController.is('[af-repeat-item]') ? ctrl.afRepeatItem : ctrl.afJoin || ctrl.afFieldset;
        $scope.fieldId = _.kebabCase(ctrl.fieldName) + '-' + id++;

        $element.addClass('af-field-type-' + _.kebabCase(ctrl.defn.input_type));

        if (this.defn.name !== this.fieldName) {
          namePrefix = this.fieldName.substr(0, this.fieldName.length - this.defn.name.length);
        }

        if (this.defn.search_operator) {
          this.search_operator = this.defn.search_operator;
        }

        fieldOptions = this.defn.options || null;
        if (this.defn.data_type === 'Boolean') {
          if (fieldOptions) {
            fieldOptions.forEach((option) => option.id = !!option.id);
          } else {
            fieldOptions = [{id: true, label: ts('Yes')}, {id: false, label: ts('No')}];
          }
        }
        if (ctrl.fieldName === 'is_primary' && 'repeatIndex' in $scope.dataProvider) {
          fieldOptions = [{id: true, label: ''}];
          $scope.$watch('dataProvider.afRepeat.getEntityController().getData()', function (items, prev) {
            var index = $scope.dataProvider.repeatIndex;
            if (items && !index && !_.find(items, 'is_primary')) {
              $scope.dataProvider.getFieldData().is_primary = true;
            }
            if (items && prev && items.length === prev.length && items[index].is_primary && prev[index].is_primary &&
              _.filter(items, 'is_primary').length > 1
            ) {
              $scope.dataProvider.getFieldData().is_primary = false;
            }
          }, true);
        }
        if (ctrl.defn.input_type === 'ChainSelect') {
          var controlField = namePrefix + ctrl.defn.input_attrs.control_field;
          $scope.$watch('dataProvider.getFieldData()["' + controlField + '"]', function(val) {
            function validateValue() {
              var options = $scope.getOptions(),
                value = $scope.dataProvider.getFieldData()[ctrl.fieldName];
              if (_.isArray(value)) {
                _.remove(value, function(item) {
                  return !_.find(options, (option) => option.id == item);
                });
              } else {
                if (value && !_.find(options, (option) => option.id == value)) {
                  value = '';
                }
                $('input[crm-ui-select]', $element).val(value).change();
              }
            }
            if (val && (typeof val === 'number' || val.length)) {
              $('input[crm-ui-select]', $element).addClass('loading').prop('disabled', true);
              var params = {
                name: ctrl.afFieldset.getFormName(),
                modelName: ctrl.afFieldset.getName(),
                fieldName: ctrl.fieldName,
                joinEntity: ctrl.afJoin ? ctrl.afJoin.entity : null,
                values: $scope.dataProvider.getFieldData()
              };
              crmApi4('Afform', 'getOptions', params)
                .then(function(data) {
                  $('input[crm-ui-select]', $element).removeClass('loading').prop('disabled', !data.length);
                  fieldOptions = data;
                  validateValue();
                });
            } else {
              fieldOptions = null;
              validateValue();
            }
          }, true);
        }
        $timeout(function() {
          var entityName = ctrl.afFieldset.getName(),
            joinEntity = ctrl.afJoin ? ctrl.afJoin.entity : null,
            uniquePrefix = '',
            urlArgs = $scope.$parent.routeParams;
          if (entityName) {
            var index = ctrl.getEntityIndex();
            uniquePrefix = entityName + (index ? index + 1 : '') + (joinEntity ? '.' + joinEntity : '') + '.';
          }
          if (urlArgs && ((uniquePrefix + ctrl.fieldName) in urlArgs)) {
            setValue(urlArgs[uniquePrefix + ctrl.fieldName]);
          }
          else if (urlArgs && (ctrl.fieldName in urlArgs)) {
            setValue(urlArgs[ctrl.fieldName]);
          }
          else if (ctrl.afFieldset.getStoredValue(ctrl.fieldName) !== undefined) {
            setValue(ctrl.afFieldset.getStoredValue(ctrl.fieldName));
          }
          else if ('afform_default' in ctrl.defn) {
            setValue(ctrl.defn.afform_default);
          }

          if (ctrl.defn.search_range) {
            var initialVal = $scope.dataProvider.getFieldData()[ctrl.fieldName];
            if (!_.isArray($scope.dataProvider.getFieldData()[ctrl.fieldName]) &&
              (ctrl.defn.input_type !== 'Select' || !ctrl.defn.is_date || initialVal === '{}')
            ) {
              $scope.dataProvider.getFieldData()[ctrl.fieldName] = {};
            }
            if (ctrl.defn.is_date) {
              ctrl.inputAttrs.push(ctrl.defn.input_attrs || {});
              for (var i = 1; i <= 2; ++i) {
                var attrs = _.cloneDeep(ctrl.defn.input_attrs || {});
                attrs.placeholder = attrs['placeholder' + i];
                attrs.timePlaceholder = attrs['timePlaceholder' + i];
                ctrl.inputAttrs.push(attrs);
              }
            }
          }
        });
      };
      $scope.$on('afIfDestroy', function() {
        if (ctrl.defn.input_type !== 'DisplayOnly') {
          delete $scope.dataProvider.getFieldData()[ctrl.fieldName];
        }
      });
      function correctValueType(value, dataType) {
        if (value === null) {
          return value;
        }
        if (Array.isArray(value)) {
          var newValue = [];
          value.forEach((v, index) => {
            newValue[index] = correctValueType(v);
          });
          return newValue;
        } else if (dataType === 'Integer') {
          return +value;
        } else if (dataType === 'Boolean') {
          return (value == 1);
        }
        return value;
      }

      this.isMultiple = function() {
        return (
          (['Select', 'EntityRef', 'ChainSelect'].includes(ctrl.defn.input_type) && ctrl.defn.input_attrs.multiple) ||
          (ctrl.defn.input_type === 'CheckBox' && ctrl.defn.data_type !== 'Boolean')
        );
      };
      function setValue(value) {
        if (typeof value === 'string' && ctrl.isMultiple()) {
          value = value.split(',');
        }
        if (ctrl.defn.input_type !== 'DisplayOnly') {
          value = correctValueType(value, ctrl.defn.data_type);
        }

        if (ctrl.defn.input_type === 'Date' && typeof value === 'string' && value.startsWith('now')) {
          value = getRelativeDate(value);
        }
        if (ctrl.defn.input_type === 'Number' && ctrl.defn.search_range) {
          if (!_.isPlainObject(value)) {
            value = {
              '>=': +(('' + value).split('-')[0] || 0),
              '<=': +(('' + value).split('-')[1] || 0),
            };
          }
        } else if (ctrl.defn.input_type === 'Number') {
          value = +value;
        }
        else if (ctrl.defn.search_range && !_.isPlainObject(value) &&
          !(ctrl.defn.options && _.findWhere(ctrl.defn.options, {id: value}))
        ) {
          value = {
            '>=': ('' + value).split('-')[0],
            '<=': ('' + value).split('-')[1] || '',
          };
        }
        $scope.getSetValue(value);
      }
      ctrl.getEntityIndex = function() {
        if ('repeatIndex' in $scope.dataProvider && $scope.dataProvider.afRepeat.getRepeatType() === 'join') {
          return $scope.dataProvider.outerRepeatItem ? $scope.dataProvider.outerRepeatItem.repeatIndex : 0;
        } else {
          return ctrl.afRepeatItem ? ctrl.afRepeatItem.repeatIndex : 0;
        }
      };

      ctrl.isReadonly = function() {
        if (ctrl.defn.input_attrs && ctrl.defn.input_attrs.autofill) {
          return ctrl.afFieldset.getEntity().actions[ctrl.defn.input_attrs.autofill] === false;
        }
        return ctrl.defn.input_type === 'DisplayOnly';
      };
      ctrl.onSelectEntity = function() {
        if (ctrl.defn.input_attrs && ctrl.defn.input_attrs.autofill) {
          const val = $scope.getSetSelect();
          const entity = ctrl.afFieldset.modelName;
          const entityIndex = ctrl.getEntityIndex();
          const joinEntity = ctrl.afJoin ? ctrl.afJoin.entity : null;
          const joinIndex = ctrl.afJoin && $scope.dataProvider.repeatIndex || 0;
          ctrl.afFieldset.afFormCtrl.loadData(entity, entityIndex, val, ctrl.defn.name, joinEntity, joinIndex);
        }
      };
      ctrl.getFileUploadParams = function() {
        return {
          modelName: ctrl.afFieldset.getName(),
          fieldName: ctrl.fieldName,
          joinEntity: ctrl.afJoin ? ctrl.afJoin.entity : null,
          entityIndex: ctrl.getEntityIndex(),
          joinIndex: ctrl.afJoin && $scope.dataProvider.repeatIndex || null
        };
      };

      ctrl.getAutocompleteParams = function() {
        let fieldName = ctrl.afFieldset.getName();
        if (ctrl.afJoin) {
          fieldName += '+' + ctrl.afJoin.entity;
        }
        fieldName += ':' + ctrl.fieldName;
        return {
          formName: 'afform:' + ctrl.afFieldset.getFormName(),
          fieldName: fieldName,
          values: $scope.dataProvider.getFieldData()
        };
      };

      $scope.getOptions = function () {
        return fieldOptions;
      };

      $scope.select2Options = function() {
        return {
          results: _.transform($scope.getOptions(), function(result, opt) {
            result.push({id: opt.id, text: opt.label});
          }, [])
        };
      };

      this.onChangeOperator = function() {
        $scope.dataProvider.getFieldData()[ctrl.fieldName] = {};
      };
      $scope.getSetValue = function(val) {
        var currentVal = $scope.dataProvider.getFieldData()[ctrl.fieldName];
        if (arguments.length) {
          if (ctrl.search_operator) {
            if (typeof currentVal !== 'object') {
              $scope.dataProvider.getFieldData()[ctrl.fieldName] = {};
            }
            return ($scope.dataProvider.getFieldData()[ctrl.fieldName][ctrl.search_operator] = val);
          }
          return ($scope.dataProvider.getFieldData()[ctrl.fieldName] = val);
        }
        if (ctrl.search_operator) {
          return (currentVal || {})[ctrl.search_operator];
        }
        return currentVal;
      };
      $scope.getSetSelect = function(val) {
        var currentVal = $scope.dataProvider.getFieldData()[ctrl.fieldName];
        if (arguments.length) {
          if (ctrl.defn.is_date) {
            if (val === '{}') {
              val = !_.isPlainObject(currentVal) ? {} : currentVal;
            }
          }
          else if (ctrl.defn.search_range) {
            return ($scope.dataProvider.getFieldData()[ctrl.fieldName]['>='] = val);
          }
          else if (ctrl.search_operator) {
            if (typeof currentVal !== 'object') {
              $scope.dataProvider.getFieldData()[ctrl.fieldName] = {};
            }
            return ($scope.dataProvider.getFieldData()[ctrl.fieldName][ctrl.search_operator] = val);
          }
          if (ctrl.defn.data_type === 'Boolean') {
            return ($scope.dataProvider.getFieldData()[ctrl.fieldName] = (val === 'true'));
          }
          if (ctrl.defn.data_type === 'Integer' && typeof val === 'string') {
            return ($scope.dataProvider.getFieldData()[ctrl.fieldName] = val.length ? +val : null);
          }
          return ($scope.dataProvider.getFieldData()[ctrl.fieldName] = val);
        }
        if (ctrl.defn.is_date) {
          return _.isPlainObject(currentVal) ? '{}' : currentVal;
        }
        else if (ctrl.defn.search_range) {
          return currentVal['>='];
        }
        else if (ctrl.search_operator) {
          return (currentVal || {})[ctrl.search_operator];
        }
        else if (!ctrl.isMultiple() && (typeof currentVal === 'boolean' || typeof currentVal === 'number')) {
          return JSON.stringify(currentVal);
        }
        return currentVal;
      };

      function getRelativeDate(dateString) {
        const parts = dateString.split(' ');
        const baseDate = new Date();
        let unit = parts[2] || 'day';
        let offset = parseInt(parts[1] || '0', 10);

        switch (unit) {
          case 'week':
            offset *= 7;
            break;

          case 'year':
            offset *= 365;
        }
        let newDate = new Date(baseDate.getTime() + offset * 24 * 60 * 60 * 1000);
        return newDate.toISOString().split('T')[0];
      }

    }
  });

angular.module('af').directive('afFieldset', function() {
    return {
      restrict: 'A',
      require: ['afFieldset', '?^^afForm'],
      bindToController: {
        modelName: '@afFieldset',
        storeValues: '<'
      },
      link: function($scope, $el, $attr, ctrls) {
        var self = ctrls[0];
        self.afFormCtrl = ctrls[1];
      },
      controller: function($scope, $element) {
        let ctrl = this;
        let localData = [];
        let joinOffsets = {};
        let ts = $scope.ts = CRM.ts('org.civicrm.afform');

        this.getData = function() {
          return ctrl.afFormCtrl ? ctrl.afFormCtrl.getData(ctrl.modelName) : localData;
        };
        this.getName = function() {
          return this.modelName ||
            $element.find('[search-name][display-name]').attr('display-name');
        };
        this.getEntity = function() {
          return this.afFormCtrl.getEntity(this.modelName);
        };
        this.getEntityType = function() {
          return this.afFormCtrl.getEntity(this.modelName).type;
        };
        this.getFieldData = function() {
          var data = ctrl.getData();
          if (!data.length) {
            data.push({fields: {}});
          }
          return data[0].fields;
        };
        this.getFormName = function() {
          return ctrl.afFormCtrl ? ctrl.afFormCtrl.getFormMeta().name : $scope.meta.name;
        };

        this.getJoinOffset = function(joinEntity) {
          joinOffsets[joinEntity] = joinEntity in joinOffsets ? joinOffsets[joinEntity] + 1 : 0;
          return joinOffsets[joinEntity];
        };
        function getCacheKey() {
          return 'afform:' + ctrl.getFormName() + ctrl.getName();
        }
        this.getStoredValue = function(fieldName) {
          if (!this.storeValues) {
            return;
          }
          return CRM.cache.get(getCacheKey(), {})[fieldName];
        };
        this.$onInit = function() {
          if (this.storeValues) {
            $scope.$watch(ctrl.getFieldData, function(newVal, oldVal) {
              if (typeof newVal === 'object' && typeof oldVal === 'object' && Object.keys(newVal).length) {
                CRM.cache.set(getCacheKey(), newVal);
              }
            }, true);
          }
        };
      }
    };
  });

  angular.module('af').component('afForm', {
    bindings: {
      ctrl: '@'
    },
    require: {
      ngForm: 'form'
    },
    controller: function($scope, $element, $timeout, crmApi4, crmStatus, $window, $location, $parse, FileUploader) {
      var schema = {},
        data = {extra: {}},
        status,
        args,
        submissionResponse,
        ts = CRM.ts('org.civicrm.afform'),
        ctrl = this;

      this.$onInit = function() {
        $scope.$parent[this.ctrl] = this;

        $timeout(ctrl.loadData);
      };

      this.registerEntity = function registerEntity(entity) {
        schema[entity.modelName] = entity;
        data[entity.modelName] = [];
      };
      this.getEntity = function getEntity(name) {
        return schema[name];
      };
      this.getData = function getData(name) {
        return data[name];
      };
      this.getSchema = function getSchema(name) {
        return schema[name];
      };
      this.getFormMeta = function getFormMeta() {
        return $scope.$parent.meta;
      };
      this.loadData = function(selectedEntity, selectedIndex, selectedId, selectedField, joinEntity, joinIndex) {
        let toLoad = true;
        const params = {name: ctrl.getFormMeta().name, args: {}};
        if (selectedEntity) {
          toLoad = !!selectedId;
          params.args[selectedEntity] = {};
          params.args[selectedEntity][selectedIndex] = {};
          if (joinEntity) {
            params.fillMode = 'join';
            params.args[selectedEntity][selectedIndex].joins = {};
            params.args[selectedEntity][selectedIndex].joins[joinEntity] = {};
            params.args[selectedEntity][selectedIndex].joins[joinEntity][joinIndex] = {};
            params.args[selectedEntity][selectedIndex].joins[joinEntity][joinIndex][selectedField] = selectedId;
          } else {
            params.fillMode = 'entity';
            params.args[selectedEntity][selectedIndex][selectedField] = selectedId;
          }
        }
        else {
          params.fillMode = 'form';
          args = _.assign({}, $scope.$parent.routeParams || {}, $scope.$parent.options || {});
          _.each(schema, function (entity, entityName) {
            if (args[entityName] && typeof args[entityName] === 'string') {
              args[entityName] = args[entityName].split(',');
            }
          });
          params.args = args;
        }
        if (toLoad) {
          crmApi4('Afform', 'prefill', params)
            .then((result) => {
              if (result.error_message) {
                disableForm(result.error_message);
                return;
              }
              result.forEach((item) => {
                _.each(item.values, (values, index) => {
                  data[item.name][index] = data[item.name][index] || {};
                  data[item.name][index].joins = {};
                  angular.merge(data[item.name][index], values, {fields: _.cloneDeep(schema[item.name].data || {})});
                });
              });
            }, (error) => {
              disableForm(error.error_message);
            });
        }
        else if (joinEntity) {
          data[selectedEntity][selectedIndex].joins[joinEntity][joinIndex] = {};
        }
        else if (selectedEntity) {
          Object.keys(data[selectedEntity][selectedIndex].fields).forEach(key => delete data[selectedEntity][selectedIndex].fields[key]);
          angular.merge(data[selectedEntity][selectedIndex].fields, _.cloneDeep(schema[selectedEntity].data || {}));
          data[selectedEntity][selectedIndex].joins = {};
        }

        ctrl.showSubmitButton = displaySubmitButton(args);
      };

      function displaySubmitButton(args) {
        if (args.sid && args.sid.length > 0) {
          return false;
        }
        return true;
      }
      this.fileUploader = new FileUploader({
        url: CRM.url('civicrm/ajax/api4/Afform/submitFile'),
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        onCompleteAll: postProcess,
        onBeforeUploadItem: function(item) {
          status.resolve();
          status = CRM.status({start: ts('Uploading %1', {1: item.file.name})});
        }
      });
      this.checkConditions = function(conditions, op) {
        op = op || 'AND';
        var ret = op === 'AND',
          flip = !ret;
        _.each(conditions, function(clause) {
          if (_.isArray(clause[1])) {
            if (ctrl.checkConditions(clause[1], clause[0]) === flip) {
              ret = flip;
            }
          } else {
            if (_.isString(clause[0]) && clause[0].charAt(0) !== '"') {
              clause[0] = clause[0].replace(/\[([^'"])/g, "['$1").replace(/([^'"])]/g, "$1']");
            }
            let parser1 = $parse(clause[0]);
            let parser2 = $parse(clause[2]);
            let result = compareConditions(parser1(data), clause[1], parser2(data));
            if (result === flip) {
              ret = flip;
            }
          }
        });
        return op === 'NOT' ? !ret : ret;
      };

      function compareConditions(val1, op, val2) {
        const yes = (op !== '!=' && !op.includes('NOT '));

        switch (op) {
          case '=':
          case '!=':
          case '==':
            return angular.equals(val1, val2) === yes;

          case '>':
            return val1 > val2;

          case '<':
            return val1 < val2;

          case '>=':
            return val1 >= val2;

          case '<=':
            return val1 <= val2;

          case 'IS EMPTY':
            return !val1;

          case 'IS NOT EMPTY':
            return !!val1;

          case 'CONTAINS':
          case 'NOT CONTAINS':
            if (Array.isArray(val1)) {
              return val1.includes(val2) === yes;
            } else if (typeof val1 === 'string' && typeof val2 === 'string') {
              return val1.toLowerCase().includes(val2.toLowerCase()) === yes;
            }
            return angular.equals(val1, val2) === yes;

          case 'IN':
          case 'NOT IN':
            if (Array.isArray(val2)) {
              return val2.includes(val1) === yes;
            }
            return angular.equals(val1, val2) === yes;

          case 'LIKE':
          case 'NOT LIKE':
            if (typeof val1 === 'string' && typeof val2 === 'string') {
              return likeCompare(val1, val2) === yes;
            }
            return angular.equals(val1, val2) === yes;
        }
      }

      function likeCompare(str, pattern) {
        const regexPattern = pattern
          .replace(/([.+?^=!:${}()|\[\]\/\\])/g, "\\$1")
          .replace(/%/g, '.*') // Convert % to .*
          .replace(/_/g, '.'); // Convert _ to .
        const regex = new RegExp(`^${regexPattern}$`, 'i');
        return regex.test(str);
      }
      function postProcess() {
        var metaData = ctrl.getFormMeta(),
          dialog = $element.closest('.ui-dialog-content');

        $element.trigger('crmFormSuccess', {
          afform: metaData,
          data: data,
          submissionResponse: submissionResponse,
        });

        status.resolve();
        $element.unblock();

        if (dialog.length) {
          dialog.dialog('close');
        }

        else if (metaData.redirect) {
          var url = replaceTokens(metaData.redirect, submissionResponse[0]);
          if (url.indexOf('civicrm/') === 0) {
            url = CRM.url(url);
          } else if (url.indexOf('/') === 0) {
            let port = $location.port();
            port = port ? `:${port}` : '';
            url = `${$location.protocol()}://${$location.host()}${port}${url}`;
          }
          $window.location.href = url;
        }
      }

      function replaceTokens(str, vars) {
        function recurse(stack, values) {
          _.each(values, function(value, key) {
            if (_.isArray(value) || _.isPlainObject(value)) {
              recurse(stack.concat([key]), value);
            } else {
              var token = (stack.length ? stack.join('.') + '.' : '') + key;
              str = str.replace(new RegExp(_.escapeRegExp('[' + token + ']'), 'g'), value);
            }
          });
        }
        recurse([], vars);
        return str;
      }

      function validateFileFields() {
        var valid = true;
        $("af-form[ng-form=" + ctrl.getFormMeta().name +"] input[type='file']").each((index, fld) => {
          if ($(fld).attr('required') && $(fld).get(0).files.length == 0) {
            valid = false;
          }
        });
        return valid;
      }

      function disableForm(errorMsg) {
        $('af-form[ng-form="' + ctrl.getFormMeta().name + '"]')
          .addClass('disabled')
          .find('button[ng-click="afform.submit()"]').prop('disabled', true);
        CRM.alert(errorMsg, ts('Sorry'), 'error');
      }

      this.submit = function() {
        if (!ctrl.ngForm.$valid || !validateFileFields()) {
          CRM.alert(ts('Please fill all required fields.'), ts('Form Error'));
          return;
        }
        status = CRM.status({});
        $element.block();

        crmApi4('Afform', 'submit', {
          name: ctrl.getFormMeta().name,
          args: args,
          values: data}
        ).then(function(response) {
          submissionResponse = response;
          if (ctrl.fileUploader.getNotUploadedItems().length) {
            _.each(ctrl.fileUploader.getNotUploadedItems(), function(file) {
              file.formData.push({
                params: JSON.stringify(_.extend({
                  token: response[0].token,
                  name: ctrl.getFormMeta().name
                }, file.crmApiParams()))
              });
            });
            ctrl.fileUploader.uploadAll();
          } else {
            postProcess();
          }
        })
        .catch(function(error) {
          status.reject();
          $element.unblock();
          CRM.alert(error.error_message || '', ts('Form Error'));
        });
      };
    }
  });

angular.module('af').directive('afIf', function($compile, $animate, $parse) {
    return {
      multiElement: true,
      transclude: 'element',
      priority: 601,
      terminal: true,
      restrict: 'A',
      require: ['^^afForm'],
      $$tlb: true,
      link: function($scope, $element, $attr, ctrl, $transclude) {
        var block, childScope, previousElements;

        function watcher() {
          var conditions = $parse($attr.afIf)();
          return ctrl[0].checkConditions(conditions);
        }

        $scope.$watch(watcher, function(value) {
          if (value) {
            if (!childScope) {
              $transclude(function(clone, newScope) {
                childScope = newScope;
                clone[clone.length++] = $compile.$$createComment('end afIf', $attr.afIf);
                block = {
                  clone: clone
                };
                $animate.enter(clone, $element.parent(), $element);
              });
            }
          } else {
            if (previousElements) {
              previousElements.remove();
              previousElements = null;
            }
            if (childScope) {
              childScope.$broadcast('afIfDestroy');
              childScope.$destroy();
              childScope = null;
            }
            if (block) {
              previousElements = getBlockNodes(block.clone);
              $animate.leave(previousElements).done(function(response) {
                if (response !== false) previousElements = null;
              });
              block = null;
            }
          }
        });
      }
    };
  });

  /**
   * Return the DOM siblings between the first and last node in the given array.
   * @param {Array} array like object
   * @returns {Array} the inputted object or a jqLite collection containing the nodes
   */
  function getBlockNodes(nodes) {
    var node = nodes[0];
    var endNode = nodes[nodes.length - 1];
    var blockNodes;

    for (var i = 1; node !== endNode && (node = node.nextSibling); i++) {
      if (blockNodes || nodes[i] !== node) {
        if (!blockNodes) {
          blockNodes = $(slice.call(nodes, 0, i));
        }
        blockNodes.push(node);
      }
    }

    return blockNodes || nodes;
  }


angular.module('af')
    .directive('afJoin', function() {
      return {
        restrict: 'A',
        require: ['afJoin', '^^afFieldset', '?^^afRepeatItem'],
        bindToController: {
          entity: '@afJoin',
        },
        link: function($scope, $el, $attr, ctrls) {
          var self = ctrls[0];
          self.afFieldset = ctrls[1];
          self.repeatItem = ctrls[2];
          self.offset = self.afFieldset.getJoinOffset($attr.afJoin);
        },
        controller: function($scope) {
          var self = this;
          this.getEntityType = function() {
            return this.entity;
          };
          this.getData = function() {
            var data, fieldsetData;
            if (self.repeatItem) {
              data = self.repeatItem.item;
            } else {
              fieldsetData = self.afFieldset.getData();
              if (!fieldsetData.length) {
                fieldsetData.push({fields: {}, joins: {}});
              }
              data = fieldsetData[0];
            }
            if (!data.joins) {
              data.joins = {};
            }
            if (!data.joins[self.entity]) {
              data.joins[self.entity] = [];
            }
            return data.joins[self.entity];
          };
          this.getFieldData = function() {
            var data = this.getData();
            if (!data[this.offset]) {
              data[this.offset] = {};
            }
            return data[this.offset];
          };
        }
      };
    });

angular.module('af')
    .directive('afRepeat', function() {
      return {
        restrict: 'A',
        require: ['?afFieldset', '?afJoin'],
        transclude: true,
        scope: {
          min: '=',
          max: '=',
          addLabel: '@afRepeat',
          addIcon: '@',
          copyLabel: '@afCopy',
          copyIcon: '@'
        },
        templateUrl: '~/af/afRepeat.html',
        link: function($scope, $el, $attr, ctrls) {
          $scope.afFieldset = ctrls[0];
          $scope.afJoin = ctrls[1];
        },
        controller: function($scope) {
          this.getItems = $scope.getItems = function() {
            var data = getEntityController().getData();
            while ($scope.min && data.length < $scope.min) {
              data.push(getRepeatType() === 'join' ? {} : {fields: {}, joins: {}});
            }
            return data;
          };

          function getRepeatType() {
            return $scope.afJoin ? 'join' : 'fieldset';
          }
          this.getRepeatType = getRepeatType;

          function getEntityController() {
            return $scope.afJoin || $scope.afFieldset;
          }
          this.getEntityController = getEntityController;

          $scope.addItem = function() {
            $scope.getItems().push(getRepeatType() === 'join' ? {} : {fields: {}});
          };

          $scope.copyItem = function() {
            var data = $scope.getItems();
            var last = data[data.length-1];
            data.push(getRepeatType() === 'join' ? angular.copy(last) : {fields: angular.copy(last.fields)});
          };

          $scope.removeItem = function(index) {
            $scope.getItems().splice(index, 1);
          };

          $scope.canAdd = function() {
            return !$scope.max || $scope.getItems().length < $scope.max;
          };

          $scope.canRemove = function() {
            return !$scope.min || $scope.getItems().length > $scope.min;
          };
        }
      };
    })
    .directive('afRepeatItem', function() {
      return {
        restrict: 'A',
        require: {
          afRepeat: '^^',
          outerRepeatItem: '?^^afRepeatItem'
        },
        bindToController: {
          item: '=afRepeatItem',
          repeatIndex: '='
        },
        controller: function() {
          this.getFieldData = function() {
            return this.afRepeat.getRepeatType() === 'join' ? this.item : this.item.fields;
          };

          this.getEntityType = function() {
            return this.afRepeat.getEntityController().getEntityType();
          };
        }
      };
    });

  angular.module('af').directive('afTitle', function() {
    return {
      restrict: 'A',
      bindToController: {
        title: '@afTitle'
      },
      controller: function($scope, $element) {
        var ctrl = this;

        $scope.$watch(function() {return ctrl.title;}, function(text) {
          let tag = 'h4';
          if ($element.is('fieldset')) {
            tag = 'legend';
          }
          if ($element.is('details')) {
            tag = 'summary';
          }
          let $title = $element.children(tag + '.af-title');
          if (!$title.length) {
            $title = $('<' + tag + ' class="af-title" />').prependTo($element);
          }
          $title.text(text);
        });
      }
    };
  });

angular.module('afCore', CRM.angRequires('afCore'));
  angular.module('afCore').service('afCoreDirective', function($location, crmApi4, crmStatus, crmUiAlert) {
    return function(camelName, meta, d) {
      d.restrict = 'E';
      d.scope = {};
      d.scope.options = '=';
      d.link = {
        pre: function($scope, $el, $attr) {
          $scope.ts = CRM.ts(camelName);
          $scope.meta = meta;
          $scope.crmApi4 = crmApi4;
          $scope.crmStatus = crmStatus;
          $scope.crmUiAlert = crmUiAlert;
          $scope.crmUrl = CRM.url;
          $scope.checkPerm = CRM.checkPerm;

          $el.addClass('afform-directive');
          var dialog = $el.closest('.ui-dialog-content');
          if (!dialog.length) {
            $scope.$watch(function() {return $location.search();}, function(params) {
              $scope.routeParams = params;
            });
          } else {
            $scope.routeParams = {};
            if (dialog.data('urlHash')) {
              var searchParams = new URLSearchParams(dialog.data('urlHash'));
              searchParams.forEach(function(value, key) {
                $scope.routeParams[key] = value;
              });
            }
          }

          $scope.$parent.afformTitle = meta.title;
          $scope.addTitle = function(addition) {
            $scope.$parent.afformTitle = addition + ' ' + meta.title;
          };
        }
      };
      return d;
    };
  });

angular.module('afCore').directive('afApi3Ctrl', function() {
    return {
      restrict: 'EA',
      scope: {
        afApi3Ctrl: '=',
        afApi3: '@',
        afApi3Refresh: '@',
        onRefresh: '@'
      },
      controllerAs: 'afApi3Ctrl',
      controller: function($scope, $parse, crmThrottle, crmApi) {
        var ctrl = this;
        var parts = $parse($scope.afApi3)($scope.$parent);
        ctrl.entity = parts[0];
        ctrl.action = parts[1];
        ctrl.params = parts[2];
        ctrl.result = {};
        ctrl.loading = ctrl.firstLoad = true;

        ctrl.refresh = function refresh() {
          ctrl.loading = true;
          crmThrottle(function () {
            return crmApi(ctrl.entity, ctrl.action, ctrl.params)
              .then(function (response) {
                ctrl.result = response;
                ctrl.loading = ctrl.firstLoad = false;
                if ($scope.onRefresh) {
                  $scope.$parent.$eval($scope.onRefresh, ctrl);
                }
              });
          });
        };

        $scope.afApi3Ctrl = this;

        var mode = $scope.afApi3Refresh ? $scope.afApi3Refresh : 'auto';
        switch (mode) {
          case 'auto': $scope.$watchCollection('afApi3Ctrl.params', ctrl.refresh); break;
          case 'init': ctrl.refresh(); break;
          case 'manual': break;
          default: throw 'Unrecognized refresh mode: '+ mode;
        }
      }
    };
  });


angular.module('afCore').directive('afApi4Action', function($parse, crmStatus, crmApi4) {
    return {
      restrict: 'A',
      scope: {
        afApi4Action: '@',
        afApi4StartMsg: '=',
        afApi4ErrorMsg: '=',
        afApi4SuccessMsg: '=',
        afApi4Success: '@',
        onError: '@'
      },
      link: function($scope, $el, $attr) {
        var ts = CRM.ts(null);
        function running(x) {$el.toggleClass('af-api4-action-running', x).toggleClass('af-api4-action-idle', !x);}
        running(false);
        $el.click(function(){
          var parts = $parse($scope.afApi4Action)($scope.$parent);
          var msgs = {start: $scope.afApi4StartMsg || ts('Submitting...'), success: $scope.afApi4SuccessMsg, error: $scope.afApi4ErrorMsg};
          running(true);
          crmStatus(msgs, crmApi4(parts[0], parts[1], parts[2]))
            .finally(function(){running(false);})
            .then(function(response){$scope.$parent.$eval($scope.afApi4Success, {response: response});})
            .catch(function(error){$scope.$parent.$eval($scope.onError, {error: error});});
        });
      }
    };
  });


angular.module('afCore').directive('afApi4Ctrl', function() {
    return {
      restrict: 'EA',
      scope: {
        afApi4Ctrl: '=',
        afApi4: '@',
        afApi4Refresh: '@',
        onRefresh: '@'
      },
      controllerAs: 'afApi4Ctrl',
      controller: function($scope, $parse, crmThrottle, crmApi4) {
        var ctrl = this;
        var parts = $parse($scope.afApi4)($scope.$parent);
        ctrl.entity = parts[0];
        ctrl.action = parts[1];
        ctrl.params = parts[2];
        ctrl.index = parts[3];
        ctrl.result = {};
        ctrl.loading = ctrl.firstLoad = true;

        ctrl.refresh = function refresh() {
          ctrl.loading = true;
          crmThrottle(function () {
            return crmApi4(ctrl.entity, ctrl.action, ctrl.params, ctrl.index)
              .then(function (response) {
                ctrl.result = response;
                ctrl.loading = ctrl.firstLoad = false;
                if ($scope.onRefresh) {
                  $scope.$parent.$eval($scope.onRefresh, ctrl);
                }
              });
          });
        };

        $scope.afApi4Ctrl = this;

        var mode = $scope.afApi4Refresh ? $scope.afApi4Refresh : 'auto';
        switch (mode) {
          case 'auto':
            $scope.$watchCollection('afApi4Ctrl.params', ctrl.refresh, true);
            $scope.$watch('afApi4Ctrl.index', ctrl.refresh, true);
            $scope.$watch('afApi4Ctrl.entity', ctrl.refresh, true);
            $scope.$watch('afApi4Ctrl.action', ctrl.refresh, true);
            break;
          case 'init': ctrl.refresh(); break;
          case 'manual': break;
          default: throw 'Unrecognized refresh mode: '+ mode;
        }
      }
    };
  });


angular.module('afformAddContact', CRM.angRequires('afformAddContact'));
  angular.module('afformAddContact').directive('afformAddContact', function(afCoreDirective) {
    return afCoreDirective("afformAddContact", {"title":"Add contact","redirect":null,"name":"afformAddContact"}, {
      templateUrl: "~\/afformAddContact\/afformAddContact.aff.html"
    });
  });

angular.module('afformStandalone', CRM.angular.modules)

    .controller('AfformStandalonePageCtrl', function($scope) {
      $scope.afformTitle = '';
    });

})(angular, CRM.$, CRM._);

/*
 angular-file-upload v2.6.1
 https://github.com/nervgh/angular-file-upload
*/

!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?exports["angular-file-upload"]=t():e["angular-file-upload"]=t()}(this,function(){return function(e){function t(n){if(o[n])return o[n].exports;var r=o[n]={exports:{},id:n,loaded:!1};return e[n].call(r.exports,r,r.exports,t),r.loaded=!0,r.exports}var o={};return t.m=e,t.c=o,t.p="",t(0)}([function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}var r=o(1),i=n(r),s=o(2),a=n(s),u=o(3),l=n(u),p=o(4),c=n(p),f=o(5),d=n(f),h=o(6),y=n(h),m=o(7),v=n(m),_=o(8),g=n(_),b=o(9),F=n(b),O=o(10),C=n(O),T=o(11),I=n(T),w=o(12),A=n(w),U=o(13),x=n(U);angular.module(i.default.name,[]).value("fileUploaderOptions",a.default).factory("FileUploader",l.default).factory("FileLikeObject",c.default).factory("FileItem",d.default).factory("FileDirective",y.default).factory("FileSelect",v.default).factory("FileDrop",F.default).factory("FileOver",C.default).factory("Pipeline",g.default).directive("nvFileSelect",I.default).directive("nvFileDrop",A.default).directive("nvFileOver",x.default).run(["FileUploader","FileLikeObject","FileItem","FileDirective","FileSelect","FileDrop","FileOver","Pipeline",function(e,t,o,n,r,i,s,a){e.FileLikeObject=t,e.FileItem=o,e.FileDirective=n,e.FileSelect=r,e.FileDrop=i,e.FileOver=s,e.Pipeline=a}])},function(e,t){e.exports={name:"angularFileUpload"}},function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default={url:"/",alias:"file",headers:{},queue:[],progress:0,autoUpload:!1,removeAfterUpload:!1,method:"POST",filters:[],formData:[],queueLimit:Number.MAX_VALUE,withCredentials:!1,disableMultipart:!1}},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function i(e,t,o,n,i,a,u,g){var b=n.File,F=n.FormData,O=function(){function n(t){r(this,n);var o=p(e);c(this,o,t,{isUploading:!1,_nextIndex:0,_directives:{select:[],drop:[],over:[]}}),this.filters.unshift({name:"queueLimit",fn:this._queueLimitFilter}),this.filters.unshift({name:"folder",fn:this._folderFilter})}return n.prototype.addToQueue=function(e,t,o){var n=this,r=this.isArrayLikeObject(e)?Array.prototype.slice.call(e):[e],i=this._getFilters(o),l=this.queue.length,p=[],c=function e(){var o=r.shift();if(v(o))return f();var l=n.isFile(o)?o:new a(o),c=n._convertFiltersToPipes(i),d=new g(c),h=function(t){var o=t.pipe.originalFilter,r=s(t.args,2),i=r[0],a=r[1];n._onWhenAddingFileFailed(i,o,a),e()},y=function(t,o){var r=new u(n,t,o);p.push(r),n.queue.push(r),n._onAfterAddingFile(r),e()};d.onThrown=h,d.onSuccessful=y,d.exec(l,t)},f=function(){n.queue.length!==l&&(n._onAfterAddingAll(p),n.progress=n._getTotalProgress()),n._render(),n.autoUpload&&n.uploadAll()};c()},n.prototype.removeFromQueue=function(e){var t=this.getIndexOfItem(e),o=this.queue[t];o.isUploading&&o.cancel(),this.queue.splice(t,1),o._destroy(),this.progress=this._getTotalProgress()},n.prototype.clearQueue=function(){for(;this.queue.length;)this.queue[0].remove();this.progress=0},n.prototype.uploadItem=function(e){var t=this.getIndexOfItem(e),o=this.queue[t],n=this.isHTML5?"_xhrTransport":"_iframeTransport";o._prepareToUploading(),this.isUploading||(this._onBeforeUploadItem(o),o.isCancel||(o.isUploading=!0,this.isUploading=!0,this[n](o),this._render()))},n.prototype.cancelItem=function(e){var t=this,o=this.getIndexOfItem(e),n=this.queue[o],r=this.isHTML5?"_xhr":"_form";if(n)if(n.isCancel=!0,n.isUploading)n[r].abort();else{var s=[void 0,0,{}],a=function(){t._onCancelItem.apply(t,[n].concat(s)),t._onCompleteItem.apply(t,[n].concat(s))};i(a)}},n.prototype.uploadAll=function(){var e=this.getNotUploadedItems().filter(function(e){return!e.isUploading});e.length&&(f(e,function(e){return e._prepareToUploading()}),e[0].upload())},n.prototype.cancelAll=function(){var e=this.getNotUploadedItems();f(e,function(e){return e.cancel()})},n.prototype.isFile=function(e){return this.constructor.isFile(e)},n.prototype.isFileLikeObject=function(e){return this.constructor.isFileLikeObject(e)},n.prototype.isArrayLikeObject=function(e){return this.constructor.isArrayLikeObject(e)},n.prototype.getIndexOfItem=function(e){return h(e)?e:this.queue.indexOf(e)},n.prototype.getNotUploadedItems=function(){return this.queue.filter(function(e){return!e.isUploaded})},n.prototype.getReadyItems=function(){return this.queue.filter(function(e){return e.isReady&&!e.isUploading}).sort(function(e,t){return e.index-t.index})},n.prototype.destroy=function(){var e=this;f(this._directives,function(t){f(e._directives[t],function(e){e.destroy()})})},n.prototype.onAfterAddingAll=function(e){},n.prototype.onAfterAddingFile=function(e){},n.prototype.onWhenAddingFileFailed=function(e,t,o){},n.prototype.onBeforeUploadItem=function(e){},n.prototype.onProgressItem=function(e,t){},n.prototype.onProgressAll=function(e){},n.prototype.onSuccessItem=function(e,t,o,n){},n.prototype.onErrorItem=function(e,t,o,n){},n.prototype.onCancelItem=function(e,t,o,n){},n.prototype.onCompleteItem=function(e,t,o,n){},n.prototype.onTimeoutItem=function(e){},n.prototype.onCompleteAll=function(){},n.prototype._getTotalProgress=function(e){if(this.removeAfterUpload)return e||0;var t=this.getNotUploadedItems().length,o=t?this.queue.length-t:this.queue.length,n=100/this.queue.length,r=(e||0)*n/100;return Math.round(o*n+r)},n.prototype._getFilters=function(e){if(!e)return this.filters;if(m(e))return e;var t=e.match(/[^\s,]+/g);return this.filters.filter(function(e){return t.indexOf(e.name)!==-1})},n.prototype._convertFiltersToPipes=function(e){var t=this;return e.map(function(e){var o=l(t,e.fn);return o.isAsync=3===e.fn.length,o.originalFilter=e,o})},n.prototype._render=function(){t.$$phase||t.$apply()},n.prototype._folderFilter=function(e){return!(!e.size&&!e.type)},n.prototype._queueLimitFilter=function(){return this.queue.length<this.queueLimit},n.prototype._isSuccessCode=function(e){return e>=200&&e<300||304===e},n.prototype._transformResponse=function(e,t){var n=this._headersGetter(t);return f(o.defaults.transformResponse,function(t){e=t(e,n)}),e},n.prototype._parseHeaders=function(e){var t,o,n,r={};return e?(f(e.split("\n"),function(e){n=e.indexOf(":"),t=e.slice(0,n).trim().toLowerCase(),o=e.slice(n+1).trim(),t&&(r[t]=r[t]?r[t]+", "+o:o)}),r):r},n.prototype._headersGetter=function(e){return function(t){return t?e[t.toLowerCase()]||null:e}},n.prototype._xhrTransport=function(e){var t,o=this,n=e._xhr=new XMLHttpRequest;if(e.disableMultipart?t=e._file:(t=new F,f(e.formData,function(e){f(e,function(e,o){t.append(o,e)})}),t.append(e.alias,e._file,e.file.name)),"number"!=typeof e._file.size)throw new TypeError("The file specified is no longer valid");n.upload.onprogress=function(t){var n=Math.round(t.lengthComputable?100*t.loaded/t.total:0);o._onProgressItem(e,n)},n.onload=function(){var t=o._parseHeaders(n.getAllResponseHeaders()),r=o._transformResponse(n.response,t),i=o._isSuccessCode(n.status)?"Success":"Error",s="_on"+i+"Item";o[s](e,r,n.status,t),o._onCompleteItem(e,r,n.status,t)},n.onerror=function(){var t=o._parseHeaders(n.getAllResponseHeaders()),r=o._transformResponse(n.response,t);o._onErrorItem(e,r,n.status,t),o._onCompleteItem(e,r,n.status,t)},n.onabort=function(){var t=o._parseHeaders(n.getAllResponseHeaders()),r=o._transformResponse(n.response,t);o._onCancelItem(e,r,n.status,t),o._onCompleteItem(e,r,n.status,t)},n.ontimeout=function(t){var r=o._parseHeaders(n.getAllResponseHeaders()),i="Request Timeout.";o._onTimeoutItem(e),o._onCompleteItem(e,i,408,r)},n.open(e.method,e.url,!0),n.timeout=e.timeout||0,n.withCredentials=e.withCredentials,f(e.headers,function(e,t){n.setRequestHeader(t,e)}),n.send(t)},n.prototype._iframeTransport=function(e){var t=this,o=_('<form style="display: none;" />'),n=_('<iframe name="iframeTransport'+Date.now()+'">'),r=e._input,i=0,s=null,a=!1;e._form&&e._form.replaceWith(r),e._form=o,r.prop("name",e.alias),f(e.formData,function(e){f(e,function(e,t){var n=_('<input type="hidden" name="'+t+'" />');n.val(e),o.append(n)})}),o.prop({action:e.url,method:"POST",target:n.prop("name"),enctype:"multipart/form-data",encoding:"multipart/form-data"}),n.bind("load",function(){var o="",r=200;try{o=n[0].contentDocument.body.innerHTML}catch(e){r=500}if(s&&clearTimeout(s),s=null,a)return!1;var i={response:o,status:r,dummy:!0},u={},l=t._transformResponse(i.response,u);t._onSuccessItem(e,l,i.status,u),t._onCompleteItem(e,l,i.status,u)}),o.abort=function(){var i,s={status:0,dummy:!0},a={};n.unbind("load").prop("src","javascript:false;"),o.replaceWith(r),t._onCancelItem(e,i,s.status,a),t._onCompleteItem(e,i,s.status,a)},r.after(o),o.append(r).append(n),i=e.timeout||0,s=null,i&&(s=setTimeout(function(){a=!0,e.isCancel=!0,e.isUploading&&(n.unbind("load").prop("src","javascript:false;"),o.replaceWith(r));var i={},s="Request Timeout.";t._onTimeoutItem(e),t._onCompleteItem(e,s,408,i)},i)),o[0].submit()},n.prototype._onWhenAddingFileFailed=function(e,t,o){this.onWhenAddingFileFailed(e,t,o)},n.prototype._onAfterAddingFile=function(e){this.onAfterAddingFile(e)},n.prototype._onAfterAddingAll=function(e){this.onAfterAddingAll(e)},n.prototype._onBeforeUploadItem=function(e){e._onBeforeUpload(),this.onBeforeUploadItem(e)},n.prototype._onProgressItem=function(e,t){var o=this._getTotalProgress(t);this.progress=o,e._onProgress(t),this.onProgressItem(e,t),this.onProgressAll(o),this._render()},n.prototype._onSuccessItem=function(e,t,o,n){e._onSuccess(t,o,n),this.onSuccessItem(e,t,o,n)},n.prototype._onErrorItem=function(e,t,o,n){e._onError(t,o,n),this.onErrorItem(e,t,o,n)},n.prototype._onCancelItem=function(e,t,o,n){e._onCancel(t,o,n),this.onCancelItem(e,t,o,n)},n.prototype._onCompleteItem=function(e,t,o,n){e._onComplete(t,o,n),this.onCompleteItem(e,t,o,n);var r=this.getReadyItems()[0];return this.isUploading=!1,y(r)?void r.upload():(this.onCompleteAll(),this.progress=this._getTotalProgress(),void this._render())},n.prototype._onTimeoutItem=function(e){e._onTimeout(),this.onTimeoutItem(e)},n.isFile=function(e){return b&&e instanceof b},n.isFileLikeObject=function(e){return e instanceof a},n.isArrayLikeObject=function(e){return d(e)&&"length"in e},n.inherit=function(e,t){e.prototype=Object.create(t.prototype),e.prototype.constructor=e,e.super_=t},n}();return O.prototype.isHTML5=!(!b||!F),O.isHTML5=O.prototype.isHTML5,O}Object.defineProperty(t,"__esModule",{value:!0});var s=function(){function e(e,t){var o=[],n=!0,r=!1,i=void 0;try{for(var s,a=e[Symbol.iterator]();!(n=(s=a.next()).done)&&(o.push(s.value),!t||o.length!==t);n=!0);}catch(e){r=!0,i=e}finally{try{!n&&a.return&&a.return()}finally{if(r)throw i}}return o}return function(t,o){if(Array.isArray(t))return t;if(Symbol.iterator in Object(t))return e(t,o);throw new TypeError("Invalid attempt to destructure non-iterable instance")}}();t.default=i;var a=o(1),u=(n(a),angular),l=u.bind,p=u.copy,c=u.extend,f=u.forEach,d=u.isObject,h=u.isNumber,y=u.isDefined,m=u.isArray,v=u.isUndefined,_=u.element;i.$inject=["fileUploaderOptions","$rootScope","$http","$window","$timeout","FileLikeObject","FileItem","Pipeline"]},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function i(){return function(){function e(t){r(this,e);var o=l(t),n=o?t.value:t,i=p(n)?"FakePath":"Object",s="_createFrom"+i;this[s](n,t)}return e.prototype._createFromFakePath=function(e,t){this.lastModifiedDate=null,this.size=null,this.type="like/"+e.slice(e.lastIndexOf(".")+1).toLowerCase(),this.name=e.slice(e.lastIndexOf("/")+e.lastIndexOf("\\")+2),this.input=t},e.prototype._createFromObject=function(e){this.lastModifiedDate=u(e.lastModifiedDate),this.size=e.size,this.type=e.type,this.name=e.name,this.input=e.input},e}()}Object.defineProperty(t,"__esModule",{value:!0}),t.default=i;var s=o(1),a=(n(s),angular),u=a.copy,l=a.isElement,p=a.isString},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function i(e,t){return function(){function o(e,n,i){r(this,o);var s=!!n.input,a=s?p(n.input):null,c=s?null:n;l(this,{url:e.url,alias:e.alias,headers:u(e.headers),formData:u(e.formData),removeAfterUpload:e.removeAfterUpload,withCredentials:e.withCredentials,disableMultipart:e.disableMultipart,method:e.method,timeout:e.timeout},i,{uploader:e,file:new t(n),isReady:!1,isUploading:!1,isUploaded:!1,isSuccess:!1,isCancel:!1,isError:!1,progress:0,index:null,_file:c,_input:a}),a&&this._replaceNode(a)}return o.prototype.upload=function(){try{this.uploader.uploadItem(this)}catch(t){var e=t.name+":"+t.message;this.uploader._onCompleteItem(this,e,t.code,[]),this.uploader._onErrorItem(this,e,t.code,[])}},o.prototype.cancel=function(){this.uploader.cancelItem(this)},o.prototype.remove=function(){this.uploader.removeFromQueue(this)},o.prototype.onBeforeUpload=function(){},o.prototype.onProgress=function(e){},o.prototype.onSuccess=function(e,t,o){},o.prototype.onError=function(e,t,o){},o.prototype.onCancel=function(e,t,o){},o.prototype.onComplete=function(e,t,o){},o.prototype.onTimeout=function(){},o.prototype._onBeforeUpload=function(){this.isReady=!0,this.isUploading=!1,this.isUploaded=!1,this.isSuccess=!1,this.isCancel=!1,this.isError=!1,this.progress=0,this.onBeforeUpload()},o.prototype._onProgress=function(e){this.progress=e,this.onProgress(e)},o.prototype._onSuccess=function(e,t,o){this.isReady=!1,this.isUploading=!1,this.isUploaded=!0,this.isSuccess=!0,this.isCancel=!1,this.isError=!1,this.progress=100,this.index=null,this.onSuccess(e,t,o)},o.prototype._onError=function(e,t,o){this.isReady=!1,this.isUploading=!1,this.isUploaded=!0,this.isSuccess=!1,this.isCancel=!1,this.isError=!0,this.progress=0,this.index=null,this.onError(e,t,o)},o.prototype._onCancel=function(e,t,o){this.isReady=!1,this.isUploading=!1,this.isUploaded=!1,this.isSuccess=!1,this.isCancel=!0,this.isError=!1,this.progress=0,this.index=null,this.onCancel(e,t,o)},o.prototype._onComplete=function(e,t,o){this.onComplete(e,t,o),this.removeAfterUpload&&this.remove()},o.prototype._onTimeout=function(){this.isReady=!1,this.isUploading=!1,this.isUploaded=!1,this.isSuccess=!1,this.isCancel=!1,this.isError=!0,this.progress=0,this.index=null,this.onTimeout()},o.prototype._destroy=function(){this._input&&this._input.remove(),this._form&&this._form.remove(),delete this._form,delete this._input},o.prototype._prepareToUploading=function(){this.index=this.index||++this.uploader._nextIndex,this.isReady=!0},o.prototype._replaceNode=function(t){var o=e(t.clone())(t.scope());o.prop("value",null),t.css("display","none"),t.after(o)},o}()}Object.defineProperty(t,"__esModule",{value:!0}),t.default=i;var s=o(1),a=(n(s),angular),u=a.copy,l=a.extend,p=a.element;a.isElement;i.$inject=["$compile","FileLikeObject"]},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function i(){var e=function(){function e(t){r(this,e),u(this,t),this.uploader._directives[this.prop].push(this),this._saveLinks(),this.bind()}return e.prototype.bind=function(){for(var e in this.events){var t=this.events[e];this.element.bind(e,this[t])}},e.prototype.unbind=function(){for(var e in this.events)this.element.unbind(e,this.events[e])},e.prototype.destroy=function(){var e=this.uploader._directives[this.prop].indexOf(this);this.uploader._directives[this.prop].splice(e,1),this.unbind()},e.prototype._saveLinks=function(){for(var e in this.events){var t=this.events[e];this[t]=this[t].bind(this)}},e}();return e.prototype.events={},e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=i;var s=o(1),a=(n(s),angular),u=a.extend},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function i(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}function s(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}function a(e,t){return function(t){function o(e){r(this,o);var n=p(e,{events:{$destroy:"destroy",change:"onChange"},prop:"select"}),s=i(this,t.call(this,n));return s.uploader.isHTML5||s.element.removeAttr("multiple"),s.element.prop("value",null),s}return s(o,t),o.prototype.getOptions=function(){},o.prototype.getFilters=function(){},o.prototype.isEmptyAfterSelection=function(){return!!this.element.attr("multiple")},o.prototype.onChange=function(){var t=this.uploader.isHTML5?this.element[0].files:this.element[0],o=this.getOptions(),n=this.getFilters();this.uploader.isHTML5||this.destroy(),this.uploader.addToQueue(t,o,n),this.isEmptyAfterSelection()&&(this.element.prop("value",null),this.element.replaceWith(e(this.element.clone())(this.scope)))},o}(t)}Object.defineProperty(t,"__esModule",{value:!0}),t.default=a;var u=o(1),l=(n(u),angular),p=l.extend;a.$inject=["$compile","FileDirective"]},function(e,t){"use strict";function o(e){if(Array.isArray(e)){for(var t=0,o=Array(e.length);t<e.length;t++)o[t]=e[t];return o}return Array.from(e)}function n(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function r(e){return function(){function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[];n(this,t),this.pipes=e}return t.prototype.next=function(t){var n=this.pipes.shift();if(a(n))return void this.onSuccessful.apply(this,o(t));var r=new Error("The filter has not passed");if(r.pipe=n,r.args=t,n.isAsync){var i=e.defer(),u=s(this,this.next,t),l=s(this,this.onThrown,r);i.promise.then(u,l),n.apply(void 0,o(t).concat([i]))}else{var p=Boolean(n.apply(void 0,o(t)));p?this.next(t):this.onThrown(r)}},t.prototype.exec=function(){for(var e=arguments.length,t=Array(e),o=0;o<e;o++)t[o]=arguments[o];this.next(t)},t.prototype.onThrown=function(e){},t.prototype.onSuccessful=function(){},t}()}Object.defineProperty(t,"__esModule",{value:!0}),t.default=r;var i=angular,s=i.bind,a=i.isUndefined;r.$inject=["$q"]},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function i(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}function s(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}function a(e){return function(e){function t(o){r(this,t);var n=p(o,{events:{$destroy:"destroy",drop:"onDrop",dragover:"onDragOver",dragleave:"onDragLeave"},prop:"drop"});return i(this,e.call(this,n))}return s(t,e),t.prototype.getOptions=function(){},t.prototype.getFilters=function(){},t.prototype.onDrop=function(e){var t=this._getTransfer(e);if(t){var o=this.getOptions(),n=this.getFilters();this._preventAndStop(e),c(this.uploader._directives.over,this._removeOverClass,this),this.uploader.addToQueue(t.files,o,n)}},t.prototype.onDragOver=function(e){var t=this._getTransfer(e);this._haveFiles(t.types)&&(t.dropEffect="copy",this._preventAndStop(e),c(this.uploader._directives.over,this._addOverClass,this))},t.prototype.onDragLeave=function(e){e.currentTarget!==this.element[0]&&(this._preventAndStop(e),c(this.uploader._directives.over,this._removeOverClass,this))},t.prototype._getTransfer=function(e){return e.dataTransfer?e.dataTransfer:e.originalEvent.dataTransfer},t.prototype._preventAndStop=function(e){e.preventDefault(),e.stopPropagation()},t.prototype._haveFiles=function(e){return!!e&&(e.indexOf?e.indexOf("Files")!==-1:!!e.contains&&e.contains("Files"))},t.prototype._addOverClass=function(e){e.addOverClass()},t.prototype._removeOverClass=function(e){e.removeOverClass()},t}(e)}Object.defineProperty(t,"__esModule",{value:!0}),t.default=a;var u=o(1),l=(n(u),angular),p=l.extend,c=l.forEach;a.$inject=["FileDirective"]},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function i(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}function s(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}function a(e){return function(e){function t(o){r(this,t);var n=p(o,{events:{$destroy:"destroy"},prop:"over",overClass:"nv-file-over"});return i(this,e.call(this,n))}return s(t,e),t.prototype.addOverClass=function(){this.element.addClass(this.getOverClass())},t.prototype.removeOverClass=function(){this.element.removeClass(this.getOverClass())},t.prototype.getOverClass=function(){return this.overClass},t}(e)}Object.defineProperty(t,"__esModule",{value:!0}),t.default=a;var u=o(1),l=(n(u),angular),p=l.extend;a.$inject=["FileDirective"]},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}function r(e,t,o){return{link:function(n,r,i){var s=n.$eval(i.uploader);if(!(s instanceof t))throw new TypeError('"Uploader" must be an instance of FileUploader');var a=new o({uploader:s,element:r,scope:n});a.getOptions=e(i.options).bind(a,n),a.getFilters=function(){return i.filters}}}}Object.defineProperty(t,"__esModule",{value:!0}),t.default=r;var i=o(1);n(i);r.$inject=["$parse","FileUploader","FileSelect"]},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}function r(e,t,o){return{link:function(n,r,i){var s=n.$eval(i.uploader);if(!(s instanceof t))throw new TypeError('"Uploader" must be an instance of FileUploader');if(s.isHTML5){var a=new o({uploader:s,element:r});a.getOptions=e(i.options).bind(a,n),a.getFilters=function(){return i.filters}}}}}Object.defineProperty(t,"__esModule",{value:!0}),t.default=r;var i=o(1);n(i);r.$inject=["$parse","FileUploader","FileDrop"]},function(e,t,o){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}function r(e,t){return{link:function(o,n,r){var i=o.$eval(r.uploader);if(!(i instanceof e))throw new TypeError('"Uploader" must be an instance of FileUploader');var s=new t({uploader:i,element:n});s.getOverClass=function(){return r.overClass||s.overClass}}}}Object.defineProperty(t,"__esModule",{value:!0}),t.default=r;var i=o(1);n(i);r.$inject=["FileUploader","FileOver"]}])});

(function(angular, $, _) {
  angular.module('api4', CRM.angRequires('api4'));

angular.module('api4').factory('crmApi4', function($q) {
    var crmApi4 = function(entity, action, params, index) {
      var deferred = $q.defer();
      var p;
      var backend = crmApi4.backend || CRM.api4;
      if (_.isObject(entity)) {
        /*jshint -W061 */
        p = backend(eval('('+angular.toJson(entity)+')'), action);
      } else {
        /*jshint -W061 */
        p = backend(entity, action, eval('('+angular.toJson(params)+')'), index);
      }
      p.then(
        function(result) {
          deferred.resolve(result);
        },
        function(error) {
          deferred.reject(error);
        }
      );
      return deferred.promise;
    };
    crmApi4.backend = null;
    crmApi4.val = function(value) {
      var d = $.Deferred();
      d.resolve(value);
      return d.promise();
    };
    return crmApi4;
  });

})(angular, CRM.$, CRM._);

/**
 * Checklist-model
 * AngularJS directive for list of checkboxes
 * https://github.com/vitalets/checklist-model
 * License: MIT http://opensource.org/licenses/MIT
 */

 /* commonjs package manager support (eg componentjs) */
 if (typeof module !== "undefined" && typeof exports !== "undefined" && module.exports === exports){
   module.exports = 'checklist-model';
 }

angular.module('checklist-model', [])
.directive('checklistModel', ['$parse', '$compile', function($parse, $compile) {
  function contains(arr, item, comparator) {
    if (angular.isArray(arr)) {
      for (var i = arr.length; i--;) {
        if (comparator(arr[i], item)) {
          return true;
        }
      }
    }
    return false;
  }
  function add(arr, item, comparator) {
    arr = angular.isArray(arr) ? arr : [];
      if(!contains(arr, item, comparator)) {
          arr.push(item);
      }
    return arr;
  }
  function remove(arr, item, comparator) {
    if (angular.isArray(arr)) {
      for (var i = arr.length; i--;) {
        if (comparator(arr[i], item)) {
          arr.splice(i, 1);
          break;
        }
      }
    }
    return arr;
  }
  function postLinkFn(scope, elem, attrs) {
    var checklistModel = attrs.checklistModel;
    attrs.$set("checklistModel", null);
    $compile(elem)(scope);
    attrs.$set("checklistModel", checklistModel);
    var checklistModelGetter = $parse(checklistModel);
    var checklistChange = $parse(attrs.checklistChange);
    var checklistBeforeChange = $parse(attrs.checklistBeforeChange);
    var ngModelGetter = $parse(attrs.ngModel);



    var comparator = function (a, b) {
      if(!isNaN(a) && !isNaN(b)) {
        return String(a) === String(b);
      } else {
        return angular.equals(a,b);
      }
    };

    if (attrs.hasOwnProperty('checklistComparator')){
      if (attrs.checklistComparator[0] == '.') {
        var comparatorExpression = attrs.checklistComparator.substring(1);
        comparator = function (a, b) {
          return a[comparatorExpression] === b[comparatorExpression];
        };

      } else {
        comparator = $parse(attrs.checklistComparator)(scope.$parent);
      }
    }
    var unbindModel = scope.$watch(attrs.ngModel, function(newValue, oldValue) {
      if (newValue === oldValue) {
        return;
      }

      if (checklistBeforeChange && (checklistBeforeChange(scope) === false)) {
        ngModelGetter.assign(scope, contains(checklistModelGetter(scope.$parent), getChecklistValue(), comparator));
        return;
      }

      setValueInChecklistModel(getChecklistValue(), newValue);

      if (checklistChange) {
        checklistChange(scope);
      }
    });
    var unbindCheckListValue = scope.$watch(getChecklistValue, function(newValue, oldValue) {
      if( newValue != oldValue && angular.isDefined(oldValue) && scope[attrs.ngModel] === true ) {
        var current = checklistModelGetter(scope.$parent);
        checklistModelGetter.assign(scope.$parent, remove(current, oldValue, comparator));
        checklistModelGetter.assign(scope.$parent, add(current, newValue, comparator));
      }
    }, true);

    var unbindDestroy = scope.$on('$destroy', destroy);

    function destroy() {
      unbindModel();
      unbindCheckListValue();
      unbindDestroy();
    }

    function getChecklistValue() {
      return attrs.checklistValue ? $parse(attrs.checklistValue)(scope.$parent) : attrs.value;
    }

    function setValueInChecklistModel(value, checked) {
      var current = checklistModelGetter(scope.$parent);
      if (angular.isFunction(checklistModelGetter.assign)) {
        if (checked === true) {
          checklistModelGetter.assign(scope.$parent, add(current, value, comparator));
        } else {
          checklistModelGetter.assign(scope.$parent, remove(current, value, comparator));
        }
      }

    }
    function setChecked(newArr, oldArr) {
      if (checklistBeforeChange && (checklistBeforeChange(scope) === false)) {
        setValueInChecklistModel(getChecklistValue(), ngModelGetter(scope));
        return;
      }
      ngModelGetter.assign(scope, contains(newArr, getChecklistValue(), comparator));
    }
    if (angular.isFunction(scope.$parent.$watchCollection)) {
        scope.$parent.$watchCollection(checklistModel, setChecked);
    } else {
        scope.$parent.$watch(checklistModel, setChecked, true);
    }
  }

  return {
    restrict: 'A',
    priority: 1000,
    terminal: true,
    scope: true,
    compile: function(tElement, tAttrs) {

      if (!tAttrs.checklistValue && !tAttrs.value) {
        throw 'You should provide `value` or `checklist-value`.';
      }
      if (!tAttrs.ngModel) {
        tAttrs.$set("ngModel", "checked");
      }

      return postLinkFn;
    }
  };
}]);

(function(angular, $, _) {
  angular.module('crmResource', []);

  angular.module('crmResource').factory('crmResource', function($q, $http) {
    var deferreds = {}; // null|object; deferreds[url][idx] = Deferred;

    var notify = function notify() {
      var oldDfrds = deferreds;
      deferreds = null;

      angular.forEach(oldDfrds, function(dfrs, url) {
        if (CRM.angular.templates[url]) {
          angular.forEach(dfrs, function(dfr) {
            dfr.resolve({
              status: 200,
              headers: function(name) {
                var headers = {'Content-type': 'text/html'};
                return name ? headers[name] : headers;
              },
              data: CRM.angular.templates[url]
            });
          });
        }
        else {
          angular.forEach(dfrs, function(dfr) {
            dfr.reject({status: 500}); // FIXME
          });
        }
      });
    };

    var moduleUrl = CRM.angular.bundleUrl;
    $http.get(moduleUrl)
      .then(function httpSuccess(response) {
        CRM.angular.templates = CRM.angular.templates || {};
        angular.forEach(response.data, function (module) {
          if (module.partials) {
            angular.extend(CRM.angular.templates, module.partials);
          }
          if (module.strings) {
            CRM.addStrings(module.domain, module.strings);
          }
        });
        notify();
      }, function httpError() {
        notify();
      });

    return {
      getUrl: function getUrl(url) {
        if (CRM.angular.templates && CRM.angular.templates[url]) {
          return CRM.angular.templates[url];
        }
        else {
          var deferred = $q.defer();
          if (!deferreds[url]) {
            deferreds[url] = [];
          }
          deferreds[url].push(deferred);
          return deferred.promise;
        }
      }
    };
  });

  angular.module('crmResource').config(function($provide) {
    $provide.decorator('$templateCache', function($delegate, $http, $q, crmResource) {
      var origGet = $delegate.get;
      var urlPat = /^~\//;
      $delegate.get = function(url) {
        if (urlPat.test(url)) {
          return crmResource.getUrl(url);
        }
        else {
          return origGet.call(this, url);
        }
      };
      return $delegate;
    });
  });


var uidCount = 0,
    pageTitleHTML = 'CiviCRM',
    documentTitle = 'CiviCRM';

  angular.module('crmUi', CRM.angRequires('crmUi'))
    .directive('crmUiAccordion', function() {
      return {
        scope: {
          crmUiAccordion: '='
        },
        template: '<details class="crm-accordion-bold"><summary>{{crmUiAccordion.title}} <a crm-ui-help="help" ng-if="help"></a></summary><div class="crm-accordion-body" ng-transclude></div></details>',
        transclude: true,
        link: function (scope, element, attrs) {
          scope.help = null;
          let openSet = false;
          scope.$watch('crmUiAccordion', function(crmUiAccordion, oldVal) {
            if (crmUiAccordion) {
              if (!openSet) {
                $(element).children('details').prop('open', !crmUiAccordion.collapsed);
                openSet = true;
              }
              if (crmUiAccordion.help) {
                scope.help = crmUiAccordion.help.clone({}, {
                  title: crmUiAccordion.title
                });
              }
            }
          });
        }
      };
    })
    .service('crmUiAlert', function($compile, $rootScope, $templateRequest, $q) {
      var count = 0;
      return function crmUiAlert(params) {
        var id = 'crmUiAlert_' + (++count);
        var tpl = null;
        if (params.templateUrl) {
          tpl = $templateRequest(params.templateUrl);
        }
        else if (params.template) {
          tpl = params.template;
        }
        if (tpl) {
          params.text = '<div id="' + id + '"></div>'; // temporary stub
        }
        var result = CRM.alert(params.text, params.title, params.type, params.options);
        if (tpl) {
          $q.when(tpl, function(html) {
            var scope = params.scope || $rootScope.$new();
            var linker = $compile(html);
            $('#' + id).append($(linker(scope)));
          });
        }
        return result;
      };
    })
    .directive('crmUiDatepicker', function ($timeout) {
      return {
        restrict: 'AE',
        require: 'ngModel',
        scope: {
          crmUiDatepicker: '='
        },
        link: function (scope, element, attrs, ngModel) {
          ngModel.$render = function () {
            element.val(ngModel.$viewValue).change();
          };
          let settings = angular.copy(scope.crmUiDatepicker || {});
          settings.start_date_years = settings.start_date_years || 100;
          settings.end_date_years = settings.end_date_years || 100;

          element
            .crmDatepicker(settings)
            .on('change', function() {
              $timeout(function() {
                let requiredLength = 19;
                if (settings.time === false) {
                  requiredLength = 10;
                }
                if (settings.date === false) {
                  requiredLength = 8;
                }
                ngModel.$setValidity('incompleteDateTime', !(element.val().length && element.val().length !== requiredLength));
              });
            });
        }
      };
    })
    .directive('crmUiDebug', function ($location) {
      return {
        restrict: 'AE',
        scope: {
          crmUiDebug: '@'
        },
        template: function() {
          var args = $location.search();
          if (args && args.angularDebug) {
            var jsonTpl = (CRM.angular.modules.indexOf('jsonFormatter') < 0) ? '<pre>{{data|json}}</pre>' : '<json-formatter json="data" open="1"></json-formatter>';
            return '<div crm-ui-accordion=\'{title: ts("Debug (%1)", {1: crmUiDebug}), collapsed: true}\'>' + jsonTpl + '</div>';
          }
          return '';
        },
        link: function(scope, element, attrs) {
          var args = $location.search();
          if (args && args.angularDebug) {
            scope.ts = CRM.ts(null);
            scope.$parent.$watch(attrs.crmUiDebug, function(data) {
              scope.data = data;
            });
          }
        }
      };
    })
    .directive('crmUiField', function() {
      var templateUrls = {
        default: '~/crmUi/field.html',
        checkbox: '~/crmUi/field-cb.html'
      };

      return {
        require: '^crmUiIdScope',
        restrict: 'EA',
        scope: {
          crmUiField: '='
        },
        templateUrl: function(tElement, tAttrs){
          var layout = tAttrs.crmLayout ? tAttrs.crmLayout : 'default';
          return templateUrls[layout];
        },
        transclude: true,
        link: function (scope, element, attrs, crmUiIdCtrl) {
          $(element).addClass('crm-section');
          scope.help = null;
          scope.$watch('crmUiField', function(crmUiField) {
            if (crmUiField && crmUiField.help) {
              scope.help = crmUiField.help.clone({}, {
                title: crmUiField.title
              });
            }
          });
        }
      };
    })
    .directive('crmUiId', function () {
      return {
        require: '^crmUiIdScope',
        restrict: 'EA',
        link: {
          pre: function (scope, element, attrs, crmUiIdCtrl) {
            var id = crmUiIdCtrl.get(attrs.crmUiId);
            element.attr('id', id);
          }
        }
      };
    })
    .service('crmUiHelp', function(){
      function FieldHelp(options) {
        this.options = options;
      }
      angular.extend(FieldHelp.prototype, {
        get: function(n) {
          return this.options[n];
        },
        open: function open() {
          CRM.help(this.options.title, {id: this.options.id, file: this.options.file});
        },
        clone: function clone(options, defaults) {
          return new FieldHelp(angular.extend({}, defaults, this.options, options));
        }
      });
      return function(defaults){
        return function(options) {
          if (_.isString(options)) {
            options = {id: options};
          }
          return new FieldHelp(angular.extend({}, defaults, options));
        };
      };
    })
    .directive('crmUiHelp', function() {
      return {
        restrict: 'EA',
        link: function(scope, element, attrs) {
          setTimeout(function() {
            var crmUiHelp = scope.$eval(attrs.crmUiHelp);
            var title = crmUiHelp && crmUiHelp.get('title') ? ts('%1 Help', {1: crmUiHelp.get('title')}) : ts('Help');
            element.attr('title', title);
          }, 50);

          element
            .addClass('helpicon')
            .attr('href', '#')
            .on('click', function(e) {
              e.preventDefault();
              scope.$eval(attrs.crmUiHelp).open();
            });
        }
      };
    })
    .directive('crmUiFor', function ($parse, $timeout) {
      return {
        require: '^crmUiIdScope',
        restrict: 'EA',
        template: '<span ng-class="cssClasses"><span ng-transclude/><span crm-ui-visible="crmIsRequired" class="crm-marker" title="This field is required.">*</span></span>',
        transclude: true,
        link: function (scope, element, attrs, crmUiIdCtrl) {
          scope.crmIsRequired = false;
          scope.cssClasses = {};

          if (!attrs.crmUiFor) return;

          var id = crmUiIdCtrl.get(attrs.crmUiFor);
          element.attr('for', id);
          var ngModel = null;

          var updateCss = function () {
            scope.cssClasses['crm-error'] = !ngModel.$valid && !ngModel.$pristine;
          };
          var init = function (retries, retryDelay) {
            var input = $('#' + id);
            if (input.length === 0 && !attrs.crmUiForceRequired) {
              if (retries) {
                $timeout(function(){
                  init(retries-1, retryDelay);
                }, retryDelay);
              }
              return;
            }

            if (attrs.crmUiForceRequired) {
              scope.crmIsRequired = true;
              return;
            }

            var tgtScope = scope;//.$parent;
            if (attrs.crmDepth) {
              for (var i = attrs.crmDepth; i > 0; i--) {
                tgtScope = tgtScope.$parent;
              }
            }

            if (input.attr('ng-required')) {
              scope.crmIsRequired = scope.$parent.$eval(input.attr('ng-required'));
              scope.$parent.$watch(input.attr('ng-required'), function (isRequired) {
                scope.crmIsRequired = isRequired;
              });
            }
            else {
              scope.crmIsRequired = input.prop('required');
            }

            ngModel = $parse(attrs.crmUiFor)(tgtScope);
            if (ngModel) {
              ngModel.$viewChangeListeners.push(updateCss);
            }
          };

          $timeout(function(){
            init(3, 100);
          });
        }
      };
    })
    .directive('crmUiIdScope', function () {
      return {
        restrict: 'EA',
        scope: {},
        controllerAs: 'crmUiIdCtrl',
        controller: function($scope) {
          var ids = {};
          this.get = function(name) {
            if (!ids[name]) {
              ids[name] = "crmUiId_" + (++uidCount);
            }
            return ids[name];
          };
        },
        link: function (scope, element, attrs) {}
      };
    })
    .directive('crmUiIframe', function ($parse) {
      return {
        scope: {
          crmUiIframeSrc: '@', // expression which evaluates to a URL
          crmUiIframe: '@' // expression which evaluates to HTML content
        },
        link: function (scope, elm, attrs) {
          var iframe = $(elm)[0];
          iframe.setAttribute('width', '100%');
          iframe.setAttribute('height', '250px');
          iframe.setAttribute('frameborder', '0');

          var refresh = function () {
            if (attrs.crmUiIframeSrc) {
              iframe.setAttribute('src', scope.$parent.$eval(attrs.crmUiIframeSrc));
            }
            else {
              var iframeHtml = scope.$parent.$eval(attrs.crmUiIframe);

              var doc = iframe.document;
              if (iframe.contentDocument) {
                doc = iframe.contentDocument;
              }
              else if (iframe.contentWindow) {
                doc = iframe.contentWindow.document;
              }

              doc.open();
              doc.writeln(iframeHtml);
              doc.close();
            }
          };
          $(elm).parent().on('dialogresize dialogopen', function(e, ui) {
            $(this).css({padding: '0', margin: '0', overflow: 'hidden'});
            iframe.setAttribute('height', '' + $(this).innerHeight() + 'px');
          });

          $(elm).parent().on('dialogresize', function(e, ui) {
            iframe.setAttribute('class', 'resized');
          });

          scope.$parent.$watch(attrs.crmUiIframe, refresh);
        }
      };
    })
    .directive('crmUiInsertRx', function() {
      return {
        link: function(scope, element, attrs) {
          scope.$on(attrs.crmUiInsertRx, function(e, tokenName) {
            CRM.wysiwyg.insert(element, tokenName);
            $(element).select2('close').select2('val', '');
            CRM.wysiwyg.focus(element);
          });
        }
      };
    })
    .directive('crmUiRichtext', function ($timeout) {
      return {
        require: '?ngModel',
        link: function (scope, elm, attr, ngModel) {
          $timeout(function() {
            var editor = CRM.wysiwyg.create(elm);

            if (!ngModel) {
              return;
            }

            if (attr.ngBlur) {
              $(elm).on('blur', function() {
                $timeout(function() {
                  scope.$eval(attr.ngBlur);
                });
              });
            }

            ngModel.$render = function(value) {
              editor.done(function() {
                CRM.wysiwyg.setVal(elm, ngModel.$viewValue || '');
              });
            };
          });
        }
      };
    })
    .directive('crmUiLock', function ($parse, $rootScope) {
      var defaultVal = function (defaultValue) {
        var f = function (scope) {
          return defaultValue;
        };
        f.assign = function (scope, value) {
        };
        return f;
      };
      var parse = function (expr, defaultValue) {
        return expr ? $parse(expr) : defaultVal(defaultValue);
      };

      return {
        template: '',
        link: function (scope, element, attrs) {
          var binding = parse(attrs.binding, true);
          var titleLocked = parse(attrs.titleLocked, ts('Locked'));
          var titleUnlocked = parse(attrs.titleUnlocked, ts('Unlocked'));

          $(element).addClass('crm-i lock-button');
          var refresh = function () {
            var locked = binding(scope);
            if (locked) {
              $(element)
                .removeClass('fa-unlock')
                .addClass('fa-lock')
                .prop('title', titleLocked(scope))
              ;
            }
            else {
              $(element)
                .removeClass('fa-lock')
                .addClass('fa-unlock')
                .prop('title', titleUnlocked(scope))
              ;
            }
          };

          $(element).click(function () {
            binding.assign(scope, !binding(scope));
            $rootScope.$digest();
          });

          scope.$watch(attrs.binding, refresh);
          scope.$watch(attrs.titleLocked, refresh);
          scope.$watch(attrs.titleUnlocked, refresh);

          refresh();
        }
      };
    })
    .service('CrmUiOrderCtrl', function(){
      function CrmUiOrderCtrl(defaults){
        this.values = defaults;
      }
      angular.extend(CrmUiOrderCtrl.prototype, {
        get: function get() {
          return this.values;
        },
        getDir: function getDir(name) {
          if (this.values.indexOf(name) >= 0 || this.values.indexOf('+' + name) >= 0) {
            return '+';
          }
          if (this.values.indexOf('-' + name) >= 0) {
            return '-';
          }
          return '';
        },
        remove: function remove(name) {
          var idx = this.values.indexOf(name);
          if (idx >= 0) {
            this.values.splice(idx, 1);
            return true;
          }
          else {
            return false;
          }
        },
        setDir: function setDir(name, dir) {
          return this.toggle(name, dir);
        },
        toggle: function toggle(name, next) {
          if (!next && next !== '') {
            next = '+';
            if (this.remove(name) || this.remove('+' + name)) {
              next = '-';
            }
            if (this.remove('-' + name)) {
              next = '';
            }
          }

          if (next == '+') {
            this.values.unshift('+' + name);
          }
          else if (next == '-') {
            this.values.unshift('-' + name);
          }
        }
      });
      return CrmUiOrderCtrl;
    })
    .directive('crmUiOrder', function(CrmUiOrderCtrl) {
      return {
        link: function(scope, element, attrs){
          var options = angular.extend({var: 'crmUiOrderBy'}, scope.$eval(attrs.crmUiOrder));
          scope[options.var] = new CrmUiOrderCtrl(options.defaults);
        }
      };
    })
    .directive('crmUiOrderBy', function() {
      return {
        link: function(scope, element, attrs) {
          function updateClass(crmUiOrderCtrl, name) {
            var dir = crmUiOrderCtrl.getDir(name);
            element
              .toggleClass('sorting_asc', dir === '+')
              .toggleClass('sorting_desc', dir === '-')
              .toggleClass('sorting', dir === '');
          }

          element.on('click', function(e){
            var tgt = scope.$eval(attrs.crmUiOrderBy);
            tgt[0].toggle(tgt[1]);
            updateClass(tgt[0], tgt[1]);
            e.preventDefault();
            scope.$digest();
          });

          var tgt = scope.$eval(attrs.crmUiOrderBy);
          updateClass(tgt[0], tgt[1]);
        }
      };
    })
    .directive('crmUiSelect', function ($parse, $timeout) {
      return {
        require: '?ngModel',
        priority: 1,
        scope: {
          crmUiSelect: '='
        },
        link: function (scope, element, attrs, ngModel) {

          if (ngModel && !attrs.ngOptions) {
            ngModel.$render = function () {
              $timeout(function () {
                var newVal = _.cloneDeep(ngModel.$modelValue);
                if (typeof newVal === 'string' && element.select2('container').hasClass('select2-container-multi')) {
                  newVal = newVal.length ? newVal.split(scope.crmUiSelect.separator || ',') : [];
                }
                element.select2('val', newVal);
              });
            };
          }
          function refreshModel() {
            var oldValue = ngModel.$viewValue, newValue = element.select2('val');
            if (Array.isArray(newValue) && attrs.ngList) {
              newValue = newValue.join(attrs.ngList);
            }
            if (oldValue != newValue) {
              scope.$parent.$apply(function () {
                ngModel.$setViewValue(newValue);
              });
            }
          }

          function init() {
            element.crmSelect2(scope.crmUiSelect || {});
            if (ngModel) {
              element.on('change', refreshModel);
            }
          }
          if (attrs.ngOptions) {
            $timeout(function() {
              element.crmSelect2(scope.crmUiSelect || {});
              ngModel.$render = function () {
                element.val(ngModel.$viewValue || '').change();
              };
            });
          } else {
            init();
          }
        }
      };
    })
    .directive('onCrmUiSelect', function () {
      return {
        priority: 10,
        link: function (scope, element, attrs) {
          element.on('select2-selecting', function(e) {
            e.preventDefault();
            element.select2('close').select2('val', '');
            scope.$apply(function() {
              scope.$eval(attrs.onCrmUiSelect, {selection: e.val});
            });
          });
        }
      };
    })
    .directive('crmEntityref', function ($parse, $timeout) {
      return {
        require: '?ngModel',
        scope: {
          crmEntityref: '='
        },
        link: function (scope, element, attrs, ngModel) {

          ngModel.$render = function () {
            $timeout(function () {
              var newVal = _.cloneDeep(ngModel.$modelValue);
              if (typeof newVal === 'string' && element.select2('container').hasClass('select2-container-multi')) {
                newVal = newVal.length ? newVal.split(',') : [];
              }
              element.select2('val', newVal);
            });
          };
          function refreshModel() {
            var oldValue = ngModel.$viewValue, newValue = element.select2('val');
            if (oldValue != newValue) {
              scope.$parent.$apply(function () {
                ngModel.$setViewValue(newValue);
              });
            }
          }

          function init() {
            element.crmEntityRef(scope.crmEntityref || {});
            element.on('change', refreshModel);
            $timeout(ngModel.$render);
          }

          init();
        }
      };
    })
    .directive('crmAutocomplete', function () {
      return {
        require: {
          crmAutocomplete: 'crmAutocomplete',
          ngModel: '?ngModel'
        },
        priority: 100,
        bindToController: {
          entity: '<crmAutocomplete',
          crmAutocompleteParams: '<',
          multi: '<',
          autoOpen: '<',
          quickAdd: '<',
          staticOptions: '<'
        },
        link: function(scope, element, attr, ctrl) {
          var parseList = function(viewValue) {
            if (_.isUndefined(viewValue)) return;

            if (!ctrl.crmAutocomplete.multi) {
              return viewValue;
            }

            var list = [];

            if (viewValue) {
              _.each(viewValue.split(','), function(value) {
                if (value) {
                  list.push(_.trim(value));
                }
              });
            }

            return list;
          };

          if (ctrl.ngModel) {
            ctrl.ngModel.$render = function() {
              const newValue = (ctrl.ngModel.$viewValue === null || ctrl.ngModel.$viewValue === undefined || ctrl.ngModel.$viewValue === false) ? '' : ctrl.ngModel.$viewValue.toString();
              if (newValue !== element.val().toString()) {
                element.val(newValue).change();
              }
            };
            ctrl.ngModel.$parsers.push(parseList);
            ctrl.ngModel.$formatters.push(function(value) {
              return _.isArray(value) ? value.join(',') : value;
            });
            ctrl.ngModel.$isEmpty = function(value) {
              return !value || !value.length;
            };
          }
        },
        controller: function($element, $timeout) {
          var ctrl = this;
          this.$onChanges = function() {
            $timeout(function() {
              $element.crmAutocomplete(ctrl.entity, ctrl.crmAutocompleteParams || {}, {
                multiple: ctrl.multi,
                minimumInputLength: ctrl.autoOpen && _.isEmpty(ctrl.staticOptions) ? 0 : 1,
                static: ctrl.staticOptions || [],
                quickAdd: ctrl.quickAdd,
              });
            });
          };
        }
      };
    })
    .directive('crmMultipleEmail', function ($parse, $timeout) {
      return {
        require: 'ngModel',
        link: function(scope, element, attrs, ctrl) {
          ctrl.$parsers.unshift(function(viewValue) {
            if (_.isEmpty(viewValue)) {
              ctrl.$setValidity('crmMultipleEmail', true);
              return viewValue;
            }
            var emails = viewValue.split(',');
            var emailRegex = /\S+@\S+\.\S+/;

            var validityArr = emails.map(function(str){
              return emailRegex.test(str.trim());
            });

            if ($.inArray(false, validityArr) > -1) {
              ctrl.$setValidity('crmMultipleEmail', false);
            } else {
              ctrl.$setValidity('crmMultipleEmail', true);
            }
            return viewValue;
          });
        }
      };
    })
    .directive('crmUiTab', function($parse) {
      return {
        require: '^crmUiTabSet',
        restrict: 'EA',
        scope: {
          crmTitle: '@',
          crmIcon: '@',
          count: '@',
          id: '@'
        },
        template: '<div ng-transclude></div>',
        transclude: true,
        link: function (scope, element, attrs, crmUiTabSetCtrl) {
          crmUiTabSetCtrl.add(scope);
        }
      };
    })
    .directive('crmUiTabSet', function() {
      return {
        restrict: 'EA',
        scope: {
          crmUiTabSet: '@',
          tabSetOptions: '<'
        },
        templateUrl: '~/crmUi/tabset.html',
        transclude: true,
        controllerAs: 'crmUiTabSetCtrl',
        controller: function($scope, $element, $timeout) {
          var init;
          $scope.tabs = [];
          this.add = function(tab) {
            if (!tab.id) throw "Tab is missing 'id'";
            $scope.tabs.push(tab);
            if (init) {
              $timeout.cancel(init);
            }
            init = $timeout(function() {
              $element.find('.crm-tabset').tabs($scope.tabSetOptions);
            });
          };
        }
      };
    })
    .directive('crmUiValidate', function() {
      return {
        restrict: 'EA',
        require: 'ngModel',
        link: function(scope, element, attrs, ngModel) {
          var validationKey = attrs.crmUiValidateName ? attrs.crmUiValidateName : 'crmUiValidate';
          scope.$watch(attrs.crmUiValidate, function(newValue){
            ngModel.$setValidity(validationKey, !!newValue);
          });
        }
      };
    })
    .directive('crmUiVisible', function($parse) {
      return {
        restrict: 'EA',
        scope: {
          crmUiVisible: '@'
        },
        link: function (scope, element, attrs) {
          var model = $parse(attrs.crmUiVisible);
          function updatecChildren() {
            element.css('visibility', model(scope.$parent) ? 'inherit' : 'hidden');
          }
          updatecChildren();
          scope.$parent.$watch(attrs.crmUiVisible, updatecChildren);
        }
      };
    })
    .directive('crmUiWizard', function() {
      return {
        restrict: 'EA',
        scope: {
          crmUiWizard: '@',
          crmUiWizardNavClass: '@' // string, A list of classes that will be added to the nav items
        },
        templateUrl: '~/crmUi/wizard.html',
        transclude: true,
        controllerAs: 'crmUiWizardCtrl',
        controller: function($scope, $parse) {
          var steps = $scope.steps = []; // array<$scope>
          var crmUiWizardCtrl = this;
          var maxVisited = 0;
          var selectedIndex = null;

          var findIndex = function() {
            var found = null;
            angular.forEach(steps, function(step, stepKey) {
              if (step.selected) found = stepKey;
            });
            return found;
          };
          this.$index = function() { return selectedIndex; };
          this.$first = function() { return this.$index() === 0; };
          this.$last = function() { return this.$index() === steps.length -1; };
          this.$maxVisit = function() { return maxVisited; };
          this.$validStep = function() {
            return steps[selectedIndex] && steps[selectedIndex].isStepValid();
          };
          this.iconFor = function(index) {
            if (index < this.$index()) return 'crm-i fa-check';
            if (index === this.$index()) return 'crm-i fa-angle-double-right';
            return '';
          };
          this.isSelectable = function(step) {
            if (step.selected) return false;
            return this.$validStep();
          };

          /*** @param Object step the $scope of the step */
          this.select = function(step) {
            angular.forEach(steps, function(otherStep, otherKey) {
              otherStep.selected = (otherStep === step);
              if (otherStep === step && maxVisited < otherKey) maxVisited = otherKey;
            });
            selectedIndex = findIndex();
          };
          /*** @param Object step the $scope of the step */
          this.add = function(step) {
            if (steps.length === 0) {
              step.selected = true;
              selectedIndex = 0;
            }
            steps.push(step);
            steps.sort(function(a,b){
              return a.crmUiWizardStep - b.crmUiWizardStep;
            });
            selectedIndex = findIndex();
          };
          this.remove = function(step) {
            var key = null;
            angular.forEach(steps, function(otherStep, otherKey) {
              if (otherStep === step) key = otherKey;
            });
            if (key !== null) {
              steps.splice(key, 1);
            }
          };
          this.goto = function(index) {
            if (index < 0) index = 0;
            if (index >= steps.length) index = steps.length-1;
            this.select(steps[index]);
          };
          this.previous = function() { this.goto(this.$index()-1); };
          this.next = function() { this.goto(this.$index()+1); };
          if ($scope.crmUiWizard) {
            $parse($scope.crmUiWizard).assign($scope.$parent, this);
          }
        },
        link: function (scope, element, attrs) {
          scope.ts = CRM.ts(null);

          element.find('.crm-wizard-buttons button[ng-click^=crmUiWizardCtrl]').click(function () {
            var topOfWizard = element.offset().top;
            var heightOfMenu = $('#civicrm-menu').height() || 0;

            $('html')
              .stop()
              .animate({scrollTop: topOfWizard - heightOfMenu}, 1000);
          });
        }
      };
    })
    .directive('crmUiWizardButtons', function() {
      return {
        require: '^crmUiWizard',
        restrict: 'EA',
        scope: {},
        template: '<span ng-transclude></span>',
        transclude: true,
        link: function (scope, element, attrs, crmUiWizardCtrl) {
          var realButtonsEl = $(element).closest('.crm-wizard').find('.crm-wizard-buttons');
          $(element).appendTo(realButtonsEl);
        }
      };
    })
    .directive('crmIcon', function() {
      return {
        restrict: 'EA',
        link: function (scope, element, attrs) {
          if (element.is('[crm-ui-tab]')) {
            return;
          }
          if (attrs.crmIcon) {
            if (attrs.crmIcon.substring(0,3) == 'fa-') {
              $(element).prepend('<i class="crm-i ' + attrs.crmIcon + '" aria-hidden="true"></i> ');
            }
            else {
              $(element).prepend('<span class="icon ui-icon-' + attrs.crmIcon + '"></span> ');
            }
          }
          if ($(element).is('button:not(.btn)')) {
            $(element).addClass('crm-button');
          }
        }
      };
    })
    .directive('crmUiWizardStep', function() {
      var nextWeight = 1;
      return {
        require: ['^crmUiWizard', 'form'],
        restrict: 'EA',
        scope: {
          crmTitle: '@', // expression, evaluates to a printable string
          crmUiWizardStep: '@', // int, a weight which determines the ordering of the steps
          crmUiWizardStepClass: '@' // string, A list of classes that will be added to the template
        },
        template: '<div class="crm-wizard-step {{crmUiWizardStepClass}}" ng-show="selected" ng-transclude/></div>',
        transclude: true,
        link: function (scope, element, attrs, ctrls) {
          var crmUiWizardCtrl = ctrls[0], form = ctrls[1];
          if (scope.crmUiWizardStep) {
            scope.crmUiWizardStep = parseInt(scope.crmUiWizardStep);
          } else {
            scope.crmUiWizardStep = nextWeight++;
          }
          scope.isStepValid = function() {
            return form.$valid;
          };
          crmUiWizardCtrl.add(scope);
          scope.$on('$destroy', function(){
            crmUiWizardCtrl.remove(scope);
          });
        }
      };
    })
    .directive('crmConfirm', function ($compile, $rootScope, $templateRequest, $q) {
      var defaultFuncs = {
        'disable': function (options) {
          return {
            message: ts('Are you sure you want to disable this?'),
            options: {no: ts('Cancel'), yes: ts('Disable')},
            width: 300,
            title: ts('Disable %1?', {
              1: options.obj.title || options.obj.label || options.obj.name || ts('the record')
            })
          };
        },
        'revert': function (options) {
          return {
            message: ts('Are you sure you want to revert this?'),
            options: {no: ts('Cancel'), yes: ts('Revert')},
            width: 300,
            title: ts('Revert %1?', {
              1: options.obj.title || options.obj.label || options.obj.name || ts('the record')
            })
          };
        },
        'delete': function (options) {
          return {
            message: ts('Are you sure you want to delete this?'),
            options: {no: ts('Cancel'), yes: ts('Delete')},
            width: 300,
            title: ts('Delete %1?', {
              1: options.obj.title || options.obj.label || options.obj.name || ts('the record')
            })
          };
        }
      };
      var confirmCount = 0;
      return {
        link: function (scope, element, attrs) {
          $(element).click(function () {
            var options = scope.$eval(attrs.crmConfirm);
            if (attrs.title && !options.title) {
              options.title = attrs.title;
            }
            var defaults = (options.type) ? defaultFuncs[options.type](options) : {};

            var tpl = null, stubId = null;
            if (!options.message) {
              if (options.templateUrl) {
                tpl = $templateRequest(options.templateUrl);
              }
              else if (options.template) {
                tpl = options.template;
              }
              if (tpl) {
                stubId = 'crmUiConfirm_' + (++confirmCount);
                options.message = '<div id="' + stubId + '"></div>';
              }
            }

            CRM.confirm(_.extend(defaults, options))
              .on('crmConfirm:yes', function() { scope.$apply(attrs.onYes); })
              .on('crmConfirm:no', function() { scope.$apply(attrs.onNo); });

            if (tpl && stubId) {
              $q.when(tpl, function(html) {
                var scope = options.scope || $rootScope.$new();
                if (options.export) {
                  angular.extend(scope, options.export);
                }
                var linker = $compile(html);
                $('#' + stubId).append($(linker(scope)));
              });
            }
          });
        }
      };
    })
    .directive('crmPageTitle', function($timeout) {
      return {
        scope: {
          crmDocumentTitle: '='
        },
        link: function(scope, $el, attrs) {
          function update() {
            $timeout(function() {
              var newPageTitleHTML = $el.html().trim(),
                newDocumentTitle = scope.crmDocumentTitle || $el.text(),
                dialog = $el.closest('.ui-dialog-content');
              if (dialog.length) {
                dialog.dialog('option', 'title', newDocumentTitle);
                $el.hide();
              } else {
                document.title = $('title').text().replace(documentTitle, newDocumentTitle);
                [].forEach.call(document.querySelectorAll('h1:not(.crm-container h1), .crm-page-title-wrapper>h1'), h1 => {
                  if (h1.classList.contains('crm-page-title') || h1.innerHTML.trim() === pageTitleHTML) {
                    h1.classList.add('crm-page-title');
                    h1.innerHTML = newPageTitleHTML;
                    $el.hide();
                  }
                });
                pageTitleHTML = newPageTitleHTML;
                documentTitle = newDocumentTitle;
              }
            });
          }

          scope.$watch(function() {return scope.crmDocumentTitle + $el.html();}, update);
        }
      };
    })
    .directive("crmUiEditable", function() {
      return {
        restrict: "A",
        require: "ngModel",
        scope: {
          defaultValue: '='
        },
        link: function(scope, element, attrs, ngModel) {
          var ts = CRM.ts();

          function read() {
            var htmlVal = element.text();
            if (!htmlVal) {
              htmlVal = scope.defaultValue || '';
              element.text(htmlVal);
            }
            ngModel.$setViewValue(htmlVal);
          }

          ngModel.$render = function() {
            element.text(ngModel.$viewValue || scope.defaultValue || '');
          };
          element.on('keydown', function(e) {
            if (e.which === 13) {
              e.preventDefault();
              element.blur();
            }
            if (e.which === 27) {
              element.text(ngModel.$viewValue || scope.defaultValue || '');
              element.blur();
            }
          });

          element.on("blur change", function() {
            scope.$apply(read);
          });

          element.attr('contenteditable', 'true');
        }
      };
    })
    .directive('crmUiIconPicker', function($timeout) {
      return {
        restrict: 'A',
        controller: function($element) {
          CRM.loadScript(CRM.config.resourceBase + 'js/jquery/jquery.crmIconPicker.js').then(function() {
            $timeout(function() {
              $element.crmIconPicker();
            });
          });
        }
      };
    })
    .factory('formatForSelect2', function() {
      return function(input, key, label, extra) {
        return _.transform(input, function(result, item) {
          var formatted = {id: item[key], text: item[label]};
          if (extra) {
            _.merge(formatted, _.pick(item, extra));
          }
          result.push(formatted);
        }, []);
      };
    })

    .run(function($rootScope, $location) {
      $rootScope.goto = function(path) {
        $location.path(path);
      };
    });


angular.module('crmUtil', CRM.angRequires('crmUtil'));
  angular.module('crmUtil').factory('crmApi', function($q) {
    var crmApi = function(entity, action, params, message) {
      var deferred = $q.defer();
      var p;
      var backend = crmApi.backend || CRM.api3;
      if (params && params.body_html) {
        params.body_html = params.body_html.replace(/([\u2028]|[\u2029])/g, '\n');
      }
      if (_.isObject(entity)) {
        /*jshint -W061 */
        p = backend(eval('('+angular.toJson(entity)+')'), action);
      } else {
        /*jshint -W061 */
        p = backend(entity, action, eval('('+angular.toJson(params)+')'), message);
      }
      p.then(
        function(result) {
          if (result.is_error) {
            deferred.reject(result);
          } else {
            deferred.resolve(result);
          }
        },
        function(error) {
          deferred.reject(error);
        }
      );
      return deferred.promise;
    };
    crmApi.backend = null;
    crmApi.val = function(value) {
      var d = $.Deferred();
      d.resolve(value);
      return d.promise();
    };
    return crmApi;
  });
  angular.module('crmUtil').factory('crmMetadata', function($q, crmApi) {
    function convertOptionsToMap(options) {
      var result = {};
      angular.forEach(options, function(o) {
        result[o.key] = o.value;
      });
      return result;
    }

    var cache = {}; // cache[entityName+'::'+action][fieldName].title
    var deferreds = {}; // deferreds[cacheKey].push($q.defer())
    var crmMetadata = {
      getField: function getField(entity, field) {
        return $q.when(crmMetadata.getFields(entity)).then(function(fields){
          return fields[field];
        });
      },
      getFields: function getFields(entity) {
        var action = '', cacheKey;
        if (_.isArray(entity)) {
          action = entity[1];
          entity = entity[0];
          cacheKey = entity + '::' + action;
        } else {
          cacheKey = entity;
        }

        if (_.isObject(cache[cacheKey])) {
          return cache[cacheKey];
        }

        var needFetch = _.isEmpty(deferreds[cacheKey]);
        deferreds[cacheKey] = deferreds[cacheKey] || [];
        var deferred = $q.defer();
        deferreds[cacheKey].push(deferred);

        if (needFetch) {
          crmApi(entity, 'getfields', {action: action, sequential: 1, options: {get_options: 'all'}})
            .then(
            function(fields) {
              cache[cacheKey] = _.indexBy(fields.values, 'name');
              angular.forEach(cache[cacheKey],function (field){
                if (field.options) {
                  field.optionsMap = convertOptionsToMap(field.options);
                }
              });
              angular.forEach(deferreds[cacheKey], function(dfr) {
                dfr.resolve(cache[cacheKey]);
              });
              delete deferreds[cacheKey];
            },
            function() {
              cache[cacheKey] = {}; // cache nack
              angular.forEach(deferreds[cacheKey], function(dfr) {
                dfr.reject();
              });
              delete deferreds[cacheKey];
            }
          );
        }

        return deferred.promise;
      }
    };

    return crmMetadata;
  });
  angular.module('crmUtil').factory('crmBlocker', function() {
    return function() {
      var blocks = 0;
      var result = function(promise) {
        blocks++;
        return promise.finally(function() {
          blocks--;
        });
      };
      result.check = function() {
        return blocks > 0;
      };
      return result;
    };
  });

  angular.module('crmUtil').factory('crmLegacy', function() {
    return CRM;
  });
  angular.module('crmUtil').factory('crmLog', function(){
    var level = 0;
    var write = console.log;
    function indent() {
      var s = '>';
      for (var i = 0; i < level; i++) s = s + '  ';
      return s;
    }
    var crmLog = {
      log: function(msg, vars) {
        write(indent() + msg, vars);
      },
      wrap: function(label, f) {
        return function(){
          level++;
          crmLog.log(label + ": start", arguments);
          var r;
          try {
            r = f.apply(this, arguments);
          } finally {
            crmLog.log(label + ": end");
            level--;
          }
          return r;
        };
      }
    };
    return crmLog;
  });

  angular.module('crmUtil').factory('crmNavigator', ['$window', function($window) {
    return {
      redirect: function(path) {
        $window.location.href = path;
      }
    };
  }]);
  angular.module('crmUtil').factory('crmQueue', function($q) {
    return function crmQueue(worker) {
      var queue = [];
      function next() {
        var task = queue[0];
        worker.apply(null, task.a).then(
          function onOk(data) {
            queue.shift();
            task.dfr.resolve(data);
            if (queue.length > 0) next();
          },
          function onErr(err) {
            queue.shift();
            task.dfr.reject(err);
            if (queue.length > 0) next();
          }
        );
      }
      function enqueue() {
        var dfr = $q.defer();
        queue.push({a: arguments, dfr: dfr});
        if (queue.length === 1) {
          next();
        }
        return dfr.promise;
      }
      return enqueue;
    };
  });
  angular.module('crmUtil').factory('crmStatus', function($q){
    return function(options, aPromise){
      if (aPromise) {
        return CRM.toAPromise($q, CRM.status(options, CRM.toJqPromise(aPromise)));
      } else {
        return CRM.toAPromise($q, CRM.status(options));
      }
    };
  });
  angular.module('crmUtil').factory('crmWatcher', function(){
    return function() {
      var unwatches = {}, watchFactories = {}, suspends = {};
      this.setup = function(name, newWatchFactory) {
        watchFactories[name] = newWatchFactory;
        unwatches[name] = watchFactories[name]();
        suspends[name] = 0;
        return this;
      };
      this.suspend = function(name, f) {
        suspends[name]++;
        this.teardown(name);
        var r;
        try {
          r = f.apply(this, []);
        } finally {
          if (suspends[name] === 1) {
            unwatches[name] = watchFactories[name]();
            if (!angular.isArray(unwatches[name])) {
              unwatches[name] = [unwatches[name]];
            }
          }
          suspends[name]--;
        }
        return r;
      };

      this.teardown = function(name) {
        if (!unwatches[name]) return;
        _.each(unwatches[name], function(unwatch){
          unwatch();
        });
        delete unwatches[name];
      };

      return this;
    };
  });
  angular.module('crmUtil').factory('crmThrottle', function($q) {
    var pending = [],
      executing = [];
    return function(func) {
      var deferred = $q.defer();

      function checkResult(result, success) {
        _.pull(executing, func);
        if (_.includes(pending, func)) {
          runNext();
        } else if (success) {
          deferred.resolve(result);
        } else {
          deferred.reject(result);
        }
      }

      function runNext() {
        executing.push(func);
        _.pull(pending, func);
        func().then(function(result) {
          checkResult(result, true);
        }, function(result) {
          checkResult(result, false);
        });
      }

      if (!_.includes(executing, func)) {
        runNext();
      } else if (!_.includes(pending, func)) {
        pending.push(func);
      }
      return deferred.promise;
    };
  });

  angular.module('crmUtil').factory('crmLoadScript', function($q) {
    return function(url) {
      var deferred = $q.defer();

      CRM.loadScript(url).done(function() {
        deferred.resolve(true);
      });

      return deferred.promise;
    };
  });

})(angular, CRM.$, CRM._);
