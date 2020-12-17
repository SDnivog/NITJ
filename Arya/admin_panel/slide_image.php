<?php 
include('../database/config.php');
include('../database/function.php');
include('../database/session.php');
?>

<?php 
//if (!isset($_SESSION["AId"])) {
  //Redirect_to("../");

//}

 ?>

<?php
// Fetching UserName For profile Page  End //
if (isset($_POST['AddPost'])) {
  
  $Title = $_POST['caption'];
  $Admin = $_POST['cat'];
    $Image = $_FILES['Image']['name'];
  $Target = "../images/".basename($_FILES['Image']['name']);


 if (empty($Image)) {
     $_SESSION["ErrorMessage"] = " Upload image !";
     Redirect_to("#");
 }
  else{

    #Query to insert post in DB when everything is fine
    global $ConnectingDB; // FOR OLD VERSION OF PHP LIKE 5.6 ect
    $sql = "INSERT INTO  slide_img(author,image,text)";
    $sql .= "VALUES(:ADedEd,:ImaGeS,:TitLe)";
    $stmt = $ConnectingDB->prepare($sql);
    $stmt->bindValue(':TitLe', $Title);
    $stmt->bindValue(':ImaGeS', $Image);
    $stmt->bindValue(':ADedEd', $Admin);
        $Execute =$stmt->execute();
         
       move_uploaded_file($_FILES["Image"]["tmp_name"], $Target);

        if ($Execute) {
          $_SESSION["SuccessMessage"] = "New post added successfully";
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
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Slider Images</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 <?php include('navbar.php'); ?>
  <!-- /.navbar -->

   <?php include('left-slide.php'); ?>





 <!-- modal for add new products category -->

      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add new slide post</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card">
                <div class="card-body">
                  <form method="post" action="#" enctype="multipart/form-data">
                     <div class="form-group">
                      <label for="Image">Image</label>
                      <input type="file" name="Image" id="Image" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="cat">Select Post category</label>
                      <select name="cat" id="cat" class="form-control">
                         <?php 
              
              global $ConnectingDB;
              $sql = "SELECT * FROM  post_cat order by title ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $Title = $DataRows["title"];
                 $DateTime = $DataRows["datetime"];
                 $Admin = $DataRows["author"];
                 $SrNo++;
                 
       ?>
       <option><?php echo $Title; ?></option>
     <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Image Caption</label>
                      <input type="text" id="name" name="caption" class="form-control" placeholder="Enter image caption..." required="">
                    </div>

                      <button type="submit" name="AddPost" class="btn btn-primary" style="float: right;">Add</button>
                  </form>
                </div> <!-- card-body -->
              </div> <!-- card -->
            </div> <!-- modal-body -->

          </div> <!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider Images</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slider Images</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" style="overflow: auto;" >
              <div class="card-header">
                <h3 class="card-title">All slider image post  &nbsp;<strong>(<?php TotalSlideImages(); ?>)</strong> </h3> <span class="" style="float: right;"><button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal-default" > Add <i class="fas fa-plus"></i></button></span>
              </div>
              <?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

             ?>
              <!-- /.card-header -->
              <div class="card-body">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr.No.</th>
                    <th>DateTime</th>
                    <th>Banner</th>
                    <th>Caption</th>
                    <th>Category</th>
                    <th>Action</th>
                  </tr>
                  </thead>

         <?php 
              
              global $ConnectingDB;
              $sql = "SELECT * FROM  slide_img  ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $Title = $DataRows["text"];
                 $Image = $DataRows["image"];
                 $DateTime = $DataRows["datetime"];
                 $Admin = $DataRows["author"];
                 $SrNo++;
                 
       ?>

                  <tbody>
                  <tr>
                   <td><?php echo htmlentities($SrNo); ?></td>
                   <td><?php echo htmlentities($DateTime); ?></td>
                   <td><a href="../images/<?php echo htmlentities($Image); ?>"><img src="../images/<?php echo htmlentities($Image); ?>" style="width: 100px; height: 100px;"></a></td>
                   <td><?php echo htmlentities($Title); ?></td>
                   <td><?php echo htmlentities($Admin); ?></td>
                   <td><a href="d/d_cat.php?id=<?php echo $Id; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a> <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a> <a href="#" class="btn btn-success"><i class="fas fa-eye"></i></a></td>
                  </tr>
                
                
                  </tbody>
                <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
