<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>- > Login < -</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- ajax google -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
	
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-xs-12"></div>
        <div class="col-lg-4 col-xs-12">    <br>
            <form method="POST" action="<?php echo base_url('welcome/checkLogin'); ?>" >
                <center><h2>Login</h2></center>
                <hr>
                <b><h4>Username</h4></b>
                <input class="form-control" type="text" name="username" required>
                <b><h4>Password</h4></b>
                <input class="form-control" type="password" name="password" required>
                <br>
                <button type="submit" class="form-control btn-primary"> Login </button>
            </form>
            <br>
            <hr>
            <br>
            <button type="submit" class="form-control btn-dark" 
            onclick="location.href='<?php echo base_url('register'); ?>' "> Register </button>

        </div>
        <div class="col-lg-4 col-xs-12"></div>
    </div>

</div>

</body>
</html>