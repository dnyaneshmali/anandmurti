var app = angular.module('AnandMurtiLogin', []);
 
app.controller('loginCtrl', function ($scope, $http,$window) {
// $scope.data = {};
    $scope.login=function(loginadmin){
        $scope.data = angular.copy(loginadmin);
        //console.log($scope.data);
     $http({
          method  : 'POST',
          url     : 'LoginAction.php',
          data    : $scope.data, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
              $scope.msg = "data inserted successfully"
            

          });

}



});