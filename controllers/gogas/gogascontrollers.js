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
              //$scope.msg = "data inserted successfully "
                delete $scope.gogascustomers;
                 swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
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
  delete $scope.unsetedit();
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
});
   }
              $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldgogas){
              if($scope.oldgogas){
                var index1 = getIndexOf($scope.data, $scope.iseditid, "gcustomer_id");
                $scope.data[index1]=angular.copy($scope.oldgogas);
                delete $scope.oldgogas;
              }
              $scope.iseditid=id;
              $scope.oldgogas=angular.copy(oldgogas);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldgogas);
              console.log($scope.data[id]);
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
function getIndexOf(arr, val, prop) {
              var l = arr.length,
                k = 0;
              for (k = 0; k < l; k = k + 1) {
                if (arr[k][prop] === val) {
                  return k;
                }
              }
              return false;
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
              //$scope.msg = "data inserted successfully "
                delete $scope.gogasproduct;
                swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                $scope.addgogasproductform.$setPristine();

            

          });

}

  }]);

app.controller('Listgogasproductctrl', ['$scope','$http', function($scope,$http) {
   $scope.iseditid='';
    $scope.oldproduct='';
    

$http.get("../../models/getgasproducts.php")
    .success(function(data){
        $scope.gasproducts=data
        //console.log($scope.gasproducts);
    });

    $scope.deleteproduct=function(product_id,index){
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
          url     : '../../models/deletegproduct.php',
          data    : {'product_id': product_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
                        console.log(data);
                        $scope.gasproducts.splice(index, 1);
                        $scope.$watch();
            
            

          });
});
  }

$scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldproduct){
              if($scope.oldproduct){
                var index1 = getIndexOf($scope.data, $scope.iseditid, "product_id");
                $scope.data[index1]=angular.copy($scope.oldproduct);
                delete $scope.oldproduct;
              }
              $scope.iseditid=id;
              $scope.oldproduct=angular.copy(oldproduct);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              console.log();
              $scope.iseditid='';
              $scope.gasproducts[id]=angular.copy($scope.oldproduct);

              $scope.$watch();
            }
            $scope.initval = function (gogasproduct) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updategasproduct=function(gogasproduct,index){
              console.log(gogasproduct);
              $http({
                     method  : 'POST',
                     url     : '../../models/updateproductlist.php',
                     data    : gogasproduct, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                        $scope.msg = "data inserted successfully ";
                        $scope.listproductsform.$setPristine();
                        delete $scope.oldproduct;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }
          function getIndexOf(arr, val, prop) {
              var l = arr.length,
                k = 0;
              for (k = 0; k < l; k = k + 1) {
                if (arr[k][prop] === val) {
                  return k;
                }
              }
              return false;
            }
          

}]);






