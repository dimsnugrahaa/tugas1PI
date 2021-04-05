<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
h2 {
  background-color: darkkhaki;
}
</style>
</head>
<body>
    <center>
        <h2 style="color: black;">WELCOME TO THE CLUB<br/></h2>
    <center>
    <form action='login/aksi_login' method="post">       
        <div class="container">
        <div class="row">
        <div class="col-md-3">
            </center>
        <div class="panel panel-default" style=" background-color: black">
            <div class="panel-heading" style="background-color: darkkhaki">
                <strong>PLEASE LOGIN</strong>
            </div>
            <div class="panel-body"><p>
                <div class="form-group">
                    <p class="col-sm-3" style="color: darkkhaki"> Username </p>
                    <p></p>
                    <div class="col-sm-8">
                        <input type="text" name="username" class="form-control" placeholder=" Username ">
                    </p></div>
                    
                <div class="form-group">
                    <p class="col-sm-3" style="color: darkkhaki"> Password </p>
                    <div class="col-sm-8">
                        <input type="password" name="password" class="form-control" placeholder=" Password ">
                    </div>
                </div>
            <div class="form-group last">
                 <div class="col-sm-offset-3 col-sm-6">
<h1></h1>
                    <button type="submit" name="proses" class="btn btn-success btn-sm"> Sign In </button>
                    <button type="reset" class="btn btn-default btn-sm"> Reset </button>
                    <p></p>
                    <button><a href='register'> Register </a></button>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
    </form>
    </center>
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