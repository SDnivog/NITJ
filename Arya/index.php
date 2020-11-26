<?php ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dr Raj Kumar Arya</title>
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

    #reheight marquee p a{
    	text-decoration: none;
    }
</style>
</head>
<body style="background-color: #ddd;">
<?php include('navbar.php'); ?>
<div class="container-fluid">
	<div class="row mt-2">
		<div class="col-md-8">
		<?php include('slider.php'); ?>	
		<marquee class="bg-light  mt-2" width="100%"  direction="left" scrollamount="8" onmouseover="this.stop()" onmouseout="this.start()" >
      <p class="mt-3"><a href="">This is a sample scrolling text that has scrolls texts to left. <img src="images/new.gif"></a> <a href="">This is a sample scrolling text that has scrolls texts to left. gkjhgg <img src="images/new.gif"></a></p> 
     </marquee>	
		</div>
		<div class="col-md-4 bg-light" style="min-height: 200px;">
			<div class="card mt-1">
				<div class="card-header" style="background-color: #104071!important; color: #fff;">NEWS</div>
				<div class="card-body" id="reheight">
				<marquee width="100%" direction="up" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()" style="max-height: 300px;">
               <p><a href="">This is a sample scrolling text that has scrolls in the upper direction. <img src="images/new.gif"></a></p>
               <p><a href="">This is a sample scrolling text that has scrolls in the upper direction. <img src="images/new.gif"></a></p>
               <p><a href="">This is a sample scrolling text that has scrolls in the upper direction. <img src="images/new.gif"></a></p>
               <p><a href="">This is a sample scrolling text that has scrolls in the upper direction. <img src="images/new.gif"></a></p>
               <p><a href="">This is a sample scrolling text that has scrolls in the upper direction. <img src="images/new.gif"></a></p>
               <p><a href="">This is a sample scrolling text that has scrolls in the upper direction. <img src="images/new.gif"></a></p>
               <p><a href="">This is a sample scrolling text that has scrolls in the upper direction. <img src="images/new.gif"></a></p>
               <p><a href="">This is a sample scrolling text that has scrolls in the upper direction. <img src="images/new.gif"></a></p>
               <p><a href="">This is a sample scrolling text that has scrolls in the upper direction. <img src="images/new.gif"></a></p>
               <p><a href="">This is a sample scrolling text that has scrolls in the upper direction. <img src="images/new.gif"></a></p>
               <p><a href="">This is a sample scrolling text that has scrolls in the upper direction. <img src="images/new.gif"></a></p>
               <p><a href="">This is a sample scrolling text that has scrolls in the upper direction. <img src="images/new.gif"></a></p>
                </marquee>
				</div>
			</div>
		</div>
	</div> <!-- row -->


	<div class="row">
		<div class="col-md-10 bg-warning" style="min-height: 200px;">
		

		</div>
</div>

</div> <!-- container-fluid -->




<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> $('#year').text(new Date().getFullYear()); </script>
</body>
</html>