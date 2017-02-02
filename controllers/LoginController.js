var app = angular.module('AnandMurtiLogin', ['ngStorage']);
 
app.controller('loginCtrl', function ($scope, $http, $window, $localStorage) {
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
              console.log(data);
              ssid = data[0].admin_id;
              sname = data[0].admin_username;
              srole = data[0].admin_role;
                $scope.$storage = $localStorage;
                //$localStorage.ssid = ssid;
                //$localStorage.sname = sname;
                $window.localStorage.setItem('ssid',ssid);
                $window.localStorage.setItem('sname',sname);
                $window.localStorage.setItem('srole',srole);
                //console.log($window.localStorage.getItem('srole'));
                //$localStorage.srole = srole;
                if(!$window.localStorage.getItem('ssid') == ''){
                $window.localStorage.setItem('islogin','true');
              }
              //$window.location.href="views/admin/admin.php";
            

          });

}



});