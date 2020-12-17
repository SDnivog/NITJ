<!DOCTYPE html>
<html>
<head>
	<title>Webnar organized</title>
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

<div class="container">
	<div class="row">
		<div class="col-md-12 py-3 bg-light">
			<div class="card">
				<div class="card-header">Webnar Organized</div>
				<div class="card-body">
					<table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Type</th>
                          <th scope="col">Title</th>
                          <th scope="col">Venue</th>
                          <th scope="">From</th>
                          <th scope="col">To</th>
                          <th scope="col">Designation</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>National</td>
                          <td>A Webinar on "Heavy Crude Oil Production Technologies- Practical Approach", 8 August 2020, 11:30 hours by Mr. Hemant Kumar Sonkar , Chief Engineer (Production), Asia Pacific BU, ONGC Videsh Ltd., New Delhi.</td>
                          <td>Department of Chemical Engineering, Dr. B.R. Ambedkar National Institute of Technology, Jalandhar, Punjab - 144011, India</td>
                          <td>08-08-2020</td>
                          <td>08-08-2020</td>
                          <td>Coordinator</td>
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