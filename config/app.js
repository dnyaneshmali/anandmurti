
var app = angular.module('app',['ngRoute','ngStorage','validation.match','autocomplete']);

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


     .when('/aquadashboard', {
            templateUrl : 'aqua/aquadashboard.php',
            controller  : 'Aquadashboardctrl'
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
        .when('/addaquaorder', {
            templateUrl : 'aqua/addaquaorder.php',
            controller  : 'Addaquaorderctrl'
        })
         .when('/listaquaorder', {
            templateUrl : 'aqua/listaquaorder.php',
            controller  : 'Listaquaorder'
        })
       .when('/addjardetails', {
            templateUrl : 'aqua/addjardetails.php',
            controller  : 'Addjardetailsctrl'
        })

       .when('/listjardetails', {
            templateUrl : 'aqua/listjardetails.php',
            controller  : 'Listjardetailsctrl'
        })
       .when('/addvehicledetails', {
            templateUrl : 'aqua/addvehicledetails.php',
            controller  : 'Addvehiclectrl'
        })
       .when('/listvehicledetails', {
            templateUrl : 'aqua/listvehicledetails.php',
            controller  : 'Listvehiclectrl'
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
     .when('/addgogasproduct', {
            templateUrl : 'gogas/addgogasproduct.php',
            controller  : 'Addgogasproductctrl'
        })
     .when('/listgogasproduct', {
            templateUrl : 'gogas/listgogasproduct.php',
            controller  : 'Listgogasproductctrl'
        })
     .when('/addnewconnection', {
            templateUrl : 'gogas/addnewconnection.php',
            controller  : 'Addnewconnectionctrl'
        })
     .when('/listnewconnection', {
            templateUrl : 'gogas/listnewconnection.php',
            controller  : 'Listnewconnectionctrl'
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
