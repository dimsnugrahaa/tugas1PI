<?php defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>  
<head>
	<title>Register Account</title>
		<style>
h2 {
  background-color: darkkhaki;
}
</style>
</head>
<body>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Isi CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/custom.css" rel="stylesheet">
    <!-- Custom Login CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/customlogin.css" rel="stylesheet"> 
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
<div class="card o-hidden border-3 shadow-lg my-8">
        <div class="card-body">
<center>
<h2 style="color: black;"> Register Account </h2>
<center>
<form class="form-style-2 placeholder-2" action="<?php echo base_url('register/proses'); ?>" method="post">
<div class="container">
		<div class="row">
    	<div class="col-md-3">
    	</center>
        <div class="panel panel-default" style=" background-color: black">
            <div class="panel-heading" style="background-color: darkkhaki">
            <strong> REGISTER </strong>
            </div>
            <center>
			<div class="panel-body">
				<div class="form-group">
						<p class="col-sm-3" style="color : darkkhaki"> Input Username </p>
						<p></p>
						<input class="col-sm-8" type="text" name="username" placeholder=" Username">
				</div>
				<br>
				<div class="form-group">
						<p class="col-sm-3" style="color: darkkhaki"> Input Password </p>
						<p></p>
						<input class="col-sm-8" type="password" name="password" placeholder=" Password">
				</div>
				<br>
				<div class="form-group">
						<p class="col-sm-3" style="color: darkkhaki"> Input Confirm Password </p>
						<p></p>
						<input class="col-sm-8" type="password" name="confirm_password" placeholder=" Confirm Password">
				</div><div>
				<br>
				<br>
				<center>
				<div class="form-group last">
        			<div class="text-center">
                		<button class="mtb-20 btn-primaryc plr-30" type="submit" name="submit"><h6>Register</h6></button>
					</div>
				</div></center>
        </div>
</form></center>
	<div class="col-md-20 m-auto">
        <h5 align="center"><a href="<?= base_url(); ?>login/">Already have an account? Login here! </a></h5>
        <h5 class="text-center mt-20"><a href="<?= base_url(); ?>"><i class="ion-arrow-left-c"></i> Back to home </a></h5>
       </div>

</div>
</div>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Metis Menu Plugin JavaScript -->
	<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>
	<!-- Custom Theme JavaScript -->
	<script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>
</body>
</html>