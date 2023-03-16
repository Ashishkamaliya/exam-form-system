<?php
session_start();
if(isset($_SESSION['admin']))
{
  include "aheader.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="jquery.js"></script>
  <script lang="javascript" src="xlsx.full.min.js"></script>
  <script lang="javascript" src="FileSaver.min.js"></script>

  <title>Harivandana College - Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
    <h1 class="h3 mb-2 text-gray-800">Forms</h1>
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Submitted Forms</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Enrollment Number</th>
                <th>Exam Name</th>
                <th>Student Name</th>
                <th>Gender</th>
                <th>Mobile No</th>
                <th>Email</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
               
              </tr>
            </thead>
            <tbody>
            <?php
                include("../connect.php");
                $selectquery = "select * from exam_form";
                $query = mysqli_query($con,$selectquery);
                $count = mysqli_num_rows($query);
                while( $res = mysqli_fetch_array($query))
                {
                  if($count>0){
                  ?>
                    <tr>
                        <td> <?php echo $res ['Enroll_no'];?></td>
                        <td> <?php echo $res ['exam_nm']; ?> </td>
                        <td> <?php echo $res ['stud_name']; ?> </td>
                        <td> <?php echo $res ['gen'];  ?>  </td>
                        <td> <?php echo $res ['mob_no']; ?> </td>
                        <td> <?php echo $res ['usr_mail']; ?> </td>
                        <td> <?php echo $res ['date']; ?> </td>
                        <td> <a href="update.php?Enroll_no=<?php echo $res ['Enroll_no']; ?>"<i class="fas fa-edit"></i></a>
                        </td>

                        <td> <a href="delete.php?Enroll_no=<?php echo $res ['Enroll_no']; ?>"<i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
              <?php  
                  }
                  else{
                  ?>
                    <tr>
                        <td colspan="7"><h2>No Record Found </h2></td>
                    </tr>
                  <?php
                  }
                }
              ?>
            </tbody>
          </table>
        <button id = "mbtn-a" class = "mybtn" style = "padding:5px;font-size:20px; background-color: darkgrey;">Create Excel</button>
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

<script>
        var wb = XLSX.utils.table_to_book(document.getElementById('dataTable'), {sheet:"Sheet JS"});
        var wbout = XLSX.write(wb, {bookType:'xlsx', bookSST:true, type: 'binary'});
        function s2ab(s) {
                        var buf = new ArrayBuffer(s.length);
                        var view = new Uint8Array(buf);
                        for (var i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
                        return buf;
        }
        $("#mbtn-a").click(function(){
        saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), 'Sem_End.xlsx');
        });
</script>
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