<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create New Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- ajax google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"> <!-- sweetalert-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> <!-- sweetalert-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-xs-12"> <br>
            <center><h2>Register</h2></center>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-xs-12"></div>
        <div class="col-lg-4 col-xs-12">    <br>
            <form method="POST" action="<?php echo base_url('register/createNewRegister'); ?>" >
                <b>Firstname</b>
                <input class="form-control" type="text" name="firstname" required>
                <b>Lastname</b>
                <input class="form-control" type="text" name="lastname" required>
                <b>Phone</b>
                <input class="form-control" type="text" name="phone" required>
                <b>Email</b>
                <input class="form-control" type="email" name="email" required>
                <!-- hide  -->
                <input type="hidden" name="status" value="user">
                <!--  -->
                <b>Username</b>
                <input class="form-control" type="text" name="username" required>
                <b>Password</b>
                <input class="form-control" type="password" name="password" required>
                <br>
                <button type="submit" class="form-control btn-primary"> Save </button>
            </form>

        </div>
        <div class="col-lg-4 col-xs-12"></div>
    </div>

</div>
</body>
</html>