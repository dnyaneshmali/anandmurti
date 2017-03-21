/**
 * Created by User on 10/19/14.
 */
 app.controller('Dashboard', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
    if($window.localStorage.getItem('ssid') == ''){
    window.location.replace("http://localhost/anandmurti/");
  }


  $scope.isaquaadmin = function(){
$scope.srole = $window.localStorage.getItem('srole');

    if ($scope.srole == "gasadmin") {
 return false;
  };
   if ($scope.srole == "superadmin" ||  $scope.srole == "aquaadmin") {
return true;
   };
 
  }

   $scope.isgasadmin = function(){
$scope.srole = $window.localStorage.getItem('srole');

    if ($scope.srole == "aquaadmin") {
 return false;
  };
   if ($scope.srole == "superadmin" || $scope.srole == "gasadmin" ) {
return true;
   };
 
  }

  $scope.isadmin = function(){
$scope.srole = $window.localStorage.getItem('srole');

     if ($scope.srole == "superadmin") {
return true;
  };
   if ($scope.srole == "aquaadmin" || $scope.srole == "gasadmin" ) {
return false;
   };

  }

}]);

app.controller('Aqua', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
    if($window.localStorage.getItem('ssid') == ''){
    window.location.replace("http://localhost/anandmurti/");
  }
}]);

app.controller('Gogas', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
    if($window.localStorage.getItem('ssid') == ''){
    window.location.replace("http://localhost/anandmurti/");
  }
}]);

app.controller('Addadminctrl', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
  //$scope.obj={'idisable':false};
          if($window.localStorage.getItem('ssid') == ''){
              window.location.replace("http://localhost/anandmurti/");
            }
             $scope.reset = function() {
  delete $scope.admin;
  $scope.addadminform.$setPristine();

}

           $scope.insertdata=function(admin){
              $scope.admin = {};
           $scope.admin = angular.copy(admin);
           console.log($scope.admin);
              $http({
                     method  : 'POST',
                     url     : '../../models/insertadmin.php',
                     data    : $scope.admin, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      /* console.log(data);*/
                         $scope.msg = "data inserted successfully ";

                        delete $scope.admin;
                         swal({
  title: "Successfully!",
  text: "admin added successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                        $scope.addadminform.$setPristine();
           
                     });
           
           }
 }]);


app.controller('Adminlistctrl', ['$scope','$http', '$window', '$localStorage', '$filter', function($scope, $http, $window, $localStorage, $filter) {

    $scope.iseditid='';
    $scope.oldadmin='';

              if($window.localStorage.getItem('ssid') == ''){
                window.location.replace("http://localhost/anandmurti/");
              }
                $http.get("../../models/getadmin.php")
                .success(function(data){
                    $scope.data=data
                    //console.log($scope.data);
                });


              $scope.deleteuser=function(admin_id,index){
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

            console.log(admin_id);
                 $http({
                      method  : 'POST',
                      url     : '../../models/deleteadmin.php',
                      data    : {'admin_id':admin_id}, //forms user object
                      headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                     })
                 .success(function(data) {
                        
                        console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            })
              }
               
            /*
            */
              $scope.logout=function(){

                 $window.localStorage.setItem('ssid','');
                 $window.localStorage.setItem('sname','');
                 $window.localStorage.setItem('srole','');
                 $window.localStorage.setItem('islogin','false');
            }
           //button work functions and update operation
            $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldadmin){
              if($scope.oldadmin){
                var index1 = getIndexOf($scope.data, $scope.iseditid, "admin_id");
                $scope.data[index1]=angular.copy($scope.oldadmin);
                delete $scope.oldadmin;
              }
              $scope.iseditid=id;
              $scope.oldadmin=angular.copy(oldadmin);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              console.log($scope.oldadmin);
              $scope.data[id]=angular.copy($scope.oldadmin);
              delete $scope.oldadmin;
              $scope.$watch();
            }
            $scope.initval = function (admin) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updateuser=function(admin,index){
              $http({
                     method  : 'POST',
                     url     : '../../models/updateadmin.php',
                     data    : admin, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      /* console.log(data);*/
                        $scope.msg = "data inserted successfully ";
                        $scope.addadminform.$setPristine();
                        delete $scope.oldadmin;
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

app.controller('Addmyaccountctrl', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
   if($window.localStorage.getItem('ssid') == ''){

                window.location.replace("http://localhost/anandmurti/");
              }
              var csid = $window.localStorage.getItem('ssid');
              //alert(csid);
                 $http({
                      method  : 'POST',
                      url     : '../../models/admindetails.php',
                      data    : {'admin_id':csid}, //forms user object
                      headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                     })
                 .success(function(data) {
                        
                        console.log(data);
                      $scope.admindetails = data;

                        //console.log(data[0].admin_username);
                        $scope.admin_id = data[0].admin_id;
                        $scope.username = data[0].admin_username;
                        $scope.fullname = data[0].admin_name;
                        $scope.email=data[0].admin_email;
                        $scope.phone=data[0].admin_number;
                        $scope.userrole=data[0].admin_role;
                        //$scope.data.splice(index, 1);
                        //$scope.$watch();

                      });

                       $scope.updateadmin=function(admin_id){
                        $scope.admin_id=angular.copy($scope.admin_id);
                        console.log($scope.admin_id);
                        $scope.username=angular.copy($scope.username);
                        console.log($scope.username);
                        $scope.fullname=angular.copy($scope.fullname);
                        console.log($scope.fullname);
                        $scope.email=angular.copy($scope.email);
                        console.log($scope.email);
                        $scope.phone=angular.copy($scope.phone);
                        console.log($scope.phone);
                        $scope.userrole = angular.copy($scope.userrole);
                        console.log($scope.userrole);
              $http({
                     method  : 'POST',
                     url     : '../../models/updatemyaccount.php',
                     data    : {'admin_id':$scope.admin_id,'username':$scope.username,'fullname':$scope.fullname,'email':$scope.email,'phone':$scope.phone}, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);

               swal({
  title: "Successfully!",
  text: "admin updated successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                        //$scope.msg = "data inserted successfully ";
                        //$scope.addadminform.$setPristine();
                        //delete $scope.oldadmin;
                        //$scope.iseditid='';
                        //$scope.$watch();
                     });
           
           }





 
 }]);

/*app.controller('Addexpensive' , ['$scope','$http', function($scope,$http) {

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
                     url     : '../../models/insertexpensive.php',
                     data    : $scope.expensive, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      console.log(data);
                         $scope.msg = "data inserted successfully ";

                        delete $scope.expensive;
                        $scope.addexpensiveform.$setPristine();
           
                     });
           
           }
 }]);

app.controller('Listexpensive', ['$scope','$http', function($scope,$http) {
 $scope.iseditid='';
    $scope.oldexpensive='';

  $http.get("../../models/getexpensivedetails.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });



  $scope.deleteexpensive=function(expensive_id,index){
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

console.log(expensive_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteexpensive.php',
          data    : {'expensive_id':expensive_id}, //forms user object
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
                var index1=getIndexOf($scope.data,$scope.iseditid,"expensive_id");
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
                     url     : '../../models/updateexpensivedetails.php',
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
          

}]);*/
