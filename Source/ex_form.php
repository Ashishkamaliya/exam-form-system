<?php
session_start();
//error_reporting(0);
extract($_POST);
include('connect.php');
include("header.php");
if(isset($_SESSION['usn']))
{
    $usn = $_SESSION['usn'];
    $selectusn = "select * from registration where usn='$usn'";
    $selectseb = "select * from subjects where ";
    $query = mysqli_query($con,$selectusn);
    $row = mysqli_fetch_row($query);

    $eno = $row [0];

    $senroll = "select * from exam_form where Enroll_no='$eno'";
    $data = mysqli_query($con,$senroll);
    $isregistered = mysqli_num_rows($data);

    if($isregistered > 0)
    {
      echo '<script>alert("You Have Already Submitted your form..");</script>';
    }
    else
    {
      // $ex_name = $_POST['course'];
      // $sem = $_POST['semester'];

      $selectsub = "select * from subjects";
      $qry = mysqli_query($con,$selectsub);
      $cnt = mysqli_num_rows($qry);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Harivandana College</title>
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
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-1">
        
      </div>
      <div class="col-sm-10">
        <div class="login-form">
          
        <form role="form" action="ex_form_data.php" method="post" enctype="multipart/form-data"> 
          <div class="form-group logo">
            <label>Exam Form</label>
          </div>

          <div class="form-group">
            <label class="label_text">Enter Enrollment Number</label>
              <input type="text" name="enroll" class="form-control" placeholder="Enrollment Number" value="<?php echo $eno ?>" required>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="label_text">Select Course</label>
                <select class="form-control" id="sel_ex_name" name="course">
                  <option selected>Select Course</option>
                  <option value="-" selected>Select Course</option>
                  <option value="Bscit" name="course">Bscit</option>
                  <option value="BCA" name="course">BCA</option>
                  <option value="BBA" name="course">BBA</option>
                  <option value="Bcom" name="course">Bcom</option>
                  <option value="Bsc" name="course">Bsc</option>
                  <option value="BPT" name="course">BPT</option>
                </select>
              </div>

            <div class="form-group col-md-6">
              <label class="label_text">Select Semester</label>
              <select class="form-control" id="sel_col_name" name="semester">
                <option selected>Select Semester</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>                
            </div>
          </div>

          <div class="form-group">
              <label class="label_text">Select College Name</label>
              <select class="form-control" id="sel_col_name" name="college_name">
                <option selected>Select College</option>
                <option value="Harivandan College" name="college_name">Harivandana College</option>
              </select>                
          </div>

          <div class="form-group">
            <label class="label_text">Enter Your Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Full Name">
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
              <input type="radio" value="male" name="gender"> Male &nbsp&nbsp 
              <input type="radio" value="female" name="gender"> Female &nbsp&nbsp  
              <input type="radio" value="other" name="gender"> Other &nbsp&nbsp   
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6 mb-3">
              <label class="label_text">Enter Address</label>
              <textarea name="address" rows="6" class="form-control" id="address" placeholder="Your Address..."></textarea>
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
              <div class="form-group">
                <input class="sms-check-input" type="checkbox" value="Mob_access">
                <label class="sms-check-label" for="inlineCheckbox"> I give my consent to  send me SMS on my below mentioned mail account/mobile number.</label>
              </div>
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="label_text">Enter E-Mail</label>
              <input type="email" name="email" class="form-control" placeholder="Email Id" value="<?php echo $row [5]; ?>">
            </div>

            <div class="form-group col-md-5">
              <label class="label_text">Enter Phone Number</label>
              <input type="tel" name="phno" class="form-control" placeholder="Phone Number" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $row [6]; ?>">
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
              <input type="submit" class="form_btn btn btn-primary" value="Submit" name="submit">
        </form>
        </div>
      </div>
      <div class="col-sm-1">
        
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
<?php
  }
}
else
{
  header("location:login.php");
}
?>