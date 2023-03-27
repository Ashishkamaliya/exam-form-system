<?php
session_start();
if(isset($_SESSION['admin']))
{
  include "aheader.php";
            include("../connect.php");
            error_reporting(0);
            $enroll = $_GET['Enroll_no'];
            $showquery = "select * from exam_form where Enroll_no=$enroll";
            $showdata = mysqli_query($con,$showquery);
            $row = mysqli_fetch_row($showdata);

            $date = date('y-m-d');

            $selectsub = "select * from subjects";
            $qry = mysqli_query($con,$selectsub);
            $cnt = mysqli_num_rows($qry);

            if(isset($_POST['update']))
            {
              
          
            $ex_name = $_POST['exam'];
            $col_nm = $_POST['college_name'];
            $stud_nm = $_POST['name'];
            $stud_cast = $_POST['cast'];
            $gender = $_POST['gender'];
            $addr = $_POST['address'];
            $ans_lang = $_POST['chkl'];
            $mail_id = $_POST['email'];
            $ph_no = $_POST['phno'];
            if(isset($_POST['sub']))
            {
            // Retrieving each selected option
            foreach ($_POST['sub'] as $subject)
                $sub_nm = $sub_nm.$subject.",";
            }

            $checkbox = $ans_lang[0].",".$ans_lang[1];


            $query = "UPDATE `exam_form` SET `exam_nm`='$ex_name',`clg_nm`='$col_nm',`stud_name`='$stud_nm',`gen`='$gender',`cast`='$stud_cast',`address`='$addr',`ans_lang`='$checkbox',`mob_no`='$ph_no',`usr_mail`='$mail_id',`subject`='$sub_nm',`date`='$date',`Uimage`='' WHERE Enroll_no=$enroll";
            
            $row=mysqli_query($con,$query);

            if($row > 0)
            {
              echo "<script>
              alert('Update succesfully');
            </script>";
                            
            }
           else
            {
                echo "error:".mysqli_error($con);
            }
            mysqli_close($con);
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
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Update Records</h6>
            </div>
            <div class="card-body">
				<form role="form" action="" method="post" enctype="multipart/form-data"> 
          <div class="form-group logo">
            <label>Updaate Form</label>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="label_text">Select Exam Name</label>
                <select class="form-control" id="sel_ex_name" name="exam">
                  <option selected>Select Exam Name</option>
                  <option value="Bscit sem1" name="exam">Bscit sem-1</option>
                  <option value="Bscit sem2" name="exam">Bscit sem-2</option>
                  <option value="Bscit sem3" name="exam">Bscit sem-3</option>
                  <option value="Bscit sem4" name="exam">Bscit sem-4</option>
                  <option value="Bscit sem5" name="exam">Bscit sem-5</option>
                  <option value="Bscit sem6" name="exam">Bscit sem-6</option>
                </select>
              </div>

            <div class="form-group col-md-6">
              <label class="label_text">Select College Name</label>
              <select class="form-control" id="sel_col_name" name="college_name">
                <option selected>Select College</option>
                <option value="Harivandan College" name="college_name">Harivandana College</option>
              </select>                
            </div>
          </div>

          <div class="form-group">
            <label class="label_text">Enter Your Full Name</label>
            <input type="text" name="name" value="<?php echo $row[3] ?>" class="form-control" placeholder="Full Name" required>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6 mb-3">
              <label class="label_text">Select Your Cast</label>
              <select class="form-control" id="sel_cast" name="cast">
                <option selected>Select Cast</option>
                <option value="sebc" name="cast">SEBC</option>
                <option value="sc" name="cast">SC</option>
                <option value="st" name="cast">ST</option>
                <option value="other" name="cast">Other</option>
              </select>
            </div>

            <div class="form-group col-md-1 mb-3">

            </div>

            <div class="form-group col-md-5 mb-3">
              <label class="label_text">Select Gender</label><br/>
              <?php if($row[4]=='male'){ ?>
              <input type="radio" value="male" name="gender" checked> Male &nbsp&nbsp
              <input type="radio" value="female" name="gender"> Female &nbsp&nbsp
              <input type="radio" value="other" name="gender"> Other &nbsp&nbsp
              <?php } 
              else if($row[4]=='female'){
              ?> 
              <input type="radio" value="male" name="gender"> Male &nbsp&nbsp
              <input type="radio" value="female" name="gender" checked> Female &nbsp&nbsp
              <input type="radio" value="other" name="gender"> Other &nbsp&nbsp
              <?php } 
              else{
              ?>  
              <input type="radio" value="male" name="gender"> Male &nbsp&nbsp
              <input type="radio" value="female" name="gender"> Female &nbsp&nbsp
              <input type="radio" value="other" name="gender" checked> Other &nbsp&nbsp 
              <?php } ?>  
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6 mb-3">
              <label class="label_text">Enter Address</label>
              <textarea name="address" rows="6" class="form-control" id="address" placeholder="Your Address..." required=""></textarea>
            </div>

            <div class="form-group col-md-1 mb-3">

            </div>

            <div class="form-group col-md-5 mb-3">
              <label class="label_text">Answer Language</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="English" name="chkl[]">
                <label class="form-check-label" for="inlineCheckbox1">English</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Gujarati" name="chkl[]">
                <label class="form-check-label" for="inlineCheckbox2">Gujarati</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Hindi" name="chkl[]" disabled>
                <label class="form-check-label" for="inlineCheckbox3">Hindi</label>
              </div>
          </div>
    
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="label_text">Enter E-Mail</label>
              <input type="email" name="email" class="form-control" placeholder="Email Id" required>
            </div>

            <div class="form-group col-md-5">
              <label class="label_text">Enter Phone Number</label>
              <input type="tel" name="phno" class="form-control" placeholder="Phone Number" pattern="[7-9]{1}[0-9]{9}" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="label_text">Enter Subject Name</label>
              <select class="form-control" id="sel_sub" name="sub[]" multiple>
                  <option selected>Select Subject</option>
                  <?php
                  while( $res = mysqli_fetch_array($qry))
                  {
                  ?>
                  <option value="
                     <?php echo $res ['Sub_nm'];?>"><?php echo $res ['Sub_nm'];?></option>
                  <?php
                  }
                  ?>
                </select>
            </div>

            <div class="form-group col-md-6">
              <label class="label_text">Upload Image</label>
              <input type="file" name="Uimage" class="form-control" value="">
            </div>
          </div>
              <input type="submit" class="form_btn btn btn-primary" value="Update" name="update">    
        </form>
                  
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