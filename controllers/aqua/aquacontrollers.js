/**
 * Created by User on 10/19/14.
 */
app.controller('Addaquactrl', ['$scope','$http', function($scope,$http) {
$scope.aquacustomers = {};
$scope.insertdata=function(aquacustomers){
$scope.aquacustomers = angular.copy(aquacustomers);
console.log($scope.aquacustomers);
	 $http({
          method  : 'POST',
          url     : '../../models/insertcustomer.php',
          data    : $scope.aquacustomers, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              $scope.msg = "data inserted successfully "
            

          });

}
}]);


app.controller('Listaquactrl', ['$scope','$http', function($scope,$http) {
    
    $http.get("../../models/getaquacustomer.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });


  $scope.deleteuser=function(customer_id){
    alert('in delete function');

console.log(customer_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteaqua.php',
          data    : {'customer_id':customer_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
            console.log(data);
            

          });
}



}]);