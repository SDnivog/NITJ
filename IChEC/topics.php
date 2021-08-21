<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IChEC-2021 | Topics</title>
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
       background-image: url('images/topics.jpg');
       background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;

  background-size:100% 500px;
       /* background-size: cover; */
       /* max-width: 100%; */
    }
    </style>
</head>
<body>

<?php include('navbar.php'); ?>



<!-- <div class="" style="max-height:500px;">

<img src="images/chemical.jpg" style="width: 100%;" alt="">

</div> -->

<div class="container-fluid " style="padding-top: 120px;">
   <div class="row">
    <div class="col-md-12" style="color:#fff;max-height:300px;">

        <h2 style="color: #fff;font-weight:bold;" class="text-center">International Chemical Engineering Conference 2021</h2>
        <h6 style="color: #fff;font-weight:bold;" class="text-center">Topics</h6>  

      </div>
   </div>
</div>

<div class="container-fluid " style="padding-top: 80px;">
   <div class="row">
    <div class="col-md-12 py-4" style="color:#fff;min-height:400px;background-color:#070742;">

       <p style="text-align: justify;">International Chemical Engineering Conference (IChEEC-2021) is the premier forum for the presentation of new advances and research results in the fields of theoretical, 
          experimental, and applied Chemical Engineering. This conference is aimed to showcase the various innovation over the last 100 years in chemical engineering and its allied branches.
          Researchers working in chemical and all its allied branches are invited to submit their abstract on the following topic;</p>

<ul>
  <li>Chemical Reaction Engineering,</li>
  <li>Process Modeling, Simulation, Control</li>
  <li>Transport processes (Heat, Mass and Momentum)</li>
  <li>Separation Processes,</li>
  <li>Computational Fluid Dynamics,</li>
  <li>Bio and Food Technology,</li>
  <li>Energy, Environment and Sustainable Engineering,</li>
  <li>Coating and Drying,</li>
  <li>Petrochemical Engineering</li>
  <li>Polymer/Plastic Technology</li>
  <li>Nanotechnology</li>
  <li>Material Science.</li>
</ul>


      </div>
   </div>
</div>


<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> $('#year').text(new Date().getFullYear()); </script>
</body>
</html>