/**
 * Created by User on 10/19/14.
 */
app.controller('Addaquactrl', ['$scope','$http', function($scope,$http) {
$scope.insertdata=function(aquacustomers){
  $scope.aquacustomers = {};

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

                        delete $scope.aquacustomers;
                      $scope.addaaquaform.$setPristine();
            

          });

}
}]);


app.controller('Listaquactrl', ['$scope','$http', function($scope,$http) {
    
    $http.get("../../models/getaquacustomer.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });


  $scope.deleteuser=function(customer_id,index){
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
                     $scope.data.splice(index, 1);
                        $scope.$watch();
            

          });
}



}]);

app.controller('Addaquaproductctrl', ['$scope','$http', function($scope,$http) {

$scope.insertdata=function(addaquaproduct){
  $scope.addaquaproduct = {};
$scope.addaquaproduct = angular.copy(addaquaproduct);
console.log($scope.addaquaproduct);
   $http({
          method  : 'POST',
          url     : '../../models/insertaquaproduct.php',
          data    : $scope.addaquaproduct, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              $scope.msg = "data inserted successfully "
               delete $scope.addaquaproduct;
                      //$scope.addaaquaform.$setPristine();
            

          });

}
}]);
app.controller('Listaquaproductctrl', ['$scope','$http', function($scope,$http) {
    
    $http.get("../../models/getaquaproduct.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });


  $scope.deleteuser=function(product_id,index){
    alert('in delete function');

console.log(product_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteaquaproduct.php',
          data    : {'product_id':product_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            }



}]);

app.controller('Addaquaorder', ['$scope','$http', function($scope,$http) {

  }]);


app.controller('Listaquaorder', ['$scope','$http', function($scope,$http) {

  }]);




app.controller('Trackjardetails', ['$scope','$http', function($scope,$http) {

  }]);





