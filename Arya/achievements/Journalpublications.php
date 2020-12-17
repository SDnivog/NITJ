<!DOCTYPE html>
<html>
<head>
	<title>Journal Publications</title>
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

<div class="container bg-light">
	<div class="row">
		<div class="col-md-12 py-3">
			<div class="card">
				<div class="card-header">List of Journal Publications</div>
				<div class="card-body">
					<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Year</th>
      <th scope="col">Journal</th>
      <th scope="col">Publication</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>2018</td>
      <td>Applied Nanoscience, ,8(8), 2077-2092</td>
      <td>Shekhar Agnihotri, Devendra Sillu, Garima Sharma, Raj Kumar Arya,"Photocatalytic and Antibacterial Potential of Silver Nanoparticles Derived from Pineapple Waste: Process Optimization and Modeling Kinetics for Dye Removal"</td>
    </tr>
    <tr>
    	<td>2</td>
    	<td>2015</td>
    	<td>Chemical Engineering & Technology, 38(3), 530 – 536</td>
    	<td>Kshitij Tiwari, Sumit Agrawal, and Raj Kumar Arya, “Generalized Pinch Analysis Scheme Using MATLAB”</td>
    </tr>
     </tbody>
</table>
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