

<!-- paymen_details.php -->

<?php 
include('database/config.php');
include('database/function.php');
include('database/session.php');
?>

<?php //$reg_id = $_GET['registration_id']; ?>

<?php $UserUniqueId = $_SESSION['regidUser']; ?>

<?php

if(!isset($UserUniqueId)){

  $_SESSION["ErrorMessage"] = " valid request !";
  Redirect_to("index");

}

?>

<?php 
              global $ConnectingDB;
              $sql = "SELECT * FROM  registration where registration_id = '$UserUniqueId' ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $datetime = $DataRows["datetime"];
                 $title = $DataRows["title"];
                 $fname = $DataRows["fname"];
                 $lname= $DataRows["lname"];
                 $email = $DataRows["email"];
                 $mobile = $DataRows["mobile"];
                 $designation = $DataRows["designation"];
                 $organization = $DataRows["organization"];
                 $address = $DataRows["address"];
                 $registration_id = $DataRows["registration_id"];
                 $type = $DataRows["type"];
                 
                 $SrNo++;
              }
                 
       ?>


<?php
if (isset($_POST['submit'])) {
  
   $reg_id = $UserUniqueId;
   $email = $email;
   $reg_type = $type;
   $txnno = $_POST['txnno'];
   $bon = $_POST['bon'];
   $amount = $_POST['amount'];


 if (empty($txnno)) {
     $_SESSION["ErrorMessage"] = " transaction id !";
     Redirect_to("#");
 }
 elseif(CheckExistTxnId($txnno)) {   
   $_SESSION["ErrorMessage"] = " Enter valid transaction id  !";
   Redirect_to("#");
}
 elseif (empty($bon)) {
   $_SESSION["ErrorMessage"] = " bank name !";
   Redirect_to("#");
}
elseif (empty($amount)) {
   $_SESSION["ErrorMessage"] = " amount !";
   Redirect_to("#");
}
  else{

    #Query to insert post in DB when everything is fine
    global $ConnectingDB; // FOR OLD VERSION OF PHP LIKE 5.6 ect
    $sql = "INSERT INTO  txn_details(reg_id,email,reg_type,txnno,bon,amount)";
    $sql .= "VALUES(:tiTlE,:FnamE,:LnamE,:EmaiL,:MobiLe,:CourSe)";
    $stmt = $ConnectingDB->prepare($sql);
    $stmt->bindValue(':tiTlE', $reg_id);
    $stmt->bindValue(':FnamE', $email);
    $stmt->bindValue(':LnamE', $reg_type);
    $stmt->bindValue(':EmaiL', $txnno);
    $stmt->bindValue(':MobiLe', $bon);
    $stmt->bindValue(':CourSe', $amount);
   
        $Execute =$stmt->execute();

    
        if ($Execute) {
          $_SESSION["SuccessMessage"] = " Payment details inserted successfully";
          Redirect_to("print_registration_details"); // You Can Send Admin to Any PAge YOU Want
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
    <title>IChEC-2021 | Registration</title>
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
       background-image: url('images/register.jpgg');
       background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;

  background-size:100% 800px;
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
    <div class="col-md-12" style="color:#fff;max-height:300px;">

        <h2 style="color: #080835;font-weight:bold;" class="text-center">International Chemical Engineering Conference 2021</h2>
        <h5 style="color: #080835;font-weight:bold;" class="text-center">Registration</h5>  

      </div>
   </div>
</div>



<div style="background-color:#030315;">

<div class="container  py-5" style="padding-top:80px;min-height:300px; ">

<?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

             ?>


<form action="" method="POST">
 
 <div class="row">
     <div class="col-md-4">
        <div class="form-group">
          <label for="txnno">Transaction Id : <small class ="text-danger">*</small> </label>
          <input type="text" name="txnno" id="txnno" class="form-control" placeholder="Enter transaction id...">
        </div>
     </div>
     <div class="col-md-4">
        <div class="form-group">
          <label for="bon">Name of Bank <small class ="text-danger">*</small> </label>
          <input type="text" name="bon" id="bon" class="form-control" placeholder="Enter bank name...">
        </div>
     </div>
     <div class="col-md-4">
        <div class="form-group">
          <label for="amount">Amount (Rs.) <small class ="text-danger">*</small> </label>
          <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter amount...">
        </div>
     </div>
     
 </div>
<br>


<button type="submit" name="submit" id="submit" class="btn btn-light float-right mb-2">Submit</button>

   </form>
</div>

</div>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> $('#year').text(new Date().getFullYear()); </script>
</body>
</html>