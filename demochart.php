<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<title>Angular Bar Chart: Pure CSS</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class='container'>
<div class='bar blue'>Blue - 50%</div>
<div class='bar green'>Green - 80%</div>
</div>
 <script src="<?php echo base_url(); ?>/assets/js/angular.min.js"></script>
  <script src="<?php echo base_url(); ?>/config/app.js"></script>
    <script src="<?php echo base_url(); ?>/controllers/globalcontrollers.js"></script>
</body>

</html>

<style>
.container {
 position: relative;
 width: 300px;
 height: 300px;
 border: 1px solid gray;
 margin: 0 auto;
 box-shadow: 2px 2px 2px gray;
 font-size: 14px;
 color: white;
 padding-right: 10px;
}
.bar {
 position: absolute;
 bottom: 0;
 text-align: center;
 word-break: break-all;
}
.blue {
width: calc(300px/2 - 10px);
 height: 50%;
 background: blue;
 left: 10px;
}
.green {
width: calc(300px/2 - 10px);
 height: 80%;
 background: green;
 left: calc(300px/2 + 10px);
}
</style>