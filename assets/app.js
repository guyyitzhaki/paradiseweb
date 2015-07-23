/**
 * Created by guyy on 8/7/15.
 */
(function() {
    var app = angular.module('paradisehotel', []);

    app.controller("AppController", function($scope) {

        $scope.Math = window.Math;


    });

    app.filter("range", function() {
        return function(input, total) {
            total = parseInt(total);
            for (var i = 0; i < total; i++) {
                input.push(i);
            }
            return input;
        };
    });

    myApp.controller('GreetingController', ['$scope', function($scope) {
        $scope.greeting = 'Hola!';
    }]);




})();