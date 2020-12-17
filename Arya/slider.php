
   <?php 

    $con = new mysqli("localhost","root","","nitj_arya");
    $Result = $con->query("SELECT * FROM  slide_img ");

 ?>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">



  <ul class="carousel-indicators">
      <?php 

                $i= 0;
                foreach ($Result as $row) {
                $actives = '';
                if ($i == 0) {
                $actives = 'active';
                
                }
   

               ?>
    <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
    <?php $i++; } ?>
  </ul>
  <div class="carousel-inner">

               <?php 

               $i= 0;
               foreach ($Result as $row) {
               $actives = '';
               if ($i == 0) {
               $actives = 'active';
              
              }
   

              ?>
     <div class="carousel-item <?= $actives; ?>">
     <a href="#"> <img class="d-block w-100" src="images/<?=$row['image'] ?>"  style="max-height: 400px;" class="img-fluid" alt="First slide"></a> 
    <!-- <img src="images/slider/1.png" class="d-block w-100 text-center"> -->
      <div class="carousel-caption d-none d-md-block ">
   <!--  <h5><?=$row['name'] ?></h5> -->
    <!-- <p style=""><button class="btn btn-danger btn-lg" style=" "><a href="view_product/?name=<?=$row['name'] ?>" style="text-decoration: none;color: #fff;">Buy Now</a></button> </p> -->
  </div>
    </div>
    <?php $i++; }  ?> 
  </div>


<!--   <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.nitj.ac.in/images/slider/STC_Dec_2020_18280.JPG" class="d-block w-100" style="max-height: 400px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.nitj.ac.in/images/slider/fit_india_movement2_14928.jpg" class="d-block w-100" style="max-height: 400px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.nitj.ac.in/images/slider/fit_india_movement1_33827.jpg" class="d-block w-100" style="max-height: 400px;" alt="...">
    </div>
  </div> -->





  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