app.controller('Addnewconnectionctrl', ['$scope','$http', function($scope,$http) {
  
   
   $scope.reset = function(){
        $scope.gcustomerdata = "";
        $scope.c_type = "";
       $scope.connection_cylinder_deposit = "";
        $scope.connection_depreciation = "";
        $scope.connection_other = "";
        $scope.connection_passbook = "";
        $scope.connection_stamp = "";
        $scope.connection_hotplate = "";
        $scope.connection_tube = "";
        $scope.connection_lighter = "";
        $scope.connection_tprice="";
       
             
                   }
              
                    
          
          $scope.reset();

      
$http.get("../../models/getgogascustomer.php")
    .success(function(data){
        $scope.gcustomerdata=data;
        //console.log($scope.gcustomerdata);
        $scope.connection_tprice=1000;
    });

$scope.insertdata=function(){

  $scope.customer = angular.copy($scope.customer);
  //alert($scope.customer);
  $scope.c_type = angular.copy($scope.c_type);
  $scope.connection_cylinder_deposit = angular.copy($scope.connection_cylinder_deposit);
  $scope.connection_depreciation = angular.copy($scope.connection_depreciation);
  $scope.connection_hotplate = angular.copy($scope.connection_hotplate);
  $scope.connection_passbook = angular.copy($scope.connection_passbook);
  $scope.connection_stamp = angular.copy($scope.connection_stamp);
  $scope.connection_tube = angular.copy($scope.connection_tube);
  $scope.connection_lighter = angular.copy($scope.connection_lighter);
  $scope.connection_other = angular.copy($scope.connection_other);
  $scope.connection_tprice = angular.copy($scope.connection_tprice);

   $http({
          method  : 'POST',
          url     : '../../models/insertnewconnection.php',
          data    : {'customer':$scope.customer,'c_type':$scope.c_type,'connection_cylinder_deposit':$scope.connection_cylinder_deposit,'connection_depreciation':$scope.connection_depreciation,'connection_hotplate':$scope.connection_hotplate,'connection_passbook':$scope.connection_passbook,'connection_stamp':$scope.connection_stamp,'connection_tube':$scope.connection_tube,'connection_lighter':$scope.connection_lighter,'connection_other':$scope.connection_other,'connection_tprice':$scope.connection_tprice}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              //$scope.msg = "data inserted successfully "
                $scope.customer="";
                 $scope.c_type="";
                   $scope.connection_cylinder_deposit="";
                    $scope.connection_depreciation="";
                    $scope.connection_hotplate="";
                    $scope.connection_passbook="";
                    $scope.connection_stamp="";
                    $scope.connection_tube="";
                   $scope.connection_lighter="";
                    $scope.connection_other="";
                    $scope.connection_tprice="";

               swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});

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

console.log(connection_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteconection.php',
          data    : {'connection_id':connection_id}, //forms user object
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
            $scope.setedit=function(id,oldconnection){
              if($scope.oldconnection){
                var index1 = getIndexOf($scope.data, $scope.iseditid, "connection_id");
                $scope.data[index1]=angular.copy($scope.oldconnection);
                delete $scope.oldconnection;
              }
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
                      $scope.msg = "data inserted successfully";
                        $scope.updateconnectionform.$setPristine();
                        delete $scope.oldconnection;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }
           function getIndexOf(arr, val, prop) {
              var l = arr.length,
                k = 0;
              for (k = 0; k < l; k = k + 1) {
                if (arr[k][prop] === val) {
                  return k;
                }
              }
              return false;
            }

            $scope.connectioninvoice=function(connection_id){

                $('#printSection').modal('toggle');
                //$('#invoicemodal').modal('show');
               // $('#invoicemodal').modal('hide');
              //console.log(connection_id);


              $http({
          method  : 'POST',
          url     : '../../models/getconnsingleinv.php',
          data    : {'connection_id':connection_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
             // console.log(data);
              $scope.singlecinv=data;
              $scope.cinvoice_tax = data[0].cinvoice_tax;
              $scope.cinvoice_id = data[0].cinvoice_id;
              $scope.cinvoice_amount = data[0].cinvoice_amount;
              $scope.cinvoice_date = data[0].cinvoice_date;
                  //console.log($scope.rinvoice_tax);
                      });



              $http.get("../../models/getconninvoiceid.php")
          .success(function(data){
            var nextinvoiceid=data;
            //console.log(nextinvoiceid);
            $scope.cinvoice_id = data[0].cinvoice_id;
            console.log($scope.cinvoice_id);
            var lastinvoiceid = $scope.cinvoice_id;
            var addone = 1;
            var currentinoiveid = +lastinvoiceid + +addone;
            $scope.cinvoiceid = currentinoiveid;
            console.log(currentinoiveid);
    });


            $http({
          method  : 'POST',
          url     : '../../models/getconnectioninvoice.php',
          data    : {'connection_id':connection_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
              console.log(data);

              $scope.connectioninvoice=data;
              $scope.gcustomer_id = data[0].gcustomer_id;
              //console.log($scope.gcustomer_id)
              $scope.connection_id = data[0].connection_id;
              $scope.subotal = data[0].connection_tprice;
              //console.log($scope.subotal);
              var csubotal = $scope.subotal;
              //$scope.csubotal = csubotal;
              //console.log($scope.csubotal);
              $scope.cdate = new Date();
               $scope.duedate = new Date();
              $scope.ctax = 10;
              var ctax = 10;
              var cftotal = +csubotal + +$scope.ctax;
              console.log(cftotal);
              $scope.ftotal = cftotal;
                       // $scope.data.splice(index, 1);
                       // $scope.$watch(); */

                      });


     $http({
          method  : 'POST',
          url     : '../../models/checkconninv.php',
          data    : {'connection_id':connection_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
              //console.log(data);
              $scope.checkconninv=data;
              console.log($scope.checkconninv);
                       // $scope.data.splice(index, 1);
                       // $scope.$watch(); */

                      });




            }


            $scope.changedctax=function(ctax,connection_id){
                $scope.ctax = {};
                $scope.ctax = angular.copy(ctax);
                console.log($scope.ctax);
                $scope.connection_id = {};
                $scope.connection_id = angular.copy(connection_id);
                console.log($scope.connection_id);

              $http({
          method  : 'POST',
          url     : '../../models/getconnectioninvoice.php',
          data    : {'connection_id':connection_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              //console.log(data);
              var csubotal = data[0].connection_tprice;
              //console.log(csubotal);
              var ntax = $scope.ctax;
              //console.log(ntax);
              var cftotal = +csubotal + +ntax;
               $scope.ftotal = cftotal;

                      });
             }




            $scope.saveconnectioninvoice=function(gcustomer_id,connection_id,ctax,ctotal){

                $scope.gcustomer_id = {};
                $scope.gcustomer_id = angular.copy(gcustomer_id);
                //console.log($scope.gcustomer_id);
                $scope.connection_id = {};
                $scope.connection_id = angular.copy(connection_id);
                //console.log($scope.connection_id);
                $scope.ctax = {};
                $scope.ctax = angular.copy(ctax);
                //console.log($scope.ctax);
                $scope.ctotal = {};
                $scope.ctotal = angular.copy(ctotal);
                //console.log($scope.ctotal);

                $http({
          method  : 'POST',
          url     : '../../models/insertconnectioninvoice.php',
          data    : {'gcustomer_id':$scope.gcustomer_id,'connection_id':$scope.connection_id,'cinvoice_tax':$scope.ctax,'cinvoice_amount':$scope.ctotal}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            console.log(data);
                  swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"

});
             
 $('#printSection').modal('toggle');
                      });

             }

 $scope.fprint=function(printSection){

        printElement(document.getElementById("printSection"));
        window.print();

function printElement(elem, append, delimiter) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    if (append !== true) {
        $printSection.innerHTML = "";
    }

    else if (append === true) {
        if (typeof(delimiter) === "string") {
            $printSection.innerHTML += delimiter;
        }
        else if (typeof(delimiter) === "object") {
            $printSection.appendChlid(delimiter);
        }
    }

    $printSection.appendChild(domClone);
}

}

}]);



app.controller('Connectioninvoicectrl', ['$scope','$http', function($scope,$http){

$http.get("../../models/getconnectioninvdtls.php")
.success(function(data){
        $scope.conninvoicedata=data;
        console.log($scope.conninvoicedata);
    });

 $scope.deleteconninvoice=function(cinvoice_id,index){
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

console.log(cinvoice_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteconninvoice.php',
          data    : {'cinvoice_id':cinvoice_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                       // $scope.data.splice(index, 1);
                       // $scope.$watch();

                      });
            });

}


$scope.setcstatus=function(cinvoice_id,index){
  //alert('ddd');
  //alert(sinvoice_id);
//console.log(data);
//$scope.setstatus = angular.copy(order_id);
//console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/setconninvsts.php',
          data    : {'cinvoice_id':cinvoice_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                     //   $scope.data.splice(index, 1);
                      //  $scope.$watch();

                      });
            }

            $scope.unsetcstatus=function(cinvoice_id,index){
            //console.log(data);
            //$scope.setstatus = angular.copy(data);
            //console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/unsetconninvsts.php',
          data    : {'cinvoice_id':cinvoice_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                       // $scope.data.splice(index, 1);
                       // $scope.$watch();

                      });
            }




}]);



