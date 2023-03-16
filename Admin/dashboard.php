<?php
session_start();
if(isset($_SESSION['admin']))
{
    include "aheader.php";
    include("../connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Harivandana College - Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/dashboard.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">

<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

  <!-- Min Content -->
      <div id="content">

    <!-- Begin Page Content -->          
          
            <div class="container-fluid">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
                </div>
                <div class="card-body">
                    <div class="row">

                      <?php 
                      $select = "select * from subjects";
                      $qry = mysqli_query($con,$select);
                      $cs = mysqli_num_rows($qry);
                      ?>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <a class="dashboard-stat11" href="view_sub.php">
                          <span class="number"><?php echo "$cs"; ?></span>
                          <span class="name">Subjects Listed<br />For 8th Sem</span>
                          <span class="bg-icon"><i class="fa fa-bars"></i></span>
                        </a>
                      </div>

                      <?php 
                      $selectqry = "select * from exam_form";
                      $query = mysqli_query($con,$selectqry);
                      $sr = mysqli_num_rows($query);
                      ?>

                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <a class="dashboard-stat1" href="astud_data.php">
                          <span class="number counter"><?php echo "$sr"; ?></span>
                          <span class="name">Students Registered<br />For Exam</span>
                          <span class="bg-icon"><i class="fa fa-users"></i></span>
                        </a>
                      </div> 

                      <div class="col-md-6 col-sm-6 col-xs-6">

                      </div>        
                    </div> 
                </div>  
              </div>
            </div>           
          </div>
        </div>
      </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>


<?php
    include "afooter.php";
}
else
{
  header('location:../login.php');
}
?>