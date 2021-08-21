<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IChEC-2021 | Developer	</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css\main.css"> -->
    <script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
    <style>
    *{
      background-color: rgba(0,0,0,0);
      font-family: 'Source Serif Pro', serif;
      
    }
    body{
       background-image: url('images/developer.jpg');
       background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;

  background-size:100% 600px;
       /* background-size: cover; */
       /* max-width: 100%; */
    }

    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

#details a {
color: #000;
font-size: 25px;
padding-left: 10px;
}




    </style>
</head>
<body>

<?php include('navbar.php'); ?>







<div class="container-fluid " style="padding-top: 100px;">
   <div class="row">
    <div class="col-md-12" style="color:#fff;min-height:400px;">

    <div class="card mt-2">
  <img src="images/govind2.jpg" alt="John" style="width:100%"><br>
  <h5 style="color: #000; font-weight:bold;">Govind Suman</h5>
  <div id="details" style="margin: 2px 0;">
    <a href="https://github.com/SDnivog" target="_blank"><i class="fa fa-github"></i></a> 
    <a href="mailto:govindsuman118@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>  
    <a href="https://www.linkedin.com/in/govind-suman-b900b5174/" target="_blank"><i class="fa fa-linkedin"></i></a>  
    <a href="https://giftstore.org.in/" target="_blank"><i class="fa fa-dribbble"></i></a> 
  </div>
  <!-- <p><button>Contact</button></p> -->
</div>

      </div>
   </div>
</div> <br>



<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> $('#year').text(new Date().getFullYear()); </script>
</body>
</html>