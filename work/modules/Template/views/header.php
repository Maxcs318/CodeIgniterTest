<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>It's me <?php echo $_SESSION['username']; ?> Status : <?php echo $_SESSION['status']; ?></title>
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

    <script>
		$(document).ready(function() {
			$("#logout").click(function() {
                swal({
                    title: "Are you sure?",
                    text: "You want to Logout .",
                    type: "warning",
                    confirmButtonText: 'Yes.',
                    confirmButtonColor: '#DD6B55',
                    showCancelButton: true,
                }, function() {
                    window.location.href = '<?php echo base_url('welcome/logout'); ?>';
                });
            });

            $("#changeStatus").click(function() {
				window.location.href = '<?php echo base_url('actor/changeStatus'); ?>';
            });
            
            $("#returnToGod").click(function() {
				window.location.href = '<?php echo base_url('actor/returnToGod'); ?>';
            });

		});
	</script>
	
</head>
<body>
    <?php 
        // check status if value =null or '' redirect to login page
        if(empty($_SESSION['status']) || $_SESSION['status'] == ''){
            redirect(base_url(),'refresh');
		}
    ?>

<!-- // Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">
        <h4>Home</h4>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('actor'); ?>">
            <h5>All Member</h5>    
          <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('actor/editmember'); ?>">
            <h5>Edit Profile</h5>  
          </a>
        </li>

        <?php 
            if($_SESSION['status2']=='God'){
        ?>
        <li class="nav-item ">
            <button class="form-control btn-primary"  id="changeStatus"><h5>Chang Status</h5></button>       
        </li>
        <li class="nav-item ">
            <a class="nav-link" >
                 <!-- ไม่มีไร เว้นไว้ให้มันห่างกัน  -->
            </a>
        </li>
        <li class="nav-item ">
            <button class="form-control btn-primary"  id="returnToGod"><h5>Return God</h5></button>       
        </li>
        <?php
            }
        ?>

      </ul>
        <div class="form-inline my-2 my-md-0">    
            <button class="form-control btn-dark" id="logout"><h5>Log Out</h5></button>
        <!-- <input class="form-control" type="text" placeholder="Search" aria-label="Search"> -->
        </div>
        
    </div>
  </div>
</nav>


</body>
</html>