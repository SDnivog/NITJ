<?php 
include('database/config.php');
include('database/function.php');
include('database/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Videos Gallery</title>
	  <!-- <link rel = "icon" href ="http://trando.in/img/logo icon.png"> -->
	  <meta name="viewport" content="width=device-width,inital-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
	  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
<style type="text/css">
   *{
      font-family: 'Rubik', serif;
      
    }
   a img :hover{
 
    }
</style>
</head>
<body style="background-color: #fff;">
	 <?php include('header.php'); ?>
	<?php include('navbar.php'); ?>

<div class="container bg-light py-3">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
      <div class="card-header"><h4 style="font-weight: bold;">Videos Gallery</h4></div>
      <div class="card-body">
         <?php 
              
              global $ConnectingDB;
              $sql = "SELECT * FROM  video_gallery order by id desc ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $Url = $DataRows["url"];
                 $DateTime = $DataRows["datetime"];
                 $Category = $DataRows["category"];
                 $SrNo++;
                 
       ?>  
     <iframe width="310" height="250" src="<?php echo $Url; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 <?php } ?>
     
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