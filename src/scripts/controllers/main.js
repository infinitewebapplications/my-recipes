(function () {
  'use strict';

  angular.module('myRecipes')
  .controller('mainCtrl', function($scope, dataService) {

    dataService.getData(function(response){

    });

  });
})();
