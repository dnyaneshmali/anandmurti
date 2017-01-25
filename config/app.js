
var app = angular.module('app',['ngRoute']);

app.config(function($routeProvider) {
    $routeProvider
    .when('/', {
            templateUrl : 'dashboard.php',
            controller  : 'Dashboard'
        })
     .when('/aqua', {
            templateUrl : 'aqua/aquadashboard.php',
            controller  : 'Aqua'
        })
     .when('/gogas', {
            templateUrl : 'gogas/gogasdashboard.php',
            controller  : 'Gogas'
        })
     .when('/userlist', {
            templateUrl : 'userlist.php',
            controller  : 'Userlistctrl'
        })
      .when('/adduser', {
            templateUrl : 'adduser.php',
            controller  : 'Adduserctrl'
        })

});
