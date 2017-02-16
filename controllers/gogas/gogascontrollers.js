
app.controller('Addgogasctrl', ['$scope','$http', function($scope,$http) {
  $scope.reset = function() {
  delete $scope.gogascustomers;
  $scope.addgogasform.$setPristine();

}

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
  $scope.iseditid='';
    $scope.oldgogas='';
    
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
              $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldgogas){
              $scope.iseditid=id;
              $scope.oldgogas=angular.copy(oldgogas);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldgogas);
              $scope.$watch();
            }
            $scope.initval = function (gogascustomer) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updategogascustomers=function(gogascustomer,index){
              console.log(gogascustomer);
              $http({
                     method  : 'POST',
                     url     : '../../models/updategogascustomer.php',
                     data    : gogascustomer, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                      $scope.msg = "data inserted successfully ";
                        $scope.updategogascustomer.$setPristine();
                        delete $scope.oldgogas;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }

}]);


app.controller('Addgogasproductctrl', ['$scope','$http', function($scope,$http) {

$scope.insertdata=function(gogasproduct){
  $scope.gogasproduct = {};
$scope.gogasproduct = angular.copy(gogasproduct);
console.log($scope.gogasproduct);
   $http({
          method  : 'POST',
          url     : '../../models/insertgasproduct.php',
          data    : $scope.gogasproduct, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              $scope.msg = "data inserted successfully "
                //delete $scope.gogasproduct;
               // $scope.connectionform.$setPristine();
            

          });

}

  }]);

