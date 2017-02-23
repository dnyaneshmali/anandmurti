                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      /**
 * Created by User on 10/19/14.
 */

app.controller('Aquadashboardctrl', ['$scope','$http', function($scope,$http) {
$scope.container = {width:500, height:300, gap:10};
$scope.bars= [
{color:'#803690', percentage:50},
{color:'#DCDCDC', percentage:30},
{color:'#46BFBD', percentage:100},
{color:'#FDB45C', percentage:90},
];
$scope.setContainer = function() {
return {
'padding-right': $scope.container.gap + 'px',
'width': $scope.container.width + 'px',
'height': $scope.container.height + 'px'
};
};
$scope.setDetails = function(bar, index) {
var barWidth = $scope.container.width/$scope.bars.length - $scope.
container.gap;
return {
height: bar.percentage + '%',
background: bar.color,
width: barWidth/1.3 + 'px',
left: $scope.container.gap + ($scope.container.gap +
barWidth)*index + 'px'
};
};

  $http.get("../../models/getorderreminder.php")
    .success(function(data){
        $scope.reminderdata=data
        console.log($scope.reminderdata);
        $scope.bars= [
{color:'blue', percentage:$scope.reminderdata[0].order_quantity},
{color:'orange', percentage:$scope.reminderdata[1].order_quantity},
{color:'red', percentage:$scope.reminderdata[2].order_quantity},

];
    });

}]);


app.controller('Addaquactrl', ['$scope','$http', function($scope,$http) {
  $scope.reset = function() {
  delete $scope.aquacustomers;
  $scope.addaaquaform.$setPristine();
}


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
              //$scope.msg = "data inserted successfully "

                        delete $scope.aquacustomers;
                        swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                      $scope.addaaquaform.$setPristine();
            

          });

}
}]);


app.controller('Listaquactrl', ['$scope','$http', function($scope,$http) {
  $scope.iseditid='';
    $scope.oldaqua='';
    
    $http.get("../../models/getaquacustomer.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });


  $scope.deleteuser=function(acustomer_id,index){
    //alert('in delete function');
    swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: true
    },
    function(){

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
            });
  }

             $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldaqua){
              $scope.iseditid=id;
              $scope.oldaqua=angular.copy(oldaqua);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldaqua);
              $scope.$watch();
            }
            $scope.initval = function (aquacustomer) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updateaquacustomer=function(aquacustomer,index){
              console.log(aquacustomer);
              $http({
                     method  : 'POST',
                     url     : '../../models/updatelistaquacutomers.php',
                     data    : aquacustomer, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                        $scope.msg = "data inserted successfully ";
                        $scope.listaquacustomerform.$setPristine();
                        delete $scope.oldaqua;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }

}]);

app.controller('Addaquaproductctrl', ['$scope','$http', function($scope,$http) {
   $scope.reset = function() {
  delete $scope.addaquaproduct;
  $scope.addaquaproductform.$setPristine();
}

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
              //$scope.msg = "data inserted successfully "
               delete $scope.addaquaproduct;
               swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
       $scope.addaquaproductform.$setPristine();
            

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
    //alert('in delete function');
    swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: true
    },
    function(){

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
            });

}


}]);

app.controller('Addaquaorderctrl', ['$scope','$http', function($scope,$http) {
   $scope.reset = function() {
  delete $scope.addaquaorder;
  $scope.addaquorderform.$setPristine();
}
  $http.get("../../models/getaquacustomer.php")
    .success(function(data){
        $scope.customerdata=data
        //console.log($scope.customerdata);
    });

     $http.get("../../models/getvehicledetails.php")
    .success(function(data){
        $scope.vehicledata=data
        //console.log($scope.customerdata);
    });

     $http.get("../../models/getjardetails.php")
    .success(function(data){
        $scope.jardata=data
        //console.log($scope.customerdata);
    });


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
              //$scope.msg = "data inserted successfully "
               delete $scope.addaquaorder;
               swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                      $scope.addaquorderform.$setPristine();
            

          });

}

  }]);


