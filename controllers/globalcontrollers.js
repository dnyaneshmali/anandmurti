/**
 * Created by User on 10/19/14.
 */
 app.controller('Dashboard', ['$scope', function($scope) {
    $scope.homepage = "Dashboard";
}]);
app.controller('Aqua', ['$scope', function($scope) {
    $scope.homepage = "Aqua";
}]);
app.controller('Gogas', ['$scope', function($scope) {
    $scope.homepage = "Gogas";
}]);

app.controller('Userlistctrl', ['$scope','$http', function($scope,$http) {
    
    $http.get("../../models/getuser.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });


  $scope.deleteuser=function(user_id){
    alert('in delete function');

console.log(user_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteuser.php',
          data    : {'user_id':user_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
            console.log(data);

          });
}



}]);


app.controller('Adduserctrl', ['$scope','$http', function($scope,$http) {
$scope.user = {};
$scope.insertdata=function(user){
$scope.user = angular.copy(user);
//console.log( $scope.user );
	 $http({
          method  : 'POST',
          url     : '../../models/insertuser.php',
          data    : $scope.user, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
           if (data.errors) {
              // Showing errors.
              $scope.errorName = data.errors.name;
              $scope.errorUserName = data.errors.username;
              $scope.errorEmail = data.errors.email;
            } else {
              $scope.message = data.message;
            }

          });

}
}]);
