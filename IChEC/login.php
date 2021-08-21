<?php 
include('database/config.php');
include('database/function.php');
include('database/session.php');
?>



<?php 
// if (isset($_SESSION["AId"])) {
//   Redirect_to("admin_panel/");

// }

 ?>

<?php 

if (isset($_POST['LoginS'])) {
    
    $User = $_POST["username"];
    $Pass = $_POST["pass"];

    if (empty($User) || empty($Pass)) {
        $_SESSION["ErrorMessage"] = " username & password !";
        Redirect_to("#");
    }else{

        // code for checking username and password from database
        $Found_Account=Login_AttamptAddf($User,$Pass);
        if ($Found_Account) {
        
           $_SESSION["AefdfdxszwId"]= $Found_Account["id"];
		   $_SESSION["Aname"]= $Found_Account["name"];
           $_SESSION["Ausername"]= $Found_Account["username"];
		   $_SESSION["Apassword"]= $Found_Account["password"];


            $_SESSION["SuccessMessage"] = "Welcome " .$_SESSION["Aname"]." !";
            Redirect_to("admin_panel/");
        }else{
            $_SESSION["ErrorMessage"] = " correct Username and Password";
            Redirect_to("#");
        }
    
    }
}



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>IChEC-2021 | login</title>
	  <link rel = "icon" href ="images/logo.jpg">
	  <meta name="viewport" content="width=device-width,inital-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
	  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
<style type="text/css">
   *{
	font-family: 'Source Serif Pro', serif;
      
    }
	label{
		font-weight: bold;
	}
</style>
</head>
<body style="background-color: #fff;">
	 <?php include('header.php'); ?>
	<?php include('navbar.php'); ?>

<div class="container" style="padding-top: 80px;">
	<div class="row py-5">
		<div class="col-lg-12">
			<div class="card" style="border: none;">
				<div class="card-header">IChEC-2021 | login</div>
				<?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

             ?>
				<div class="card-body">
					<form method="post" action="">
					 <!-- <div class="form-group">
					 <label for="admin">I am </label>
					   <select name="admin" id="admin" class="form-control">
					   <option value="admin">Admin</option>
					   </select>
					 </div> -->
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" id="username" class="form-control" placeholder="Enter username..">
						</div>
						<div class="form-group">
							<label for="pass">Password</label>
							<input type="password" name="pass" id="pass" class="form-control" placeholder="Enter password..">
						</div>
						<button type="sunmit" name="LoginS" class="btn btn-primary" style="float: right;">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include('footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> $('#year').text(new Date().getFullYear()); </script>
</body>
</html>