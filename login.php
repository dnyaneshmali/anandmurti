<!DOCTYPE html>
<html lang="en">
<?php $root = $_SERVER['DOCUMENT_ROOT'].'/anandmurti/';
 include($root."/config/config.php"); ?>
  <head>
     <link  rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <script src="<?php echo base_url(); ?>/assets/js/angular.min.js"></script>
        <script src="<?php echo base_url(); ?>/controllers/LoginController.js"></script>
        <script src="assets/js/angular-route.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/js/ngStorage.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
          <link  rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/front-style.css">
  </head>

  <body>

    <div class="container">
      <div class="row">
<div class = "panel panel-default">
   <div class = "panel-body">
        <div ng-app='AnandMurtiLogin' ng-controller='loginCtrl'>
      <form class="form-signin" >
        <h2 class="form-signin-heading">Please sign in</h2>
      <form class="form-horizontal col-md-offset-3 col-md-5">
         <div class="form-group"> <h2 class="">Please Login</h2></div>

        <label for="inputusername" class="sr-only">Email address</label>
        <input type="text" id="inputusername" ng-model="loginadmin.username" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" ng-model="loginadmin.password"  placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" ng-click="login(loginadmin)" type="submit">Sign in</button><br>
         <span>{{responseMessage}}</span>
         <span>{{ssname}}</span>
      </form>
       </div>
     </div>
     </div>
    </div>
  </body>
</html>
