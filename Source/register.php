<?php
//error_reporting(0);
extract($_POST);
include('connect.php');
include("header.php");
if(isset($_POST["register"]))
{
        
        //$Enroll="SELECT enroll FROM enroll ORDER BY enroll ASC";
        
        //check user alereay exists or not
        $q = mysqli_query($con, "SELECT enroll_no from enroll where enroll_no = '$enroll'");
        $rw=mysqli_num_rows($q);
        $sql = mysqli_query($con, "select * from registration where eno = '$enroll'");
        $r = mysqli_num_rows($sql);
            if ($r == true) {
                echo '<script>alert("User Already Exists..!");</script>';
            }
            else if($rw == true){
                //image
                $user = $_POST['USN'];
                $filename = $_FILES['Uimage']['name'];
                $tempname = $_FILES['Uimage']['tmp_name'];
                //encrypt your password
                $Password = $_POST['psw'];
                $epass = md5($Password);

                $query = "INSERT INTO registration(eno,fname,lname,dob,gender,email,phno,usn,passwd,image)VALUES('$enroll','$fname','$lname','$bdate','$gender','$email','$phno','$user','$epass','$filename')";

                $data = mysqli_query($con, $query);

                //upload image

                mkdir("./images/" .$user);
                $folder = "./images/" . $user . "/" . $filename;
                move_uploaded_file($tempname, $folder);

                if ($data) {
                    echo '<script>alert("Registered successfully...!!");</script>';
                }
                else
                {
                    echo'<script>alert("Failed To Register..");</script>';
                }
            }
            else{
              echo '<script>alert("Wrong Enrollment Number !!!");</script>';
            }
        }

 //   $qry="SELECT id FROM registration ORDER BY id ASC";
 //   $result=mysqli_query($con,$qry);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login / Register Form</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
  <script type="text/javascript" src="formscript.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/formstyle.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fstyle.css">

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-2">
        
      </div>
      <div class="col-sm-8">
        <div class="login-form">
          
        <form role="form" action="" method="post" enctype="multipart/form-data"> 
        <div class="form-group logo">
           <label>Register</label>
          </div>
        <div class="form-group">
          <label class="label_text">Enter Enrollment Number</label>
          <input type="text" name="enroll" class="form-control" placeholder="Enrollment Number" required>
        
        <div class="form-group">
          <label class="label_text">Enter First Name</label>
          <input type="text" name="fname" class="form-control" placeholder="First Name" required>
        </div>

        <div class="form-group">
          <label class="label_text">Enter Last Name</label>
          <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
        </div>

        <div class="form-group">
          <label class="label_text">Enter Date of Borth</label>
          <input type="date" name="bdate" class="form-control" placeholder="Birth Date" required>
        </div>

        <div class="form-group">
          <label class="label_text">Select Gender</label><br/>
          <input type="radio" value="male" name="gender"> Male &nbsp&nbsp 
          <input type="radio" value="female" name="gender"> Female &nbsp&nbsp  
          <input type="radio" value="other" name="gender"> Other &nbsp&nbsp   
         </div>

        <div class="form-group">
          <label class="label_text">Enter E-Mail</label>
          <input type="email" name="email" class="form-control" placeholder="Email Id" required>
        </div>

        <div class="form-group">
          <label class="label_text">Enter Phone Number</label>
          <input type="tel" name="phno" class="form-control" placeholder="Phone Number" pattern="[7-9]{1}[0-9]{9}" required>
        </div>

        <div class="form-group">
          <label class="label_text">Enter User Name</label>
          <input type="text" name="USN" class="form-control" placeholder="User Name" required>
        </div>

        <div class="form-group">
          <label class="label_text">Enter Password</label>
          <input type="password" name="psw" class="form-control" placeholder="Password" required>
        </div>

        <div class="form-group">
          <label class="label_text">Re-type Password</label>
          <input type="password" name="rpsw" class="form-control" placeholder="Re-Type Password">
        </div>

         <div class="form-group">
          <label class="label_text">Upload Image</label>
          <input type="file" name="Uimage" class="form-control" value="">
        </div>

        <input type="submit" class="form_btn btn btn-primary" value="Register" name="register">
        <a href="login.php" style="color: #d1b77a;">Back to Login!!</a>
      </form>
    </div>
    </div>
      <div class="col-sm-2">
        
      </div>
    </div>
  </div>
<!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    
</body>
</html>