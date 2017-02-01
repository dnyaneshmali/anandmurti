var app = angular.module('AnandMurtiLogin', ['ngStorage']);
 
app.controller('loginCtrl', function ($scope, $http,$window,$localStorage) {
// $scope.data = {};
    $scope.login=function(loginadmin){
        $scope.data = angular.copy(loginadmin);
        //console.log($scope.data);
     $http({
          method  : 'POST',
          url     : 'LoginAction.php',
          data    : $scope.data, //forms user object
          //dataType:"json",
         // contentType:"application/json; charset=utf-8",
          headers : {'Content-Type': 'Content-Type: application/json'} 
         })

     .success(function(data) {
              console.log(data);
              $scope.$storage = $localStorage;
              $localStorage.ssid = 1;
              $localStorage.ssname = 'dnyanesh';
              //$scope.ssid = $localStorage.ssid;
              //$scope.ssname = $localStorage.ssname;
              //$window.location.href="views/admin/admin.php";
            

          });

}



});