app.controller('Refilcylinderctrl', ['$scope','$http', function($scope,$http) {
   $scope.reset = function() {
  delete $scope.refil;
  $scope.refilform.$setPristine();
}

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
              //$scope.msg = "data inserted successfully "
                delete $scope.refil;
                swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
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


console.log(refil_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleterefil.php',
          data    : {'refil_id': refil_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
                        console.log(data);
                        $scope.refildata.splice(index, 1);
                        $scope.$watch();
            
            

                    });
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
              $scope.refildata[id]=angular.copy($scope.oldrefil);
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
                     url     : '../../models/updaterefil.php',
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



           $scope.refilinvoice=function(refil_id){

                $('#printSection').modal('toggle');
                //$('#invoicemodal').modal('show');
               // $('#invoicemodal').modal('hide');



               $http({
          method  : 'POST',
          url     : '../../models/getrefilsinglinv.php',
          data    : {'refil_id':refil_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
             // console.log(data);
              $scope.singleinv=data;
              $scope.rinvoice_tax = data[0].rinvoice_tax;
              $scope.rinvoice_id = data[0].rinvoice_id;
              $scope.rinvoice_amount = data[0].rinvoice_amount;
              $scope.rinvoice_date = data[0].rinvoice_date;
                  //console.log($scope.rinvoice_tax);
                      });




          $http.get("../../models/getrefilinvoicebyid.php")
          .success(function(data){
            //console.log(data);
            var nextinvoiceid=data;
            //console.log(nextinvoiceid);
            $scope.invoice_id = data[0].rinvoice_id;
            //console.log($scope.invoice_id);
            var lastinvoiceid = $scope.invoice_id;
            var addone = 1;
            var currentinoiveid = +lastinvoiceid + +addone;
            $scope.cinvoiceid = currentinoiveid;
            //console.log(currentinoiveid);
            
    });



                 $http({
          method  : 'POST',
          url     : '../../models/getrefilinvoice.php',
          data    : {'refil_id':refil_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
             // console.log(data);
              //$scope.orderinvoicedata = data;
              $scope.refilinvoicedata=data;
              //console.log($scope.refilinvoicedata);
              $scope.gcustomer_id = data[0].gcustomer_id;
              $scope.refil_amount = data[0].refil_amount;
              $scope.refil_id = data[0].refil_id;
              $scope.cdate = new Date();
               $scope.duedate = new Date();
                $scope.rtax = 10;
                var rtax = 10;
               var cftotal = $scope.refil_amount;
                  $scope.subotal = cftotal; 
                  var subotal = $scope.subotal;
                  var cftotal = +subotal + +$scope.rtax;
                $scope.stotal = cftotal;
                       // $scope.data.splice(index, 1);
                       // $scope.$watch();

                      });


      $http({
          method  : 'POST',
          url     : '../../models/checkrefilinv.php',
          data    : {'refil_id':refil_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
             // console.log(data);
              $scope.chkrefilinv=data;

                      });

            }

            $scope.saverefilinvoice=function(gcustomer_id,refil_id,rtax,rtotal){


                $scope.gcustomer_id = {};
                $scope.gcustomer_id = angular.copy(gcustomer_id);
                console.log($scope.refil_id);
                $scope.refil_id = {};
                $scope.refil_id = angular.copy(refil_id);
                console.log($scope.refil_id);
                $scope.rtax = {};
                $scope.rtax = angular.copy(rtax);
                console.log($scope.rtax);
                $scope.rtotal = {};
                $scope.rtotal = angular.copy(rtotal);
                console.log($scope.rtotal);

                $http({
          method  : 'POST',
          url     : '../../models/insertrefilinvoice.php',
          data    : {'gcustomer_id':$scope.gcustomer_id,'refil_id':$scope.refil_id,'rinvoice_tax':$scope.rtax,'rinvoice_amount':$scope.rtotal}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
                  swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
              $('#printSection').modal('toggle');

                      });
             }

        $scope.fprint=function(printSection){

        printElement(document.getElementById("printSection"));
        window.print();

function printElement(elem, append, delimiter) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    if (append !== true) {
        $printSection.innerHTML = "";
    }

    else if (append === true) {
        if (typeof(delimiter) === "string") {
            $printSection.innerHTML += delimiter;
        }
        else if (typeof(delimiter) === "object") {
            $printSection.appendChlid(delimiter);
        }
    }

    $printSection.appendChild(domClone);
}
}




$scope.changedrtax=function(rtax,refil_id){

                $scope.rtax = {};
                $scope.rtax = angular.copy(rtax);
                //console.log($scope.rtax);
                $scope.refil_id = {};
                $scope.refil_id = angular.copy(refil_id);
                //console.log($scope.refil_id);

              $http({
          method  : 'POST',
          url     : '../../models/getrefilinvoice.php',
          data    : {'refil_id':refil_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              //console.log(data);
              var csubotal = data[0].refil_amount;
              //console.log(csubotal);
              var ntax = $scope.rtax;
              //console.log(ntax);
              var cftotal = +csubotal + +ntax;
               $scope.stotal = cftotal;

                      });
             }

}]);


app.controller('Refilinvoicectrl', ['$scope','$http', function($scope,$http){

$http.get("../../models/getrefilinvoicedtls.php")
.success(function(data){
        $scope.refilinvoicedata=data;
        console.log($scope.refilinvoicedata);
    });

 $scope.deleterefilinvoice=function(rinvoice_id,index){
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

console.log(rinvoice_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleterefilinvoice.php',
          data    : {'rinvoice_id':rinvoice_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            });

}

$scope.setrstatus=function(rinvoice_id,index){
  //alert('ddd');
  //alert(sinvoice_id);
//console.log(data);
//$scope.setstatus = angular.copy(order_id);
//console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/setrefilinvsts.php',
          data    : {'rinvoice_id':rinvoice_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                     //   $scope.data.splice(index, 1);
                      //  $scope.$watch();

                      });
            }

            $scope.unsetrstatus=function(rinvoice_id,index){
            //console.log(data);
            //$scope.setstatus = angular.copy(data);
            //console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/unsetrefilinvsts.php',
          data    : {'rinvoice_id':rinvoice_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                       // $scope.data.splice(index, 1);
                       // $scope.$watch();

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
             // $scope.msg = "data inserted successfully "
               delete $scope.vdetails;
               swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                      $scope.addgasvehicleform.$setPristine();
            

          });

}

  }]);


app.controller('Listgasvehiclectrl', ['$scope','$http', function($scope,$http) {
   $scope.iseditid='';
    $scope.oldvehicle='';


$http.get("../../models/getgasvehicles.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });



  $scope.deletevehicle=function(gvehicle_id,index){
    delete $scope.unsetedit();
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
            });
   }

          $scope.isedit=function(id){
                        return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldvehicle){
              if($scope.oldvehicle){
                var index1 = getIndexOf($scope.data, $scope.iseditid, "gvehicle_id");
                $scope.data[index1]=angular.copy($scope.oldvehicle);
                delete $scope.oldvehicle;
              }
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
                     url     : '../../models/updategasvehicle.php',
                     data    : listvehicle, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                      $scope.msg = "data inserted successfully ";
                        $scope.updatevehicleform.$setPristine();
                        delete $scope.oldvehicle;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }
           function getIndexOf(arr, val, prop) {
              var l = arr.length,
                k = 0;
              for (k = 0; k < l; k = k + 1) {
                if (arr[k][prop] === val) {
                  return k;
                }
              }
              return false;
            }

}]);

