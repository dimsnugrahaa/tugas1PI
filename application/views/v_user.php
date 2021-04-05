<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Login </title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body style="background-color: darkkhaki">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div style="background-color: darkkhaki" class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <center><a class="nav-link" href="" style="color: black"> ACEL </a></center>
                </li>
            </ul>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="" style="color: black"> PALEK </a>
                </li>
            </ul>
                    <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="" style="color: black"> ZEED </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a style="color: black" class="nav-link" href="<?php echo base_url('login/logout'); ?>"> Logout </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" align="center">
                    WELCOME TO THE CLUB AND ENJOY THIS HOMEPAGE.
                </div>
            </div>
        </div>
    </div>
    
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>