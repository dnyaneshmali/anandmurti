var app = angular.module('AnandMurtiLogin',['ngRoute']);

app.config(function($routeProvider) {
    $routeProvider

        //default page
        .when('/', {
            templateUrl : 'pages/homepage.html',
            controller  : 'Homepage'
        })

        //page2
        .when('/about', {
            templateUrl : 'pages/about.html',
            controller  : 'About'
        })

        //page2
        .when('/date', {
            templateUrl : 'pages/date.html',
            controller  : 'Date'
        })


        //page2
        .when('/santosh', {
            templateUrl : 'pages/santosh.html',
            controller  : 'santosh'
        });
});