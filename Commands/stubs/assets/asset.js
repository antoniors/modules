"use strict";

App.controller("$STUDLY_NAME$Controller", function ($scope, Request) {
    Request.urlBase = "$STUDLY_NAME$/$STUDLY_NAME$"
    $scope.$LOWER_NAME$ = {};
    $scope.$LOWER_NAME$s = [];


    $scope.store = function () {
        Request.store({
            data: $scope.$LOWER_NAME$
        }).then(function (response) {
            $scope.$LOWER_NAME$ = response.data;
        });
    };

    $scope.get = function (id) {
        Request.get({
            id: id
        }).then(function (response) {
            $scope.$LOWER_NAME$ = response.data;
        });
    };

    $scope.update = function () {
        Request.store({
            data: $scope.$LOWER_NAME$,
            id: $scope.$LOWER_NAME$.id
        }).then(function (response) {
            $scope.$LOWER_NAME$ = response.data;
        });
    };

    $scope.list = function () {
        Request.list().then(function (response) {
            $scope.$LOWER_NAME$s = response.data;
        });
    };

});