(function () {
  'use strict';

  angular.module('myRecipes')
  .service('dataService', function($http){

    this.getData = function(callback) {
      // $http.get('data/works.json').then(callback);
    };

  });
})();
