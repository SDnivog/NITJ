<?php 
include('../database/config.php');
include('../database/function.php');
include('../database/session.php');
?>

<?php 
// if (!isset($_SESSION["AId"])) {
//   Redirect_to("../");

// }

 ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> IChEC-2021 | Abstracts</title>
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
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
  <style>
    *{
      font-family: 'Source Serif Pro', serif;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 <?php include('navbar.php'); ?>
  <!-- /.navbar -->

   <?php include('left-slide.php'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Abstracts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Abstracts</li>
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
              <div class="card-header"><h3 class="card-title">All IChEC Abstracts  &nbsp;<strong>(<?php //TotalStudentCorner(); ?>)</strong> </h3> <span class="" style="float: right;"><button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal-default" > Export <i class="fas fa-download"></i></button></span> </div>
              <?php 
                  echo ErrorMessage();
                  echo SuccessMessage(); 

             ?>
              <!-- /.card-header -->
              <div class="card-body">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>datetime</th>
                    <th>registeration_id</th>
                    <th>paper_title</th>
                    <th>abstract</th>
                    <th>keywords</th>
                    <th>file</th>
                    <th>status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <?php 
              global $ConnectingDB;
              $sql = "SELECT * FROM  abstract_reg order by id desc ";
              $Execute = $ConnectingDB->query($sql);
              $SrNo = 0;
              while ($DataRows=$Execute->fetch()) {
                
                 $Id = $DataRows["id"];
                 $datetime = $DataRows["datetime"];
                 $reg_id = $DataRows["reg_id"];
                 $paper_title = $DataRows["paper_title"];
                 $abstract = $DataRows["abstract"];
                 $keywords = $DataRows["keywords"];
                 $file = $DataRows["file"];
                 $status = $DataRows["status"];

                 $SrNo++;
              
                 
       ?>
                  <tbody>
                  <tr>
                   <td><?php echo htmlentities($SrNo); ?></td>
                   <td><?php echo htmlentities($datetime); ?></td>
                   <td><?php echo htmlentities($reg_id); ?></td>
                   <td><?php echo htmlentities($paper_title); ?></td>
                   <td><?php echo htmlentities($abstract); ?></td>
                   <td><?php echo htmlentities($keywords); ?></td>
                   <td><a href="../files/<?php echo htmlentities($file); ?>"><?php echo htmlentities($file); ?></a></td>
                   <td>
                      <?php
                        
                        if($status == "OFF"){
                          echo "<p class='badge badge-warning'>Panding</p>";
                        }elseif($status == "ON"){
                          echo "<p class='badge badge-success'>Accepted</p>";
                        }elseif($status == "REJECT"){
                          echo "<p class='badge badge-danger'>Rejected</p>";
                        }
                      
                      ?>
                   <!-- <p class="badge badge-warning">panding</p> -->
                   
                   </td>
                   
                   <td><a href="d/d_cat.php?id=<?php// echo $Id; ?>" class="btn btn-primary">Accept <i class="fas fa-thumbs-up"></i></a></td>
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
