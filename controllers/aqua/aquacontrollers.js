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
          url     : '../../models/insertaquacustomer.php',
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


  $scope.deleteuser=function(acustomer_id,index){
    alert('in delete function');

console.log(acustomer_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteaqua.php',
          data    : {'acustomer_id':acustomer_id}, //forms user object
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

app.controller('Addaquaorderctrl', ['$scope','$http', function($scope,$http) {
  $scope.insertdata=function(addaquaorder){
  $scope.addaquaorder = {};
$scope.addaquaorder = angular.copy(addaquaorder);
console.log($scope.addaquaorder);
   $http({
          method  : 'POST',
          url     : '../../models/insertaquaorder.php',
          data    : $scope.addaquaorder, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              $scope.msg = "data inserted successfully "
               delete $scope.addaquaorder;
                      //$scope.addaaquaform.$setPristine();
            

          });

}

  }]);


app.controller('Listaquaorder', ['$scope','$http', function($scope,$http) {

  $http.get("../../models/getorderdetails.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });



  $scope.deleteorder=function(order_id,index){
    alert('in delete function');

console.log(order_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteorder.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            }

            $scope.setreminder=function(data){
console.log(data);
     $http({
          method  : 'POST',
          url     : '../../models/setreminder.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            }



  }]);

app.controller('Addjardetailsctrl', ['$scope','$http', function($scope,$http){

$scope.insertdata=function(addjardetails){
  $scope.addjardetails = {};
$scope.addjardetails = angular.copy(addjardetails);
console.log($scope.addjardetails);
   $http({
          method  : 'POST',
          url     : '../../models/insertjardetails.php',
          data    : $scope.addjardetails, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              $scope.msg = "data inserted successfully "
               delete $scope.addjardetails;
                      //$scope.addaaquaform.$setPristine();
            

          });

}

  }]);

app.controller('Listjardetailsctrl', ['$scope','$http', function($scope,$http) {

  $http.get("../../models/getjardetails.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });



  $scope.deletejar=function(jar_id,index){
    alert('in delete function');

console.log(jar_id);
     $http({
          method  : 'POST',
          url     : '../../models/deletejardetails.php',
          data    : {'jar_id':jar_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            }



}]);


app.controller('Addvehiclectrl', ['$scope','$http', function($scope,$http){

$scope.insertdata=function(vdetails){
  $scope.vdetails = {};
$scope.vdetails = angular.copy(vdetails);
console.log($scope.vdetails);
   $http({
          method  : 'POST',
          url     : '../../models/insertvehicledetails.php',
          data    : $scope.vdetails, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              $scope.msg = "data inserted successfully "
               delete $scope.vdetails;
                      //$scope.addaaquaform.$setPristine();
            

          });

}

  }]);

app.controller('Listvehiclectrl', ['$scope','$http', function($scope,$http) {

  $http.get("../../models/getvehicledetails.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });



  $scope.deletevehicle=function(vehicle_id,index){
    alert('in delete function');

console.log(vehicle_id);
     $http({
          method  : 'POST',
          url     : '../../models/deletevehicle.php',
          data    : {'vehicle_id':vehicle_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            }



}]);





