
<?php 
include('database/config.php');
include('database/function.php');
include('database/session.php');
?>

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
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #104071!important;
    border-radius: 0px;
  }
</style>
</head>
<body style="background-color: #ddd;">
  <?php include('header.php'); ?>
<?php include('navbar.php'); ?>








<div class="container-fluid">
	<div class="row mt-2">
		<div class="col-md-8">
		<?php include('slider.php'); ?>	

		<marquee style="background-color: #104071!important;" class="  mt-2" width="100%"  direction="left" scrollamount="8" onmouseover="this.stop()" onmouseout="this.start()" >
      <p class="mt-3">
         <?php 
              
              global $ConnectingDB;
              $sql = "SELECT * FROM   heighlights order by id desc limit 2 ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $Title = $DataRows["title"];
                 $File = $DataRows["file"];
                 $DateTime = $DataRows["datetime"];
                 $Category = $DataRows["category"];
                 $SrNo++;
                 
       ?>
        <a href="pdf_files/<?php echo $File; ?>" style="color: #fff;"><?php echo $Title; ?> <img src="images/new.gif"></a> 
      <?php } ?>
   <!--      <a href="" style="color: #fff;">This is a sample scrolling text that has scrolls texts to left. gkjhgg <img src="images/new.gif"></a> -->
      </p> 
     </marquee>	

<div class="bg-light py-2" style="font-family: 'Rubik', serif; ">
<ul class="nav nav-pills mb-1 ml-2" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Upcomming Events</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Student Corner</a>
  </li>
 <!--  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
  </li> -->
</ul><hr style="height: 2px;background-color: #104071!important; margin-top: -4px;">
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <ul class="nav-item">


         <?php 
              
              global $ConnectingDB;
              $sql = "SELECT * FROM  upcomming_events  ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $Title = $DataRows["title"];
                 $File = $DataRows["file"];
                 $DateTime = $DataRows["datetime"];
                 $Category = $DataRows["category"];
                 $SrNo++;
                 
       ?>


      <li class=""><a href="pdf_files/<?php echo $File; ?>" style="text-decoration: none;"><?php echo $Title; ?> <img src="images/new.gif"></a></li>
    <?php } ?>
    </ul>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" style="max-height: 200px;overflow: scroll;">
    <ul class="nav-item">
          <?php 
              
              global $ConnectingDB;
              $sql = "SELECT * FROM  student_corner  ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $Title = $DataRows["title"];
                 $File = $DataRows["file"];
                 $DateTime = $DataRows["datetime"];
                 $Category = $DataRows["category"];
                 $SrNo++;
                 
       ?>

      <li class=""><a href="pdf_files/<?php echo $File; ?>" style="text-decoration: none;"><?php echo $Title; ?><img src="images/new.gif"></a></li>
    <?php } ?>
    </ul>
  </div>
  <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div> -->
</div>

</div>
     
		</div>
		<div class="col-md-4 bg-light" style="min-height: 200px;">
			<div class="card mt-1">
				<div class="card-header" style="background-color: #104071!important; color: #fff;">NEWS</div>
				<div class="card-body" id="reheight">
				<marquee width="100%" direction="up" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()" style="min-height: 250px;">
             <?php 
              
              global $ConnectingDB;
              $sql = "SELECT * FROM   news  ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $Title = $DataRows["title"];
                 $File = $DataRows["file"];
                 $DateTime = $DataRows["datetime"];
                 $Category = $DataRows["category"];
                 $SrNo++;
                 
       ?>
               <p><a href="pdf_files/<?php echo $File; ?>"><?php echo $Title; ?><img src="images/new.gif"></a></p>
             <?php } ?>

                </marquee>
				</div>
			</div>
      <div class="card">
        <div class="card-header" style="background-color: #104071!important; color: #fff;">Recent Project</div>
        <div class="card-body" style="max-height: 250px;">
          <?php include('project.php'); ?>
        </div>
      </div>
		</div>
	</div> <!-- row -->


	<div class="row">	
    <div class="col-md-12">
    <div class="card">
      <div class="card-header" style="background-color: #104071!important; color: #fff;"><h6 style="font-weight: bold;">Video Gallery</h6></div>
      <div class="card-body">
        <?php 
              
              global $ConnectingDB;
              $sql = "SELECT * FROM  video_gallery order by id desc limit 4 ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $Url = $DataRows["url"];
                 $DateTime = $DataRows["datetime"];
                 $Category = $DataRows["category"];
                 $SrNo++;
                 
       ?>
       <iframe width="250" height="200" src="<?php echo $Url; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     <?php } ?>

<a href="Videos">See more...</a>
      </div>
    </div>

</div>
		</div>

    <!--  Gallery section starting here-->

      <div class="row py-3 ">
        <div class="col-md-12 ">
          <div class="card bg-light">
            <div class="card-header" style="background-color: #104071!important; color: #fff;"> <h6 style="font-weight: bold;" class="" >Gallery</h6></div>
            <div class="card-body">

         <?php 
              
              global $ConnectingDB;
              $sql = "SELECT * FROM   img_gallery order by id desc limit 4 ";
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
   
           <a href="Gallery">See more...</a>
            </div>
          </div>
         
           
        </div>
      </div>


    <!--  Gallery section Ending here-->

</div> <!-- container-fluid -->




<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> $('#year').text(new Date().getFullYear()); </script>
</body>
</html>