app.controller('Listgogasproductctrl', ['$scope','$http', function($scope,$http) {

$http.get("../../models/getgasproducts.php")
    .success(function(data){
        $scope.gasproducts=data
        console.log($scope.gasproducts);
    });

    $scope.deleteproduct=function(product_id,index){
    alert('in delete function');

console.log(product_id);
     $http({
          method  : 'POST',
          url     : '../../models/deletegproduct.php',
          data    : {'product_id': product_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
                        console.log(data);
                        //$scope.data.splice(index, 1);
                       // $scope.$watch();
            
            

          });
}


  }]);




app.controller('Addnewconnectionctrl', ['$scope','$http', function($scope,$http) {
  $scope.reset = function() {
  delete $scope.Connection;
  $scope.connectionform.$setPristine();
  
}

$http.get("../../models/getgogascustomer.php")
    .success(function(data){
        $scope.gcustomerdata=data
        //console.log($scope.gcustomerdata);
    });

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



}]);

app.controller('Listnewconnectionctrl', ['$scope','$http', function($scope,$http) {
  $scope.iseditid='';
    $scope.oldconnection='';
   $http.get("../../models/getnewconnections.php")
    .success(function(data){
        $scope.data=data
        console.log($scope.data);
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
$scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldconnection){
              $scope.iseditid=id;
              $scope.oldconnection=angular.copy(oldconnection);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldconnection);
              $scope.$watch();
            }
            $scope.initval = function (Connection) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updategasconnection=function(Connection,index){
              console.log(Connection);
              $http({
                     method  : 'POST',
                     url     : '../../models/updategasconnection.php',
                     data    : Connection, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                      $scope.msg = "data inserted successfully ";
                        $scope.updateconnectionform.$setPristine();
                        delete $scope.oldconnection;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }

}]);

app.controller('Refilcylinderctrl', ['$scope','$http', function($scope,$http) {
$http.get("../../models/getdistinctconnection.php")
    .success(function(data){
        $scope.connectiondetails=data
        //console.log($scope.connectiondetails);
    });

     $scope.changedname=function(customer){
  $scope.customer = {};
$scope.customer = angular.copy(customer);
console.log($scope.customer);
   $http({
          method  : 'POST',
          url     : '../../models/getuserconnections.php',
          data    : {'customer': customer}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
             $scope.userconnections=data
            console.log($scope.userconnections);
            

          });

}

/*

    $http.get("../../models/getuserconnections.php")
    .success(function(data){
        $scope.userconnections=data
        console.log($scope.userconnections);
    });
*/

    $scope.insertdata=function(refil){
  $scope.refil = {};
$scope.refil = angular.copy(refil);
console.log($scope.refil);
   $http({
          method  : 'POST',
          url     : '../../models/insertrefildetails.php',
          data    : $scope.refil, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              $scope.msg = "data inserted successfully "
                delete $scope.refil;
              $scope.refilform.$setPristine();
            

          });

}
  }]);

app.controller('Listrefilcylinderctrl', ['$scope','$http', function($scope,$http) {
  $scope.iseditid='';
    $scope.oldrefil='';

 $http.get("../../models/getrefildetails.php")
    .success(function(data){
        $scope.refildata=data
        console.log($scope.refildata);
    });


    $scope.deleterefil=function(refil_id,index){
    alert('in delete function');

console.log(refil_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleterefil.php',
          data    : {'refil_id': refil_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
                        console.log(data);
                        //$scope.data.splice(index, 1);
                       // $scope.$watch();
            
            

          });
}

$scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldrefil){
              $scope.iseditid=id;
              $scope.oldrefil=angular.copy(oldrefil);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldrefil);
              $scope.$watch();
            }
            $scope.initval = function (refil) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updategasrefil=function(refil,index){
              console.log(refil);
              $http({
                     method  : 'POST',
                     url     : '../../models/updaterefilform.php',
                     data    : refil, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                      $scope.msg = "data inserted successfully ";
                        $scope.updaterefilform.$setPristine();
                        delete $scope.oldrefil;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }

}]);

app.controller('Addgasvehiclectrl', ['$scope','$http', function($scope,$http){
  $scope.reset = function() {
  delete $scope.vdetails;
  $scope.addvehicleform.$setPristine();
}


$scope.insertdata=function(vdetails){
  $scope.vdetails = {};
$scope.vdetails = angular.copy(vdetails);
console.log($scope.vdetails);
   $http({
          method  : 'POST',
          url     : '../../models/insertgasvehicledetails.php',
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


app.controller('Listgasvehiclectrl', ['$scope','$http', function($scope,$http) {

$http.get("../../models/getgasvehicles.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });



  $scope.deletevehicle=function(gvehicle_id,index){
    alert('in delete function');
console.log(gvehicle_id);
     $http({
          method  : 'POST',
          url     : '../../models/deletegasvehicles.php',
          data    : {'gvehicle_id':gvehicle_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            }


 }]);


app.controller('Addgasinwardsctrl', ['$scope','$http', function($scope,$http) {

 $http.get("../../models/getgasproducts.php")
    .success(function(data){
        $scope.allproducts=data
        console.log($scope.allproducts);
    });

    $http.get("../../models/getgasvehicles.php")
    .success(function(data){
        $scope.vehiclesdata=data
        console.log($scope.vehiclesdata);
    });

    $scope.insertdata=function(gasinwards){
  $scope.gasinwards = {};
$scope.gasinwards = angular.copy(gasinwards);
console.log($scope.gasinwards);
   $http({
          method  : 'POST',
          url     : '../../models/insertgasinwards.php',
          data    : $scope.gasinwards, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              $scope.msg = "data inserted successfully "
               delete $scope.gasinwards;
                      //$scope.addaaquaform.$setPristine();
            

          });

}

  }]);


app.controller('Listgasinwardsctrl', ['$scope','$http', function($scope,$http) {

 $http.get("../../models/getgasinwards.php")
    .success(function(data){
        $scope.gasinwards=data
        console.log($scope.gasinwards);
    });

    $scope.deleteinwards=function(inwards_id,index){
    alert('in delete function');
console.log(inwards_id);
     $http({
          method  : 'POST',
          url     : '../../models/deletegasinwards.php',
          data    : {'inwards_id':inwards_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                       // $scope.data.splice(index, 1);
                       // $scope.$watch();

                      });
            }



  }]);


app.controller('Salegasproductctrl', ['$scope','$http', function($scope,$http) {

 $http.get("../../models/getgasinwards.php")
    .success(function(data){
        $scope.getinwardsproducts=data
        console.log($scope.getinwardsproducts);
    });

    $scope.insertdata=function(salegasproduct){
  $scope.salegasproduct = {};
$scope.salegasproduct = angular.copy(salegasproduct);
console.log($scope.salegasproduct);
   $http({
          method  : 'POST',
          url     : '../../models/insertsaleproducts.php',
          data    : $scope.salegasproduct, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              $scope.msg = "data inserted successfully "
               delete $scope.salegasproduct;
                      //$scope.addaaquaform.$setPristine();
            

          });

}

  }]);