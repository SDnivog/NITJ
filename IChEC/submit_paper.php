


<!-- title=Mr.&fname=Govind&lname=Suman&email=govindsuman118%40gmail.com&
mobile=9983904397&designation=Student&organization=giftstore&address=MBH+F-Block%0D%0ARoom+No.++121&type=&register= -->

<?php 
include('database/config.php');
include('database/function.php');
include('database/session.php');
?>

<?php
if (isset($_POST['register'])) {
  
   $title = $_POST['title'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $designation = $_POST['designation'];
   $organization = $_POST['organization'];
   $address = $_POST['address'];
   $type = $_POST['type'];

   $fname1 = substr($fname, 0,1);
   $registration_id = $_SESSION['regidUser'] = 'ICHEC'.$fname1.rand(99,9999);



 if (empty($title)) {
     $_SESSION["ErrorMessage"] = " title !";
     Redirect_to("#");
 }
 elseif (empty($fname)) {
   $_SESSION["ErrorMessage"] = " first name !";
   Redirect_to("#");
}
elseif (empty($lname)) {
   $_SESSION["ErrorMessage"] = " last name !";
   Redirect_to("#");
}
 elseif (empty($email)) {
     $_SESSION["ErrorMessage"] = " email !";
     Redirect_to("#");
 }
 elseif(CheckExistStudent($email)) {   
        $_SESSION["ErrorMessage"] = " email already exist !";
        Redirect_to("#");
  }
  elseif (empty($mobile)) {
     $_SESSION["ErrorMessage"] = " mobile no. !";
     Redirect_to("#");
 }
 elseif (empty($designation)) {
     $_SESSION["ErrorMessage"] = " designation !";
     Redirect_to("#");
 }

 elseif (empty($organization)) {
     $_SESSION["ErrorMessage"] = " organization !";
     Redirect_to("#");
 }
 elseif (empty($address)) {
   $_SESSION["ErrorMessage"] = " address !";
   Redirect_to("#");
}
 elseif (empty($type)) {
     $_SESSION["ErrorMessage"] = " registration type !";
     Redirect_to("#");
 }
  else{

    #Query to insert post in DB when everything is fine
    global $ConnectingDB; // FOR OLD VERSION OF PHP LIKE 5.6 ect
    $sql = "INSERT INTO  registration(title,fname,lname,email,mobile,designation,organization,address,registration_id,type)";
    $sql .= "VALUES(:tiTlE,:FnamE,:LnamE,:EmaiL,:MobiLe,:CourSe,:YeaRR,:YearG,:PosITioN,:AddReSs)";
    $stmt = $ConnectingDB->prepare($sql);
    $stmt->bindValue(':tiTlE', $title);
    $stmt->bindValue(':FnamE', $fname);
    $stmt->bindValue(':LnamE', $lname);
    $stmt->bindValue(':EmaiL', $email);
    $stmt->bindValue(':MobiLe', $mobile);
    $stmt->bindValue(':CourSe', $designation);
    $stmt->bindValue(':YeaRR', $organization);
    $stmt->bindValue(':YearG', $address);
    $stmt->bindValue(':PosITioN', $registration_id);
    $stmt->bindValue(':AddReSs', $type);
        $Execute =$stmt->execute();

      
        if ($Execute) {
          $_SESSION["SuccessMessage"] = "Registration successfully";
          Redirect_to("reg_payment?registration_id={$registration_id}"); // You Can Send Admin to Any PAge YOU Want
        }else{
          $_SESSION["ErrorMessage"] = "Something Went to Wrong! Try Again!";
        Redirect_to("#");
        }
  }
}// Ending of Submit button if-Condition

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IChEC-2021 | Paper Submission</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
    <style>
    *{
      background-color: rgba(0,0,0,0);
      font-family: 'Source Serif Pro', serif;
      
    }
    body{
       background-image: url('images/register.jppg');
       background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;

  background-size:100% auto;
       /* background-size: cover; */
       /* max-width: 100%; */
    }
    label{
       color: #fff;
    }


    </style>
</head>
<body>

<?php include('navbar.php'); ?>


<div class="container-fluid " style="padding-top: 120px;">
   <div class="row">
    <div class="col-md-12" style="color:#fff;min-height:300px;">

    <h1 style="color: #04122b;font-weight:bold;" class="text-center">International Chemical Engineering Conference 2021</h1>
      <h5 style="color: #080835; font-weight:bold" class="text-center">(100 Glorious Years of Chemical engineering & Technology)</h5>

        <h2 style="color: #080835;font-weight:bold;" class="text-center">Chemical Engineering Department, NIT Jalandhar</h2>  

      </div>
   </div>
</div>



<div style="background-color:#030315;">

<div class="container  py-5" style="padding-top:80px;min-height:200px; ">
<h5 style="font-weight:bold" class="text-center text-light">Paper Details</h5> <hr>
<?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

             ?>

<!-- reg_payment -->

<form action="" method="POST">
   <div class="row">
   
   <div class="col-md-6">     
   <div class="form-group">
                <label for="fname">Paper Title  <small class ="text-danger">*</small> </label>
                <input type="text" name="fname" id="fname" placeholder="Enter first name..." class="form-control">
             </div>
      </div>
    <div class="col-md-6">     
    <div class="form-group">
                <label for="fname">Abstract  <small class ="text-danger">*</small> </label>
                <input type="text" name="fname" id="fname" placeholder="Enter first name..." class="form-control">
             </div>
      </div>
    

   </div>

<div class="row">

<div class="col-md-6">     
    <div class="form-group">

      <label for="email">Keywords <small class ="text-danger">*</small> </label>
      <input type="email" name="email" id="email" placeholder="Enter eamil..." class="form-control">

    </div>
</div>

<div class="col-md-6">     
    <div class="form-group">
  <label for="mobile">Registration Id <small class ="text-danger">*</small> </label>
  <input type="number" id="mobile" name="mobile" class="form-control" placeholder="Enter mobile no.">
    </div>
</div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
          <label for="file">Upload file</label>
          <input type="file" name="file" id="file" class="form-control">
        </div>
    </div>
</div>




<button type="submit" name="register" id="register" class="btn btn-light float-right mb-2">Register</button>

   </form>
</div>

</div>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> $('#year').text(new Date().getFullYear()); </script>
</body>
</html>