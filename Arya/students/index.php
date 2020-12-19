<?php 
include('../database/config.php');
include('../database/function.php');
include('../database/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Students</title>
	  <!-- <link rel = "icon" href ="http://trando.in/img/logo icon.png"> -->
	  <meta name="viewport" content="width=device-width,inital-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
	  <link rel="preconnect" href="https://fonts.gstatic.com">
	  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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

<div class="container-fluid">	
<div class="row">
	<div class="col-md-12 mt-4">
		<div class="card">
			<div class="card-header">My Students</div>
			<div class="card-body">
				<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course</th>
      <th scope="col">No Of Students</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>B.Tech</td>
      <td><?php TotalStudentsBTech(); ?></td>
    </tr>
      <tr>
      <th scope="row">2</th>
      <td>M.Tech</td>
      <td><?php TotalStudentsMTech(); ?></td>
    </tr>
   <tr>
      <th scope="row">3</th>
      <td>PhD</td>
      <td><?php TotalStudentsPhD(); ?></td>
    </tr>
  </tbody>
  <tfoot>
     <tr>
      <th scope="col">Total</th>
      <th scope="col">B.Tech + M.Tech + PhD</th>
      <th scope="col"><?php TotalStudents(); ?></th>
    </tr>
  </tfoot>
</table>
			</div>
		</div>
	</div><!-- /row -->

</div> <!-- /container-fluid --><br>

<div class="container-fluid">
	<div class="row">
	<div class="col-md-5 mb-2">
	<div id="piechart" style="width: 100%; height: 500px;"></div>
</div>
<div class="col-md-7 " style="min-height: 500px;">
	<div id="columnchart_material" style="width: 100%; height: 500px;"></div>
</div>
</div>
</div>

<?php include('../footer.php'); ?>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Course', 'No. Of Students'],
          ['B.Tech', <?php TotalStudentsBTech(); ?>],
          ['M.Tech', <?php TotalStudentsMTech(); ?>],
          ['PhD',  <?php TotalStudentsPhD(); ?>],
        ]);

        var options = {
          title: 'All Students of Department of Chemical Engineering'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['BATCH', 'B.Tech', 'M.Tech', 'PhD'],
          ['2017', 1000, 400, 200],
          ['2018', 1170, 460, 250],
          ['2019', 660, 1120, 300],
          ['2020', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: '    No of Students (All Courses)  ',
            subtitle: 'No of Students (All Courses): 2017-2020',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> $('#year').text(new Date().getFullYear()); </script>
</body>
</html>