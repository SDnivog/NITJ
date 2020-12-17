
<?php 
include('database/config.php');
include('database/function.php');
include('database/session.php');
?>

<?php
// Fetching UserName For profile Page  End //
if (isset($_POST['Register'])) {
  
  $Name = $_POST['sname'];
  $Email = $_POST['semail'];
  $Mobile = $_POST['snum'];
  $Course = $_POST['scourse'];
  $YearR = $_POST['yearr'];
  $YearG = $_POST['yearg'];
  $Position = $_POST['position'];
  $Address = $_POST['address'];

 if (empty($Name)) {
     $_SESSION["ErrorMessage"] = " student's name !";
     Redirect_to("#");
 }
 elseif (empty($Email)) {
     $_SESSION["ErrorMessage"] = " email !";
     Redirect_to("#");
 }
 elseif(CheckExistStudent($Email)) {   
        $_SESSION["ErrorMessage"] = " email already exist !";
        Redirect_to("#");
  }
  elseif (empty($Mobile)) {
     $_SESSION["ErrorMessage"] = " mobile no. !";
     Redirect_to("#");
 }
 elseif (empty($Course)) {
     $_SESSION["ErrorMessage"] = " choose course !";
     Redirect_to("#");
 }
 elseif (empty($YearR)) {
     $_SESSION["ErrorMessage"] = " year of registration !";
     Redirect_to("#");
 }
 elseif (empty($YearG)) {
     $_SESSION["ErrorMessage"] = " year of graduation !";
     Redirect_to("#");
 }
 elseif (empty($Position)) {
     $_SESSION["ErrorMessage"] = " position !";
     Redirect_to("#");
 }
 elseif (empty($Address)) {
     $_SESSION["ErrorMessage"] = " address !";
     Redirect_to("#");
 }
  else{

    #Query to insert post in DB when everything is fine
    global $ConnectingDB; // FOR OLD VERSION OF PHP LIKE 5.6 ect
    $sql = "INSERT INTO  students(name,email,num,course,yearr,yearg,position,address)";
    $sql .= "VALUES(:namE,:EmaiL,:MobiLe,:CourSe,:YeaRR,:YearG,:PosITioN,:AddReSs)";
    $stmt = $ConnectingDB->prepare($sql);
    $stmt->bindValue(':namE', $Name);
    $stmt->bindValue(':EmaiL', $Email);
    $stmt->bindValue(':MobiLe', $Mobile);
    $stmt->bindValue(':CourSe', $Course);
    $stmt->bindValue(':YeaRR', $YearR);
    $stmt->bindValue(':YearG', $YearG);
    $stmt->bindValue(':PosITioN', $Position);
    $stmt->bindValue(':AddReSs', $Address);
        $Execute =$stmt->execute();

        if ($Execute) {
          $_SESSION["SuccessMessage"] = "Registration successfully";
          Redirect_to("#"); // You Can Send Admin to Any PAge YOU Want
        }else{
          $_SESSION["ErrorMessage"] = "Something Went to Wrong! Try Again!";
        Redirect_to("#");
        }
  }
}// Ending of Submit button if-Condition

?>



<!DOCTYPE html>
<html>
<head>
	<title>Student | Registration</title>
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
    label{
    	font-weight: bold;
    }
</style>
</head>
<body style="background-color:#ccc;">
	 <?php include('header.php'); ?>
	<?php include('navbar.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12 py-3">
			<div class="card">
				<div class="card-header">Student Registrarion form</div>
         <?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

             ?>
				<div class="card-body">
					<form method="post" action="">
           
           <div class="row">
           	<div class="col-md-6">
           		
           	</div>
           	<div class="col-md-6">
           		
           	</div>
           </div>


            <div class="row">
           	<div class="col-md-6">
           		<div class="form-group">
							<label for="sname">Student's Name : </label>
							<input type="text" name="sname" id="sname" class="form-control" placeholder="eg. Govind Suman">
						</div>
           	</div>
           	<div class="col-md-6">
           		<div class="form-group">
							<label for="semail">Student's Email : </label>
							<input type="email" name="semail" id="semail" class="form-control" placeholder="example.@nitj.ac.in">
						</div>
           	</div>
           </div>

            <div class="row">
           	<div class="col-md-6">
           		 <div class="form-group">
              <label for="snum">Student's Mobile no : </label>
              <input type="number" name="snum" id="snum" class="form-control" placeholder="eg. 1234567890">
            </div>
           	</div>
           	<div class="col-md-6"> 
             <label for="scourse">Choose Course : </label>     		
              <select class="form-control" id="scourse" name="scourse">Select Course
              <option>B.Tech</option>
              <option>M.Tech</option>
              <option>PhD</option>
              </select>
           	</div>
           </div>

            <div class="row">
           	<div class="col-md-6">
           		<div class="form-group">
               <label for="yearr">Year of registration : </label>
               <select name="yearr" class="form-control" id="yearr">
                  <?php foreach(range(date('Y',time()),2017) as $r) echo '<option>'.$r.'</option>'; ?> 
               </select>
              </div>
           	</div>
           	<div class="col-md-6">
           		<div class="form-group">
               <label for="yearg">Year of graduation : </label>
               <select name="yearg" id="yearg" class="form-control">
                  <option>2020</option>
                  <option>2021</option>
                  <option>2022</option>
                  <option>2023</option>
                  <option>2024</option>
               </select>
              </div>
           	</div>
           </div>
            <div class="row">
           	<div class="col-md-12">
           		<div class="form-group">
               <label for="position">Current Position : </label>
               <input type="text" name="position" id="position" class="form-control" placeholder="eg. student"> 
              </div>
           	</div>
           </div>
           <div class="row">
             <div class="col-md-12">
               <div class="form-group">
                <label for="address">Student's Address : </label>
                  <textarea class="form-control" id="address" name="address" cols="3" rows="2" placeholder="eg. Jaipur Rajasthan"></textarea>
               </div>
             </div>
           </div>
						
						<button type="submit" name="Register" class="btn btn-primary">Submit</button>
					</form>
					
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