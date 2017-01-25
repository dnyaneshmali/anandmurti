/**
 * Created by User on 10/19/14.
 */
 app.controller('Dashboard', ['$scope', function($scope) {
    $scope.homepage = "Dashboard";
}]);
app.controller('Aqua', ['$scope', function($scope) {
    $scope.homepage = "Aqua";
}]);
app.controller('Gogas', ['$scope', function($scope) {
    $scope.homepage = "Gogas";
}]);

app.controller('Userlist', ['$scope', function($scope) {
    $scope.homepage = "Userlist";
}]);
app.controller('Adduserctrl', ['$scope','$http', function($scope,$http) {

var vm = this;

vm.insertdata = {};
$scope.insertdata=function(){
	
console.log(vm.insertdata);
console.log("in function");
	$http.post("insertuser.php",{'username':$scope.username,'user_full_name':$scope.user_full_name,'user_email':$scope.email,'user_number':$scope.phone,'user_password':$scope.password,'user_role':$scope.userrole,'btnName':$scope.btnName})
            .success(function(){
            	console.log();
            	$scope.msg="data inserted";
              });

}
}]);
