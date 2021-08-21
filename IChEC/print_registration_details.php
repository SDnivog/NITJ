
<!-- print_registration_details.php -->


<?php 
include('database/config.php');
include('database/function.php');
include('database/session.php');
?>

<?php 

if(isset($_POST['download']))

//$reg_id = $_GET['registration_id']; 
//$reg_id2 = $_SESSION['regidUser'] = $_POST['registration_id']; 

?>

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
            //   $sql = "SELECT * FROM  registration  ";
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
              global $ConnectingDB;
              $sql = "SELECT * FROM  txn_details where reg_id = '$UserUniqueId' ";
            //   $sql = "SELECT * FROM  txn_details  ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $datetime1 = $DataRows["datetime"];
                 $reg_id1 = $DataRows["reg_id"];
                 $email1 = $DataRows["email"];
                 $reg_type1 = $DataRows["reg_type"];
                 $txnno1 = $DataRows["txnno"];
                 $bon1 = $DataRows["bon"];
                 $amount1 = $DataRows["amount"];
                 
                 
                 $SrNo++;
              }
                 
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



<div style="background-color:#fff;">

<div class="container  py-5" style="padding-top:80px;min-height:300px; overflow:auto; ">

<?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

             ?>


<table class="table " style="width: 100%;">
  <thead>
    <tr>
      <th scope="col"><img src="images/logo.jpg" alt="" style="width: 100px; height:100px;"></th>
      <th colspan="2" class="text-center">International Chemical Engineering Conference 2021 <br><small>(100 years of glorious chemical engineering)</small> <br>Chemical Engineering Department, NIT Jalandhar</th>
      <th scope="col"><img src="images/nitj.jpeg" alt="" style="width: 100px; height:100px;"></th>
    </tr>
  </thead>
  <tbody>

 

    <tr>
      <th colspan="2">Registration datetime : </th>
      <td colspan="2"><?php echo $datetime; ?></td>
    </tr>
    <tr>
      <th colspan="2">Registration Id : </th>
      <td colspan="2"><?php echo $registration_id; ?></td>
    </tr>
    <tr>
      <th colspan="2">Name : </th>
      <td colspan="2"><?php echo $title; ?> <?php echo $fname; ?> <?php echo $lname; ?></td>
    </tr>
    <tr>
      <th colspan="2">Email : </th>
      <td colspan="2"><?php echo $email; ?></td>
    </tr>
    <tr>
      <th colspan="2">Mobile No. : </th>
      <td colspan="2"><?php echo $mobile; ?></td>
    </tr>
    <tr>
      <th colspan="2">Designation : </th>
      <td colspan="2"><?php echo $designation; ?></td>
    </tr>
    <tr>
      <th colspan="2">Organization : </th>
      <td colspan="2"><?php echo $organization; ?></td>
    </tr>
    <tr>
      <th colspan="2">Address : </th>
      <td colspan="2"><?php echo $address; ?></td>
    </tr> 
    <tr>
      <th colspan="4" class="text-center"> <h5 style="font-weight:bold;">Payment details</h5> </th>
      
    </tr>
    <tr>
      <th colspan="2">Registration Type : </th>
      <td colspan="2"><?php echo $reg_type1; ?></td>
    </tr>
    <tr>
      <th colspan="2">Registration Id : </th>
      <td colspan="2"><?php echo $reg_id1; ?></td>
    </tr>
    <tr>
      <th colspan="2">Txn No./Id : </th>
      <td colspan="2"><?php echo $txnno1; ?></td>
    </tr>
    <tr>
      <th colspan="2">Bank Name : </th>
      <td colspan="2"><?php echo $bon1; ?></td>
    </tr>
    <tr>
      <th colspan="2">Amount (Rs.) : </th>
      <td colspan="2"><?php echo $amount1; ?></td>
    </tr>

 
    
 
  </tbody>
</table>

<button  class="float-right"><a href="session_close">Close Session</a> </button>
<button onclick="window.print()" class="float-right">Click here to print</button>

</div>

</div>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> $('#year').text(new Date().getFullYear()); </script>
</body>
</html>