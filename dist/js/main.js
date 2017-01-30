(function () {

  angular.module('myRecipes', []);

})();

(function () {
  'use strict';

  angular.module('myRecipes')
  .controller('mainCtrl', ["$scope", "dataService", function($scope, dataService) {

    dataService.getData(function(response){

    });

  }]);
})();

(function () {
  'use strict';

  angular.module('myRecipes')
  .service('dataService', ["$http", function($http){

    this.getData = function(callback) {
      
    };

  }]);

})();
