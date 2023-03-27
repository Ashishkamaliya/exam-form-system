<?php
session_start();
if(isset($_SESSION['admin']))
{
  include "aheader.php";
  if(isset($_POST['submit'])){
          $course = $_POST['course'];
          $sem = $_POST['sem'];
          $sub_id = $_POST['sub_code'];
          $sub_nm = $_POST['sub_name'];

          include("../connect.php");
          $selectquery = "INSERT INTO `subjects`(`Sub_id`, `Sub_nm`, `Course`, `Sem`) VALUES ('$sub_id','$sub_nm','$course','$sem')";
          $query = mysqli_query($con,$selectquery);

          if($query)
          {
            echo '<script>alert("Subject Added Successfully..");</script>';
          }  
          else{
              echo '<script>alert("Failed To Add..");</script>';
          }
  }
                                
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Harivandana College - Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/formstyle.css">

</head>

<body id="page-top">
     <!-- Page Wrapper -->
     <div id="wrapper">

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Subjects</h1>
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Subject</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <form role="form" action="" method="post" enctype="multipart/form-data"> 
        
        <label class="label_text">Select Course</label>
        <select class="form-control" name="course">
          <option value="-" selected>Select Course</option>
          <option value="Bscit" name="course">Bscit</option>
          <option value="BCA" name="course">BCA</option>
          <option value="BBA" name="course">BBA</option>
          <option value="Bcom" name="course">Bcom</option>
          <option value="Bsc" name="course">Bsc</option>
          <option value="BPT" name="course">BPT</option>
        </select>

        <label class="label_text">Select Semester</label>
        <select class="form-control" name="sem">
          <option value="-" selected>Select Semester</option>
          <option value="1" name="sem">1</option>
          <option value="2" name="sem">2</option>
          <option value="3" name="sem">3</option>
          <option value="4" name="sem">4</option>
          <option value="5" name="sem">5</option>
          <option value="6" name="sem">6</option>
          <option value="7" name="sem">7</option>
          <option value="8" name="sem">8</option>
        </select>


        <div class="form-group">
          <label class="label_text">Enter Subject Code</label>
          <input type="text" name="sub_code" class="form-control" placeholder="Subject Code" required>
        </div>

        <div class="form-group">
          <label class="label_text">Enter Subject Name</label>
          <input type="text" name="sub_name" class="form-control" placeholder="Subject Name" required>
        </div>

        <input type="submit" class="form_btn btn btn-primary" value="Add" name="submit">
        
      </form>
    </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
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