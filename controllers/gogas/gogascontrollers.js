
app.controller('Addgogasctrl', ['$scope','$http', function($scope,$http) {
$scope.gogascustomers = {};
$scope.insertdata=function(gogascustomers){
$scope.gogascustomers = angular.copy(gogascustomers);
console.log($scope.gogascustomers);
	 $http({
          method  : 'POST',
          url     : '../../models/insertgogascustomer.php',
          data    : $scope.gogascustomers, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              $scope.msg = "data inserted successfully "
            

          });

}
}]);
app.controller('Listgogasctrl', ['$scope','$http', function($scope,$http) {
    
    $http.get("../../models/getgogascustomer.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });

$scope.deleteuser=function(customer_id){
    alert('in delete function');

console.log(customer_id);
     $http({
          method  : 'POST',
          url     : '../../models/deletegogas.php',
          data    : {'customer_id':customer_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
            console.log(data);
            

          });
}



}]);

app.controller('Addgogasctrl', ['$scope','$http', function($scope,$http) {
$scope.gogascustomers = {};
$scope.insertdata=function(gogascustomers){
$scope.gogascustomers = angular.copy(gogascustomers);
console.log($scope.gogascustomers);
   $http({
          method  : 'POST',
          url     : '../../models/insertgogascustomer.php',
          data    : $scope.gogascustomers, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              $scope.msg = "data inserted successfully "
            

          });

}
}]);