app.controller('Addgasinwardsctrl', ['$scope','$http', function($scope,$http) {

$scope.reset = function() {

  //delete $scope.data;
  $scope.allproducts="";
   $scope.vehiclesdata="";
  //$scope.inwardsform.$setPristine();
}





 $http.get("../../models/getgasproducts.php")
    .success(function(data){
        $scope.allproducts=data
        //console.log($scope.allproducts);
        //console.log(data[0].product_name);
        //$scope.gasinwards = {tprice:data[0].product_name};
    });



    $http.get("../../models/getgasvehicles.php")
    .success(function(data){
        $scope.vehiclesdata=data
        //console.log($scope.vehiclesdata);
    });

    $scope.changedpname=function(product){
    
    $scope.product = {};
    $scope.product = angular.copy(product);
    //console.log($scope.product);
    $http({
          method  : 'POST',
          url     : '../../models/getgasproductprice.php',
          data    : {'product':product}, //forms user object
          headers : {'Content-Type':'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            $scope.pquantity = '1';
            //console.log($scope.pquantity);
            $scope.productprice=data;
            $scope.tprice = data[0].product_price;
            //console.log(data[0].product_price);
            //console.log($scope.tprice);
            

          });

}

$scope.changedquantity=function(pquantity,product_id){
$scope.pquantity = {};
$scope.product_id = {};
$scope.pquantity = angular.copy(pquantity);
$scope.product_id = angular.copy(product_id);
//console.log($scope.pquantity);
//console.log($scope.product_id);
$http({
          method  : 'POST',
          url     : '../../models/getgasproductprice.php',
          data    : {'product':product_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            $scope.productprice=data;
            console.log(data[0].product_price);
            var fprice = data[0].product_price;
            var fpquantity = $scope.pquantity;
            var totalprice = fprice*fpquantity;
            $scope.tprice = totalprice;
          });


}

  $scope.insertdata=function(){
  $scope.gasinwards = {};
  $scope.product = angular.copy($scope.product);
  $scope.pquantity = angular.copy($scope.pquantity);
  $scope.tprice = angular.copy($scope.tprice);
  $scope.distributor_name = angular.copy($scope.distributor_name);
  $scope.vehicle = angular.copy($scope.vehicle);
  //console.log($scope.distributor_name);
   $http({
          method  : 'POST',
          url     : '../../models/insertgasinwards.php',
          data    : {'product':$scope.product,'pquantity':$scope.pquantity,'tprice':$scope.tprice,'distributor_name':$scope.distributor_name,'vehicle':$scope.vehicle}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              //$scope.msg = "data inserted successfully "
              delete $scope.gasinwards;
              delete $scope.product;
              delete $scope.pquantity;
              delete $scope.tprice;
               delete $scope.distributor_name;
                delete $scope.vehicle;
              
              swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                      $scope.inwardsform.$setPristine();
            

          });

}

  }]);


app.controller('Listgasinwardsctrl', ['$scope','$http', function($scope,$http) {
   $scope.iseditid='';
    $scope.oldinwards='';

 $http.get("../../models/getgasinwards.php")
    .success(function(data){
        $scope.gasinwards=data
        console.log($scope.gasinwards);
    });

    $scope.deleteinwards=function(inwards_id,index){
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

    console.log(inwards_id);
     $http({
          method  : 'POST',
          url     : '../../models/deletegasinwards.php',
          data    : {'inwards_id':inwards_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                        $scope.gasinwards.splice(index, 1);
                        $scope.$watch();

                      });
            });
  }

$scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldinwards){
              $scope.iseditid=id;
              $scope.oldinwards=angular.copy(oldinwards);
              
              $scope.$watch();
            }
            $scope.unsetedit=function(id){

              $scope.iseditid='';
              $scope.gasinwards[id]=angular.copy($scope.oldinwards);
              console.log($scope.gasinwards[id]);
              $scope.$watch();
            }
            $scope.initval = function (inwardsentry) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updateinwards=function(inwardsentry,index){
              console.log(inwardsentry);
              $http({
                     method  : 'POST',
                     url     : '../../models/updateinwardslist.php',
                     data    : inwardsentry, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       //console.log(data);
                      $scope.msg = "data inserted successfully ";
                          $scope.updategasinwardsform.$setPristine();
                          delete $scope.oldinwards;
                           $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }


}]);


app.controller('Productstatusctrl', ['$scope','$http', function($scope,$http) {

$http.get("../../models/getproductstatus.php")
    .success(function(data){
        $scope.productstatus=data
        console.log($scope.productstatus);
    });

}]);


app.controller('Salegasproductctrl', ['$scope','$http', function($scope,$http) {

  $scope.reset = function(){
      /*$scope.connectionform.$setPristine();*/
        $scope.getinwardsproducts="";
        $scope.availquantity="";
         $scope.gcustomerdata="";
        $scope.product_name = "";
        $scope.product_quantity = "";
        $scope.Product_price = "";
        $scope.Product_tprice = "";
        $scope.gcustomer_name = "";
       
             
               /* */
                   }
              
                    $scope.reset();


 $http.get("../../models/getavailableproductdtls.php")
    .success(function(data){

        $scope.getinwardsproducts=data
        console.log($scope.getinwardsproducts);
    });

    $http.get("../../models/getgogascustomer.php")
    .success(function(data){
        $scope.gcustomerdata=data
        //console.log($scope.gcustomerdata);
    });

    $scope.changedspname=function(product){
    $scope.product = {};
    $scope.product = angular.copy(product);
    //console.log($scope.product);
    //alert(product);

    $http({
          method  : 'POST',
          url     : '../../models/getselectedpdetails.php',
          data    : {'product':product}, //forms user object
          headers : {'Content-Type':'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
      console.log(data);
            //$scope.pquantity = '1';
            //console.log(data[0].tproduct_quantity);
           $scope.availquantity = data[0].tproduct_quantity;
           var sremainquantity = $scope.availquantity-1;
           $scope.remainquantity = sremainquantity;
           
            //console.log(data[0].product_quantity);
          });




    $http({
          method  : 'POST',
         /* url     : '../../models/getsinwadsproducts.php', */
         url     : '../../models/getgasproductprice.php',
          data    : {'product':product}, //forms user object
          headers : {'Content-Type':'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {

            //$scope.pquantity = '1';
            console.log(data);
           $scope.product_quantity = '1';
           $scope.Product_price = data[0].product_price;
          $scope.Product_tprice = data[0].product_price;
            //console.log($scope.tprice);
          });

}


$scope.changedsquantity=function(product_quantity,product_id){
$scope.product_quantity = {};
$scope.product_id = {};
$scope.product_quantity = angular.copy(product_quantity);
$scope.product_id = angular.copy(product_id);

$http({
          method  : 'POST',
         /* url     : '../../models/getsinwadsproducts.php', */
         url     : '../../models/getselectedpdetails.php',
          data    : {'product':product_id}, //forms user object
          headers : {'Content-Type':'application/x-www-form-urlencoded'} 
         })

     .success(function(data){
            //$scope.pquantity = '1';
            //console.log(data);
            var tquantity = data[0].tproduct_quantity;
            var epquantity = $scope.product_quantity;
            var remainquantity = tquantity-epquantity;
            $scope.remainquantity = remainquantity;
          });


$http({
          method  : 'POST',
          url     : '../../models/getgasproductprice.php',
          data    : {'product':product_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            $scope.productprice=data;
            console.log(data[0].product_price);
            var fprice = data[0].product_price;
            var fpquantity = $scope.product_quantity;
            var totalprice = fprice*fpquantity;
            $scope.Product_tprice = totalprice;
          });


}



  $scope.insertdata=function(){
  $scope.salegasproduct = {};
  $scope.gasinwards = {};
  $scope.product = angular.copy($scope.product);
  $scope.product_quantity = angular.copy($scope.product_quantity);
  $scope.Product_price = angular.copy($scope.Product_price);
  $scope.Product_tprice = angular.copy($scope.Product_tprice);
  $scope.customer = angular.copy($scope.customer);
   $http({
          method  : 'POST',
          url     : '../../models/insertsaleproducts.php',
          data    : {'product':$scope.product,'product_quantity':$scope.product_quantity,'Product_price':$scope.Product_price,'Product_tprice':$scope.Product_tprice,'gcustomer_id':$scope.customer}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
  
     .success(function(data) {
            console.log(data);
             // $scope.msg = "data inserted successfully "
                             swal({
                title: "Successfully!",
                text: "data inserted successfully!",
                type: "success",
                confirmButtonText: "Ok"
              });
        delete $scope.product_name ;
        delete $scope.product_quantity ;
       delete $scope.Product_price ;
       delete $scope.Product_tprice;
       delete $scope.gcustomer_name;
              $scope.salegasproductform.$setPristine();
          });

}

  }]);


app.controller('Listsalegasproductctrl', ['$scope','$http', function($scope,$http) {
   $scope.iseditid='';
    $scope.oldsale='';

      $scope.saleinvoice=function(sale_product_id){
        
                $('#printSection').modal('toggle');
                //$('#invoicemodal').modal('show');
               // $('#invoicemodal').modal('hide');

               $http({
          method  : 'POST',
          url     : '../../models/getsalesinglinv.php',
          data    : {'sale_product_id':sale_product_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
             // console.log(data);
              $scope.singlesinv=data;
              $scope.sinvoice_tax = data[0].sinvoice_tax;
              $scope.sinvoice_id = data[0].sinvoice_id;
              $scope.sinvoice_amount = data[0].sinvoice_amount;
              $scope.sinvoice_date = data[0].sinvoice_date;
                  //console.log($scope.rinvoice_tax);
                      });



           $http.get("../../models/getsaleinvoiceid.php")
          .success(function(data){
            console.log(data);
            var nextinvoiceid=data;
            console.log(nextinvoiceid);
            $scope.invoice_id = data[0].sinvoice_id;
            console.log($scope.invoice_id);
            var lastinvoiceid = $scope.invoice_id;
            var addone = 1;
            var currentinoiveid = +lastinvoiceid + +addone;
            $scope.cinvoiceid = currentinoiveid;
            console.log(currentinoiveid);
    });


                      
                $http({
          method  : 'POST',
          url     : '../../models/getsaleinvoice.php',
          data    : {'sale_product_id':sale_product_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
              console.log(data);

              $scope.saleinvoice=data;
              //console.log($scope.saleinvoice);
              $scope.sale_product_id = data[0].sale_product_id;
              //console.log($scope.sale_product_id)
              $scope.gcustomer_id = data[0].gcustomer_id;
             // console.log(connection_id);
             var qt = data[0].sale_product_quantity;
              console.log(data[0].sale_product_quantity);
              var pr = data[0].sale_product_price;
              console.log(data[0].sale_product_price);
              var ssubotal = qt*pr;
              $scope.subotal = ssubotal;
              $scope.cdate = new Date();
              $scope.duedate = new Date();
              $scope.stax = 10;
              var stax = 10;
              var cftotal = ssubotal+$scope.stax;
               $scope.stotal = cftotal;
              // $scope.data.splice(index, 1);
              // $scope.$watch(); */

                      });


$http({
          method  : 'POST',
          url     : '../../models/checksaleinv.php',
          data    : {'sale_product_id':sale_product_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
              console.log(data);

              $scope.chksaleinvoice=data;

                      });





 $scope.fprint=function(printSection){

        printElement(document.getElementById("printSection"));
        window.print();

function printElement(elem, append, delimiter) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    if (append !== true) {
        $printSection.innerHTML = "";
    }

    else if (append === true) {
        if (typeof(delimiter) === "string") {
            $printSection.innerHTML += delimiter;
        }
        else if (typeof(delimiter) === "object") {
            $printSection.appendChlid(delimiter);
        }
    }

    $printSection.appendChild(domClone);
}

}
}


$scope.savesaleinvoice=function(gcustomer_id,sale_product_id,stax,stotal){
  
                $scope.gcustomer_id = {};
                $scope.gcustomer_id = angular.copy(gcustomer_id);
                //console.log($scope.gcustomer_id);
                $scope.sale_product_id = {};
                $scope.sale_product_id = angular.copy(sale_product_id);
                //console.log($scope.connection_id);
                $scope.stax = {};
                $scope.stax = angular.copy(stax);
                //console.log($scope.stax);
                $scope.stotal = {};
                $scope.stotal = angular.copy(stotal);
                //console.log($scope.stotal);

                $http({
          method  : 'POST',
          url     : '../../models/insertsaleinvoice.php',
          data    : {'gcustomer_id':$scope.gcustomer_id,'sale_product_id':$scope.sale_product_id,'sinvoice_tax':$scope.stax,'sinvoice_amount':$scope.stotal}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            console.log(data);
                  swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
               $('#printSection').modal('toggle');   
               });
   }

        $scope.changedstax=function(stax,sale_product_id){
                $scope.stax = {};
                $scope.stax = angular.copy(stax);
                //console.log($scope.stax);
                $scope.sale_product_id = {};
                $scope.sale_product_id = angular.copy(sale_product_id);
                //console.log($scope.sale_product_id);

              $http({
          method  : 'POST',
          url     : '../../models/getsaleinvoice.php',
          data    : {'sale_product_id':sale_product_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              //console.log(data);
              var qt = data[0].sale_product_quantity;
              //console.log(data[0].sale_product_quantity);
              var pr = data[0].sale_product_price;
              //console.log(data[0].sale_product_price);
              var csubotal = qt*pr;
              var ntax= $scope.stax;
              var cftotal = +csubotal + +ntax;
               $scope.stotal = cftotal;

                      });
             }



 $http.get("../../models/getsoldprodcuts.php")
    .success(function(data){
        $scope.soldproducts=data
        console.log($scope.soldproducts);
    });

    $scope.deletesoldproduct=function(sale_product_id,index){
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

console.log(sale_product_id);
     $http({
          method  : 'POST',
          url     : '../../models/deletesoldproducts.php',
          data    : {'sale_product_id':sale_product_id}, //forms user object
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
            $scope.setedit=function(id,oldsale){
              $scope.iseditid=id;
              $scope.oldsale=angular.copy(oldsale);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.soldproducts[id]=angular.copy($scope.oldsale);
              $scope.$watch();
            }
            $scope.initval = function (soldproduct) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updatesoldproduct=function(soldproduct,index){
              console.log(soldproduct);
              $http({
                     method  : 'POST',
                     url     : '../../models/updatesoldproduct.php',
                     data    : soldproduct, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                      $scope.msg = "data inserted successfully ";
                        $scope.updatelistsaleform.$setPristine();
                        delete $scope.oldsale;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }

}]);


app.controller('Gogasproductinvoicectrl', ['$scope','$http', function($scope,$http){

$http.get("../../models/getsoldproductinvoice.php")
.success(function(data){
        $scope.gasproductinvoicedata=data;
        console.log($scope.gasproductinvoicedata);
    });

 $scope.deleteproductinvoice=function(sinvoice_id,index){
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

console.log(sinvoice_id);
     $http({
          method  : 'POST',
          url     : '../../models/deletegasproductinvoice.php',
          data    : {'sinvoice_id':sinvoice_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            });

}


$scope.setsstatus=function(sinvoice_id,index){
  //alert('ddd');
  //alert(sinvoice_id);
//console.log(data);
//$scope.setstatus = angular.copy(order_id);
//console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/setgasproinvsts.php',
          data    : {'sinvoice_id':sinvoice_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                     //   $scope.data.splice(index, 1);
                      //  $scope.$watch();

                      });
            }

            $scope.unsetsstatus=function(sinvoice_id,index){
//console.log(data);
//$scope.setstatus = angular.copy(data);
//console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/unsetgasproinvsts.php',
          data    : {'sinvoice_id':sinvoice_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                       // $scope.data.splice(index, 1);
                       // $scope.$watch();

                      });
            }

}]);

app.controller('Addgogasexpensive', ['$scope','$http', function($scope,$http){


$scope.reset = function() {
  delete $scope.expensive;
  $scope.addexpensiveform.$setPristine();

}

           $scope.insertdata=function(expensive){
             //console.log(expensive);
              $scope.expensive = {};
           $scope.expensive = angular.copy(expensive);
           console.log($scope.expensive);
              $http({
                     method  : 'POST',
                     url     : '../../models/insertgogasexpensive.php',
                     data    : $scope.expensive, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      console.log(data);
                        // $scope.msg = "data inserted successfully ";

                        delete $scope.expensive;
                         swal({
  title: "Successfully!",
  text: "Expensives added successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                        $scope.addexpensiveform.$setPristine();
           
                     });
           
           }
 }]);

app.controller('Listgogasexpensive', ['$scope','$http', function($scope,$http){

 $scope.iseditid='';
    $scope.oldexpensive='';

  $http.get("../../models/getgogasexpensivedetails.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });



  $scope.deleteexpensive=function(gogasexpensive_id,index){
   // alert(vehicle_id);
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

console.log(gogasexpensive_id);
     $http({
          method  : 'POST',
          url     : '../../models/deletegogasexpensive.php',
          data    : {'gogasexpensive_id':gogasexpensive_id}, //forms user object
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
            $scope.setedit=function(id,oldexpensive){
              if($scope.oldexpensive){
                var index1=getIndexOf($scope.data,$scope.iseditid,"gogasexpensive_id");
                $scope.data[index1]=angular.copy($scope.oldexpensive);
                delete $scope.oldexpensive;
              }
              $scope.iseditid=id;
              $scope.oldexpensive=angular.copy(oldexpensive);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldexpensive);
              $scope.$watch();
            }
            $scope.initval = function (expensive) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updateexpensive=function(expensive,index){
              console.log(expensive);
              $http({
                     method  : 'POST',
                     url     : '../../models/updategogasexpensivedetails.php',
                     data    : expensive, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                        $scope.msg = "data inserted successfully ";
                        $scope.listexpensiveform.$setPristine();
                        delete $scope.oldexpensive;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }
             function getIndexOf(arr, val, prop) {
              var l = arr.length,
                k = 0;
              for (k = 0; k < l; k = k + 1) {
                if (arr[k][prop] === val) {
                  return k;
                }
              }
              return false;
            }
          

}]);
