<?php
session_start();
include "connect.php";
error_reporting(0);
include("header.php");
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
    <link rel="stylesheet" type="text/css" href="assets/css/formstyle.css">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fstyle.css">

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        
      </div>
      <div class="col-sm-6">
        <div class="login-form">

          <?php 
            
            if(isset($_POST['login']))
            {
              
              $un=$_POST['uname'];
              $ps=$_POST['pass'];
              $pswd=md5($ps);

              $qry="select * from registration where usn='".$un."' and passwd='".$pswd."'; ";
              $c=mysqli_query($con,$qry) or die("query failed" .mysqli_error($con));
              $row=mysqli_fetch_row($c);

              $count=mysqli_num_rows($c);
              $_SESSION['usn']=$row[7];
              $_SESSION['nm']=$row[2];

              $usernm=$row[7];

              if($count>0)
              {
                echo "<script>document.location.replace('../Source/ex_form.php?usernm=$usernm');</script>";
              }
              else{
                $cnt=0;
                $query="select * from admin where User_nm='".$un."' and Password='".$pswd."'; ";
                $s=mysqli_query($con,$query) or die("query failed" .mysqli_error($con));
                $r=mysqli_fetch_row($s);

                $cnt=mysqli_num_rows($s);
                $_SESSION['admin']=$r[2];
                $_SESSION['name']=$r[1];

                if($cnt>0) 
                {
                  echo "<script>document.location.replace('../Source/Admin/dashboard.php');</script>";
                }
              
                else
                {
                  echo "<script>
                        alert('Invalid Credentials..');
                  </script>";
                }
              }
            }

          ?>

        <form method="post" action="#">
         
         <div class="form-group logo">
           <label>Login</label>
          </div>

        <div class="form-group">
          <label class="label_text">User Name</label>
          <input type="text" class="form-control" name="uname" placeholder="Enter email">
        
        <div class="form-group">
          <label class="label_text">Password</label>
          <input type="password" class="form-control" name="pass" placeholder="Password">
        
        </div>
        <input type="submit" class="form_btn btn btn-primary" value="Login" name="login">
      </form>
      <p style="font-size: 14px;text-align: right;margin-top: 10px;"><a href="fpswd.php" style="color: #d1b77a;">Forgot Password?</a></p>
      <br><p>Don't have an account? <a href="register.php" style="color: #d1b77a;">Sign up</a></p>
    </div>
      </div>
      <div class="col-sm-3">
        
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
//<?php 
  //include("footer.php");
//?>