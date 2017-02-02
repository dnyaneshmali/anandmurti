
var app = angular.module('app',['ngRoute','ngStorage']);

app.config(function($routeProvider) {
    $routeProvider
    .when('/', {
            templateUrl : 'dashboard.php',
            controller  : 'Dashboard'
        })

        .when('/myaccount', {
            templateUrl : 'myaccount.php',
            controller  : 'Myacccountctrl'
        })


     .when('/aqua', {
            templateUrl : 'aqua/aquadashboard.php',
            controller  : 'Aqua'
        })
     .when('/addaquacustomer', {
            templateUrl : 'aqua/addaquacustomer.php',
            controller  : 'Addaquactrl'
        })
     .when('/listaquacustomer', {
            templateUrl : 'aqua/listaquacustomer.php',
            controller  : 'Listaquactrl'
        })
     .when('/addaquaproducts', {
            templateUrl : 'aqua/addaquaproducts.php',
            controller  : 'Addaquaproductctrl'
        })
     .when('/listaquaproduct', {
            templateUrl : 'aqua/listaquaproduct.php',
            controller  : 'Listaquaproductctrl'
        })
     .when('/gogas', {
            templateUrl : 'gogas/gogasdashboard.php',
            controller  : 'Gogas'
        })
     .when('/addgogascustomer', {
            templateUrl : 'gogas/addgogascustomer.php',
            controller  : 'Addgogasctrl'
        })
     .when('/listgogascustomer', {
            templateUrl : 'gogas/listgogascustomer.php',
            controller  : 'Listgogasctrl'
        })
     .when('/adminlist', {
            templateUrl : 'adminlist.php',
            controller  : 'Adminlistctrl'
        })
      .when('/addadmin', {
            templateUrl : 'Addadmin.php',
            controller  : 'Addadminctrl'
        })

});
