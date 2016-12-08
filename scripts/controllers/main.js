(function () {
  'use strict';

  angular.module('myRecipes')
  .controller('mainCtrl', function($scope, dataService) {

    $scope.works = [];

    dataService.getData(function(response){
      // $scope.works = response.data;
    });

  });
})();
