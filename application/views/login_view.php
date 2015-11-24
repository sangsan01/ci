<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <link href="<?php echo base_url(); ?>assets/css/navbar-custom.css" rel="stylesheet">
    
  <title>Login</title>
</head>
 <body>
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
   <h1>Login</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('VerifyLogin'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="Login"/>
   </div>
  </div>
 </body>
</html>