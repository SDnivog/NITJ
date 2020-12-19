<!DOCTYPE html>
<html>
<head>
	<title>Awards</title>
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
<body style="background-color: #fff;">
	 <?php include('../header.php'); ?>
	<?php include('../navbar.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12 py-3 bg-light">
			<div class="card">
				<div class="card-header">Awards</div>
				<div class="card-body">
					<table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Position/Prize</th>
                          <th scope="col">Award</th>
                          <th scope="col">Year</th>
                      
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>3rd Position </td>
                          <td>Poster presentation during CHEMCON 2016 in the category of Polymer/ polymer rheology.<br>Aman Pathania and Raj Kumar Arya, 2016, “Residual Solvent Study During the Drying of Crosslinked Polymeric Coatings”, CHEMCON 2016, Dec 27 – 30, Anna University, Chennai, India.</td>
                          <td>2016</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td></td>
                          <td>Best Undergraduate Research Paper Award For Publishing in Highest Impact Factor Journal by IICHE. <br>Raj Kumar Arya and Chitresh Kumar Bhargava, 2015, “Simulation Analysis of Drying of Ternary Polymeric Solution Coatings”, Progress in Organic Coatings, 78, 155 – 167, Accepted on 23 September 2014, Published online on 12 October 2014, DOI: 10.1016/j.porgcoat.2014.09.011.</td>
                          <td>2015</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>2nd Prize </td>
                          <td>Model making content at Institute Level,  Department of Chemical Engineering, HBTI Kanpur, U.P., India</td>
                          <td>1998–1999</td>
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