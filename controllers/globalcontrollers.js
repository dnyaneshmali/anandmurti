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
/* app.controller('Addaquactrl', ['$scope', function($scope) {
    //$scope.homepage = "Gogas";
}]);
app.controller('Listaquactrl', ['$scope', function($scope) {
    //$scope.homepage = "Gogas";
}]); */

app.controller('Adminlistctrl', ['$scope','$http', function($scope,$http) {
    
    $http.get("../../models/getadmin.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });


  $scope.deleteuser=function(admin_id){
    alert('in delete function');

console.log(admin_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteadmin.php',
          data    : {'admin_id':admin_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
            console.log(data);

          });
}



}]);


