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
          if($window.localStorage.getItem('ssid') == ''){
              window.location.replace("http://localhost/anandmurti/");
            }
           $scope.admin = {};
           $scope.insertdata=function(admin){
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
                         $scope.msg = "data inserted successfully "
                       
           
                     });
           
           }
 }]);


app.controller('Adminlistctrl', ['$scope','$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
              if($window.localStorage.getItem('ssid') == ''){
                window.location.replace("http://localhost/anandmurti/");
              }
                $http.get("../../models/getadmin.php")
                .success(function(data){
                    $scope.data=data
                    //console.log($scope.data);
                });


              $scope.deleteuser=function(admin_id){
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

                      });
            }


              $scope.logout=function(){

                 $window.localStorage.setItem('ssid','');
                 $window.localStorage.setItem('sname','');
                 $window.localStorage.setItem('srole','');
                 $window.localStorage.setItem('islogin','false');
                  //  console.log($scope.data1);
            }



}]);




 app.controller('Myaccountctrl', ['$scope', function($scope) {
   
}]);


