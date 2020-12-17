<?php 
include('database/config.php');
include('database/function.php');
include('database/session.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Image Gallery</title>
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
<body style="background-color: #ddd;">
	 <?php include('header.php'); ?>
	<?php include('navbar.php'); ?>

<div class="container bg-light py-3">
	<h4 style="font-weight: bold;"> Image Gallery</h4>
	<div class="row">
		<div class="col-md-12">
			    <?php 
              
              global $ConnectingDB;
              $sql = "SELECT * FROM   img_gallery order by id desc ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $Title = $DataRows["text"];
                 $Image = $DataRows["image"];
                 $DateTime = $DataRows["datetime"];
                 $Category = $DataRows["category"];
                 $SrNo++;
                 
       ?>
			 <a href="images/gallery/<?php echo $Image; ?>"><img src="images/gallery/<?php echo $Image; ?>" style="width: 100px; height: 100px; margin: 10px 7px; "></a>
            <?php } ?>

		</div>
	</div>
</div>


<?php include('footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> $('#year').text(new Date().getFullYear()); </script>
</body>
</html>