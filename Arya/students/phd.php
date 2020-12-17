<?php 
include('../database/config.php');
include('../database/function.php');
include('../database/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Students | PhD</title>
	  <!-- <link rel = "icon" href ="http://trando.in/img/logo icon.png"> -->
	  <meta name="viewport" content="width=device-width,inital-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
	  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
<style type="text/css">
   *{
      font-family: 'Rubik', serif;
      
    }
</style>
</head>
<body style="background-color: #ddd;">
  <?php include('../header.php'); ?>
	<?php include('../navbar.php'); ?>

<div class="container-fluid bg-light">	
<div class="row">

	<div class="col-md-12 mt-3">
<h5 class="py-2 ml-2">All PhD students of all batches</h5>	
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Batch 2017</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#b2020" role="tab" aria-controls="contact" aria-selected="false">Batch 2018</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Batch 2019</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Batch 2020</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  	
<div class="card">
	<div class="card-header">All Batch 2017 PhD Students</div>
	<div class="card-body" style="overflow: scroll;">
		  	<table class="table table-bordered" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Year of Registration</th>
      <th scope="col">Year of Graduation</th>
      <th scope="col">Current Position</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
 <?php
    global $ConnectingDB;
              $sql = "SELECT * FROM  students where course = 'PhD' AND yearr = '2017' ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $Name = $DataRows["name"];
                 $DateTime = $DataRows["datetime"];
                 $Email = $DataRows["email"];
                 $Mobile = $DataRows["num"];
                 $YearR = $DataRows["yearr"];
                 $YearG = $DataRows["yearg"];
                 $Position = $DataRows["position"];
                 $Address = $DataRows["address"];
                 $SrNo++;
                 
       ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $SrNo; ?></th>
      <td><?php echo $Name; ?></td>
      <td><?php echo $YearR; ?></td>
      <td><?php echo $YearG; ?></td>
      <td><?php echo $Position; ?></td>
      <td><?php echo $Address; ?></td>
    </tr>
  </tbody>
<?php } ?>
</table>
	</div>
</div> 

  </div>

    <div class="tab-pane fade" id="b2020" role="tabpanel" aria-labelledby="profile-tab">
  	<div class="card">
	<div class="card-header">All Batch 2018 PhD Students</div>
	<div class="card-body" style="overflow: scroll;">
		  	<table class="table table-bordered" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Year of Registration</th>
      <th scope="col">Year of Graduation</th>
      <th scope="col">Current Position</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
 <?php
    global $ConnectingDB;
              $sql = "SELECT * FROM  students where course = 'PhD' AND yearr = '2018' ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $Name = $DataRows["name"];
                 $DateTime = $DataRows["datetime"];
                 $Email = $DataRows["email"];
                 $Mobile = $DataRows["num"];
                 $YearR = $DataRows["yearr"];
                 $YearG = $DataRows["yearg"];
                 $Position = $DataRows["position"];
                 $Address = $DataRows["address"];
                 $SrNo++;
                 
       ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $SrNo; ?></th>
      <td><?php echo $Name; ?></td>
      <td><?php echo $YearR; ?></td>
      <td><?php echo $YearG; ?></td>
      <td><?php echo $Position; ?></td>
      <td><?php echo $Address; ?></td>
    </tr>
  </tbody>
<?php } ?>
</table>
	</div>
</div> 
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  	<div class="card">
	<div class="card-header">All Batch 2019 PhD Students</div>
	<div class="card-body" style="overflow: scroll;">
		  	<table class="table table-bordered" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Year of Registration</th>
      <th scope="col">Year of Graduation</th>
      <th scope="col">Current Position</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
 <?php
    global $ConnectingDB;
              $sql = "SELECT * FROM  students where course = 'PhD' AND yearr = '2019' ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $Name = $DataRows["name"];
                 $DateTime = $DataRows["datetime"];
                 $Email = $DataRows["email"];
                 $Mobile = $DataRows["num"];
                 $YearR = $DataRows["yearr"];
                 $YearG = $DataRows["yearg"];
                 $Position = $DataRows["position"];
                 $Address = $DataRows["address"];
                 $SrNo++;
                 
       ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $SrNo; ?></th>
      <td><?php echo $Name; ?></td>
      <td><?php echo $YearR; ?></td>
      <td><?php echo $YearG; ?></td>
      <td><?php echo $Position; ?></td>
      <td><?php echo $Address; ?></td>
    </tr>
  </tbody>
<?php } ?>
</table>
	</div>
</div> 
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  	<div class="card">
	<div class="card-header">All Batch 2020 PhD Students</div>
	<div class="card-body" style="overflow: scroll;">
		  	<table class="table table-bordered" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Year of Registration</th>
      <th scope="col">Year of Graduation</th>
      <th scope="col">Current Position</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
 <?php
    global $ConnectingDB;
              $sql = "SELECT * FROM  students where course = 'PhD' AND yearr = '2020' ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $Name = $DataRows["name"];
                 $DateTime = $DataRows["datetime"];
                 $Email = $DataRows["email"];
                 $Mobile = $DataRows["num"];
                 $YearR = $DataRows["yearr"];
                 $YearG = $DataRows["yearg"];
                 $Position = $DataRows["position"];
                 $Address = $DataRows["address"];
                 $SrNo++;
                 
       ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $SrNo; ?></th>
      <td><?php echo $Name; ?></td>
      <td><?php echo $YearR; ?></td>
      <td><?php echo $YearG; ?></td>
      <td><?php echo $Position; ?></td>
      <td><?php echo $Address; ?></td>
    </tr>
  </tbody>
<?php } ?>
</table>
	</div>
</div> 
  </div>

</div>

	</div>
</div>
</div>


<?php include('../footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> $('#year').text(new Date().getFullYear()); </script>
</body>
</html>