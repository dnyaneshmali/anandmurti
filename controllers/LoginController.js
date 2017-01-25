var app = angular.module('AnandMurtiLogin', []);
 
app.controller('loginCtrl', function ($scope, $http) {
 
    $scope.login = function () {
 
            var request = $http({
                method: "post",
                url: "LoginAction.php",
                data: {
                    email: $scope.email,
                    password: $scope.password
                },
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            });
            /* Successful HTTP post request or not */
            request.success(function (data) {
                if(data == "1"){
                  // $location.path('/views/aqua.php');


                    $scope.responseMessage = "Successfully Logged In";
                    $scope.email="";
                    $scope.password="";
                }
                else {
                    $scope.responseMessage = "Username or Password is incorrect";
                }
            });
    }
});