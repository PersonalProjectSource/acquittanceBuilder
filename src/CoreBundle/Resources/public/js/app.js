'use strict';

var mainMod = angular.module('ownerMainMod',['ngRoute']);

mainMod.config(['$routeProvider',
    function($routeProvider){
        $routeProvider.
            when('/', {
                templateUrl: 'bundles/core/partials/quittance_form.html',
                controller: 'quittanceController'
            }).
            when('/resume', {
                templateUrl: 'bundles/core/partials/quittance_resume.html',
            }).
            when('/createPdf', {
                templateUrl: 'bundles/core/partials/pdf_generation.html',
                controller: 'pdfController'
            }).
            otherwise({
                redirectTo: '/'
            });
    }]);