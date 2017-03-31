
var app = angular.module('app',['ngRoute','ngStorage','validation.match','autocomplete','datePicker']);

app.config(function($routeProvider) {
    $routeProvider
    .when('/', {
            templateUrl : 'dashboard.php',
            controller  : 'Dashboard'
        })

        .when('/myaccount', {
            templateUrl : 'myaccount.php',
            controller  : 'Addmyaccountctrl'
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
         .when('/aquaorderinvoice', {
            templateUrl : 'aqua/aquaorderinvoice.php',
            controller  : 'Aquaorderinvoice'
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
       .when('/addaquaexpensive', {
            templateUrl : 'aqua/addaquaexpensive.php',
            controller  : 'Addaquaexpensive'
        })
      .when('/listaquaexpensive', {
            templateUrl : 'aqua/listaquaexpensive.php',
            controller  : 'Listaquaexpensive'
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

     .when('/connectioninvoice', {
            templateUrl : 'gogas/connectioninvoice.php',
            controller  : 'Connectioninvoicectrl'
        })

     .when('/refilcylinder', {
            templateUrl : 'gogas/refil_cylinder.php',
            controller  : 'Refilcylinderctrl'
        })

      .when('/listrefilcylinder', {
            templateUrl : 'gogas/listrefilcylinder.php',
            controller  : 'Listrefilcylinderctrl'
        })

      .when('/refilinvoice', {
            templateUrl : 'gogas/refilcinvoice.php',
            controller  : 'Refilinvoicectrl'
        })


      .when('/addgasinwards', {
            templateUrl : 'gogas/addgasinwards.php',
            controller  : 'Addgasinwardsctrl'
        })

      .when('/listgasinwards', {
            templateUrl : 'gogas/listgasinwards.php',
            controller  : 'Listgasinwardsctrl'
        })

      .when('/gasproductstatus', {
            templateUrl : 'gogas/gasproductstatus.php',
            controller  : 'Productstatusctrl'
        })

      .when('/addgasvehicles', {
            templateUrl : 'gogas/addgasvehicles.php',
            controller  : 'Addgasvehiclectrl'
        })
      .when('/listgasvehicles', {
            templateUrl : 'gogas/listgasvehicles.php',
            controller  : 'Listgasvehiclectrl'
        })

      .when('/saleproducts', {
            templateUrl : 'gogas/salegasproducts.php',
            controller  : 'Salegasproductctrl'
        })
      .when('/gogasproductinvoice', {
            templateUrl : 'gogas/gogasproductinvoice.php',
            controller  : 'Gogasproductinvoicectrl'
        })

      .when('/listsoldproducts', {
            templateUrl : 'gogas/listsaleproducts.php',
            controller  : 'Listsalegasproductctrl'
        })
       

        .when('/addgogasexpensive', {
            templateUrl : 'gogas/addgogasexpensive.php',
            controller  : 'Addgogasexpensive'
        })
      .when('/listgogasexpensive', {
            templateUrl : 'gogas/listgogasexpensive.php',
            controller  : 'Listgogasexpensive'
        })



     .when('/adminlist', {
            templateUrl : 'adminlist.php',
            controller  : 'Adminlistctrl'
        })
      .when('/addadmin', {
            templateUrl : 'Addadmin.php',
            controller  : 'Addadminctrl'
        })
      /*.when('/addexpensive', {
            templateUrl : 'addexpensive.php',
            controller  : 'Addexpensive'
        })
      .when('/listexpensive', {
            templateUrl : 'listexpensive.php',
            controller  : 'Listexpensive'
        })*/

});
