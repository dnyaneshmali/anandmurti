/**
 * Created by User on 10/19/14.
 */
 app.controller('Dashboard', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
    if($window.localStorage.getItem('ssid') == ''){
    window.location.replace("http://localhost/anandmurti/");
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
                        $scope.addadminform.$setPristine();
           
                     });
           
           }
 }]);


app.controller('Adminlistctrl', ['$scope','$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {

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
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
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
              $scope.iseditid=id;
              $scope.oldadmin=angular.copy(oldadmin);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldadmin);
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

}]);

 app.controller('Myaccountctrl', ['$scope', function($scope) {
   
}]);

