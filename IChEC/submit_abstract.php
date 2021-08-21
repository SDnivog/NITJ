


<!-- title=Mr.&fname=Govind&lname=Suman&email=govindsuman118%40gmail.com&
mobile=9983904397&designation=Student&organization=giftstore&address=MBH+F-Block%0D%0ARoom+No.++121&type=&register= -->

<?php 
include('database/config.php');
include('database/function.php');
include('database/session.php');
?>

<?php 
$UserUniqueId = $_SESSION['regidUser'];
$UserEmail = $_SESSION['UserEmailId'];
$title1 = $_SESSION['UserTitleId'] ;
$fname1 = $_SESSION['UserFirstNameId'] ;
$lname1  = $_SESSION['UserLastNamelId'] ;
?>

<?php

if(!isset($UserUniqueId)){
  $_SESSION["ErrorMessage"] = " complete your registration step !";
  Redirect_to("registration");
}

?>

<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'message/vendor/autoload.php';

 if (isset($_POST['Submit'])) {
  
   $reg_id = $_POST['reg_id'];
   $paper_title = $_POST['paper_title'];
   $abstract = $_POST['abstract'];
   $keywords = $_POST['keywords'];
   $Image = date('mjYHis').'_'.$_FILES['file']['name'];
   $Target = "files/".basename($Image);


 if (empty($reg_id)) {
     $_SESSION["ErrorMessage"] = " valid request !";
     Redirect_to("#");
 }
 elseif(!CheckExistRegistrationId($reg_id)) {   
  $_SESSION["ErrorMessage"] = " valid registration id !";
  Redirect_to("#");
}
 elseif (empty($paper_title)) {
   $_SESSION["ErrorMessage"] = " paper_title !";
   Redirect_to("#");
}
elseif (empty($abstract)) {
   $_SESSION["ErrorMessage"] = " abstract !";
   Redirect_to("#");
}
 elseif (empty($keywords)) {
     $_SESSION["ErrorMessage"] = " abstract keywords !";
     Redirect_to("#");
 }
 elseif (empty($Image)) {
     $_SESSION["ErrorMessage"] = " upload abstract file !";
     Redirect_to("#");
 }
 
  else{

    global $ConnectingDB;
    $sql = "INSERT INTO  abstract_reg(reg_id,paper_title,abstract,keywords,file)";
    $sql .= "VALUES(:tiTlE,:FnamE,:LnamE,:EmaiL,:MobiLe)";
    $stmt = $ConnectingDB->prepare($sql);
    $stmt->bindValue(':tiTlE', $reg_id);
    $stmt->bindValue(':FnamE', $paper_title);
    $stmt->bindValue(':LnamE', $abstract);
    $stmt->bindValue(':EmaiL', $keywords);
    $stmt->bindValue(':MobiLe', $Image);
    
        $Execute =$stmt->execute();

        move_uploaded_file($_FILES["file"]["tmp_name"], $Target);
        if ($Execute) {


          $mail = new PHPMailer;

          $htmlversion="<p>Dear <b> ".$title1." ".$fname1." ".$lname1." </b>,<br>
          Thank you for your interest in IChEEC-2021! Your abstract has been received. <br>
          The information about acceptance and rejection of abstract will be intimated through the e-mail.<br> <br>
          

          <b> Thanks and Regards </b> <br>
          IChEEC-2021 Team<br>
          Chemical Engineering, <br>
          NIT Jalandhar<br>
          https://icheec.com/
           </p>";
          $textVersion="Hi ,.\r\n ";
          $mail->isSMTP();                                     		 // Set mailer to use SMTP
          $mail->Host = 'smtp.hostinger.in';  								// Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                                // Enable SMTP authentication
          $mail->Username = 'info@icheec.com';         			  // SMTP username
          $mail->Password = 'Hrw6S[k4O:i3';                      // SMTP password
          $mail->Port = 587;                                   // TCP port to connect to
          $mail->setFrom('info@icheec.com', 'IChEEC-2021');
          $mail->addAddress($UserEmail);               // Name is optional
          $mail->addBCC('govindsuman118@gmail.com');
          //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
          //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'Abstract Successfully submitted in IChEEC-2021';
          $mail->Body    = $htmlversion;
          $mail->AltBody = $textVersion;
          $mail->send();

          $_SESSION["SuccessMessage"] = " Abstract submitted successfully ";
          Redirect_to("#"); // You Can Send Admin to Any PAge YOU Want
        }else{
          $_SESSION["ErrorMessage"] = "Something Went to Wrong! Try Again!";
        Redirect_to("#");
        }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IChEC-2021 | Paper Submission</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script src="https://kit.fontawesome.com/96ab48350d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
    <style>
    *{
      background-color: rgba(0,0,0,0);
      font-family: 'Source Serif Pro', serif;
      
    }
    body{
       background-image: url('images/register.jppg');
       background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;

  background-size:100% auto;
       /* background-size: cover; */
       /* max-width: 100%; */
    }
    label{
       color: #fff;
    }


    </style>
</head>
<body>

<?php include('navbar.php'); ?>


<div class="container-fluid " style="padding-top: 120px;">
   <div class="row">
    <div class="col-md-12" style="color:#fff;min-height:300px;">

    <h1 style="color: #04122b;font-weight:bold;" class="text-center">International Chemical Engineering Conference 2021</h1>
      <h5 style="color: #080835; font-weight:bold" class="text-center">(100 Glorious Years of Chemical engineering & Technology)</h5>

        <h2 style="color: #080835;font-weight:bold;" class="text-center">Chemical Engineering Department, NIT Jalandhar</h2>  

      </div>
   </div>
</div>



<div style="background-color:#030315;">

<div class="container  py-5" style="padding-top:80px;min-height:200px; ">
<h5 style="font-weight:bold" class="text-center text-light">Abstract Submission</h5> <hr>
<?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

             ?>

<!-- reg_payment -->

<form action="" method="POST" enctype="multipart/form-data">
   <div class="row">
   
   <div class="col-md-6">     
   <div class="form-group">
                <label for="reg_id">Registration Id <small class ="text-danger">*</small> </label>
                <input  type="text" name="reg_id" id="reg_id"  value="<?php echo $UserUniqueId; ?>" class="form-control">
             </div>
      </div>
    <div class="col-md-6">     
    <div class="form-group">
                <label for="paper_title"> Paper Title  <small class ="text-danger">*</small> </label>
                <input type="text" name="paper_title" id="paper_title" placeholder="Enter paper title..." class="form-control">
             </div>
      </div>
    

   </div>

<div class="row">

<div class="col-md-6">     
    <div class="form-group">

      <label for="abstract">Abstract <small class ="text-danger">*</small> </label>
      <input type="abstract" name="abstract" id="abstract" placeholder="Enter abstract..." class="form-control">

    </div>
</div>

<div class="col-md-6">     
    <div class="form-group">
  <label for="keywords">Keywords <small class ="text-danger">*</small> </label>
  <input type="text" id="keywords" name="keywords" class="form-control" placeholder="Enter keywords ">
    </div>
</div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
          <label for="file">Upload file <small class ="text-danger">*</small></label>
          <input type="file" name="file" id="file" class="form-control">
        </div>
        <small class ="text-danger"><b>Note : </b> Only .pdf & .docx files are allowed</small>
    </div>
</div>




<button type="submit" name="Submit" id="Submit" class="btn btn-light float-right mb-2">Submit</button>

   </form>
</div>

</div>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> $('#year').text(new Date().getFullYear()); </script>
</body>
</html>