app.controller('Listaquaorder', ['$scope','$http', function($scope,$http) {
  $scope.iseditid='';
    $scope.oldorder='';

  $http.get("../../models/getorderdetails.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });



  $scope.deleteorder=function(order_id,index){
    //alert('in delete function');
    swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: true
    },
    function(){

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
            });
  }

            $scope.setreminder=function(order_id,index){
console.log(order_id);
//$scope.setrem = angular.copy(order_id);
//console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/setreminder.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                       //$scope.data.splice(index, 1);
                      // $scope.$watch();

                      });
            }


            $scope.unsetreminder=function(order_id,index){
//console.log(data);
//$scope.setrem = angular.copy(order_id);
console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/unsetreminder.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                      //scope.data.splice(index, 1);
                       //$scope.$watch();

                      });
            }

            $scope.setstatus=function(order_id,index){
//console.log(data);
//$scope.setstatus = angular.copy(order_id);
//console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/setstatus.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                     //   $scope.data.splice(index, 1);
                      //  $scope.$watch();

                      });
            }

            $scope.unsetstatus=function(order_id,index){
//console.log(data);
//$scope.setstatus = angular.copy(data);
//console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/unsetstatus.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                       // $scope.data.splice(index, 1);
                       // $scope.$watch();

                      });
            }


              $scope.geninvoice=function(order_id,index){
                

                 $http({
          method  : 'POST',
          url     : '../../models/getorderinvoice.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
              //$scope.orderinvoicedata = data;
              $scope.orderinvoicedata=data;
                       // $scope.data.splice(index, 1);
                       // $scope.$watch();

                      });



                $('#invoicemodal').modal('toggle');
                //$('#invoicemodal').modal('show');
               // $('#invoicemodal').modal('hide');

            }




             $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldorder){
              $scope.iseditid=id;
              $scope.oldorder=angular.copy(oldorder);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldorder);
              $scope.$watch();
            }
            $scope.initval = function (aquaorder) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updateaquaorder=function(aquaorder,index){
              console.log(aquaorder);
              $http({
                     method  : 'POST',
                     url     : '../../models/updateaquaorders.php',
                     data    : aquaorder, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                      $scope.msg = "data inserted successfully ";
                        $scope.listordertailsform.$setPristine();
                        delete $scope.oldorder;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }

}]);


app.controller('Addjardetailsctrl', ['$scope','$http', function($scope,$http){
 $scope.reset = function() {
  delete $scope.addjardetails;
  $scope.addjardetailsform.$setPristine();
}

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
    //$scope.msg = "data inserted successfully "
               //delete $scope.addjardetails;
                delete $scope.addjardetails;
                        swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});

                      $scope.addjardetailsform.$setPristine();
            

          });

}

  }]);

app.controller('Listjardetailsctrl', ['$scope','$http', function($scope,$http) {
  $scope.iseditid='';
    $scope.oldjar='';

  $http.get("../../models/getjardetails.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });    

  $scope.deletejar=function(jar_id,index){

    //alert('in delete function');
    swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: true
    },
    function(){
 // swal("Deleted!", "Your imaginary file has been deleted.", "success");
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
    });


            }

             $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldjar){
              $scope.iseditid=id;
              $scope.oldjar=angular.copy(oldjar);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldjar);
              $scope.$watch();
            }
            $scope.initval = function (listjar) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updatejardetails=function(listjar,index){
              console.log(listjar);
              $http({
                     method  : 'POST',
                     url     : '../../models/updatejardetails.php',
                     data    : listjar, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                      $scope.msg = "data inserted successfully ";
                        $scope.listjardetailsform.$setPristine();
                        delete $scope.oldjar;
                        $scope.iseditid='';
                        $scope.$watch();

                        
                     });
           
           }
          


}]);

app.controller('Addvehiclectrl', ['$scope','$http', function($scope,$http){
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
          url     : '../../models/insertvehicledetails.php',
          data    : $scope.vdetails, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              //$scope.msg = "data inserted successfully "
               delete $scope.vdetails;
                swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                    $scope.addvehicleform.$setPristine();
            

          });

}

  }]);

app.controller('Listvehiclectrl', ['$scope','$http', function($scope,$http) {
  $scope.iseditid='';
    $scope.oldvehicle='';

  $http.get("../../models/getvehicledetails.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });



  $scope.deletevehicle=function(vehicle_id,index){
    //alert('in delete function');
    swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: true
    },
    function(){

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
            });
  }




             $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldvehicle){
              $scope.iseditid=id;
              $scope.oldvehicle=angular.copy(oldvehicle);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldvehicle);
              $scope.$watch();
            }
            $scope.initval = function (listvehicle) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updatevehicle=function(listvehicle,index){
              console.log(listvehicle);
              $http({
                     method  : 'POST',
                     url     : '../../models/updatevehicledetails.php',
                     data    : listvehicle, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                        $scope.msg = "data inserted successfully ";
                        $scope.listvehicleform.$setPristine();
                        delete $scope.oldvehicle;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }

}]);





