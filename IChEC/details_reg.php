

<!-- this page for download registered details -->


<?php 
include('database/config.php');
include('database/function.php');
include('database/session.php');
?>

<?php $reg_id = $_GET['registration_id']; ?>

<?php 
              global $ConnectingDB;
              $sql = "SELECT * FROM  registration where registration_id = '$reg_id' ";
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
              $sql = "SELECT * FROM  txn_details  ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $datetime = $DataRows["datetime"];
                 $reg_id1 = $DataRows["reg_id"];
                 $email1 = $DataRows["email"];
                 $reg_type= $DataRows["reg_type"];
                 $txnno = $DataRows["txnno"];
                 $bon = $DataRows["bon"];
                 $amount = $DataRows["amount"];
                
                 
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
        <h5 style="color: #080835;font-weight:bold;" class="text-center">Registration details</h5>  

      </div>
   </div>
</div>



<div style="background-color:#030315;">

<div class="container  py-5" style="padding-top:80px;min-height:200px; overflow:auto;">





</div>

</div>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> $('#year').text(new Date().getFullYear()); </script>
</body>
</html>