
app.controller('Addgogasctrl', ['$scope','$http', function($scope,$http) {

$scope.insertdata=function(gogascustomers){
  $scope.gogascustomers = {};
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
                delete $scope.gogascustomers;
                $scope.addgogasform.$setPristine();
            

          });

}
}]);
app.controller('Listgogasctrl', ['$scope','$http', function($scope,$http) {
    
    $http.get("../../models/getgogascustomer.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });

$scope.deleteuser=function(gcustomer_id,index){
    alert('in delete function');

console.log(gcustomer_id);
     $http({
          method  : 'POST',
          url     : '../../models/deletegogas.php',
          data    : {'gcustomer_id':gcustomer_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
            console.log(data);
             $scope.data.splice(index, 1);
                        $scope.$watch();
            
            

          });
}



}]);

/*app.controller('Addgogasctrl', ['$scope','$http', function($scope,$http) {
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
}]);*/


app.controller('Addgogasproductctrl', ['$scope','$http', function($scope,$http) {

  }]);

app.controller('Listgogasproductctrl', ['$scope','$http', function($scope,$http) {

  }]);




app.controller('Addnewconnectionctrl', ['$scope','$http', function($scope,$http) {



$scope.insertdata=function(Connection){
  $scope.Connection = {};
$scope.Connection = angular.copy(Connection);
console.log($scope.Connection);
   $http({
          method  : 'POST',
          url     : '../../models/insertnewconnection.php',
          data    : $scope.Connection, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              $scope.msg = "data inserted successfully "
                delete $scope.Connection;
                $scope.connectionform.$setPristine();
            

          });

}



      $scope.customers = ["Lord of the Rings",
                        "Drive",
                        "Science of Sleep",
                        "Back to the Future",
                        "Oldboy"];
      $scope.updatecustomers = function(typed){
          console.log('clicked');
            $scope.customers = ["Lord of the Rings",
                        "Drive",
                        "Science of Sleep",
                        "Back to the Future",
                        "Oldboy"];
      }




























}]);

app.controller('Listnewconnectionctrl', ['$scope','$http', function($scope,$http) {
   $http.get("../../models/getnewconnections.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });

$scope.deleteuser=function(connection_id,index){
    alert('in delete function');

console.log(connection_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteconection.php',
          data    : {'connection_id': connection_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
            console.log(data);
             $scope.data.splice(index, 1);
                        $scope.$watch();
            
            

          });
}



}]);

