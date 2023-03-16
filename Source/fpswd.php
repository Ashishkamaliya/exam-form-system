<?php
//error_reporting(0);
extract($_POST);

if(isset($_POST["Osend"]))
{
    $rand=rand(100000,999999);
    $to_email = $_POST['mail'];
    $subject = "Test email to send from XAMPP";
    $body = "Your varification code (OTP) is ".$rand;
    $headers = "From:apkamaliya2003@gmail.com";

    if (mail($to_email, $subject, $body, $headers))
    {
        echo "Email successfully sent..";
    }

    else
    {
        echo "Email sending failed!";
    }
}
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reset Password</title>
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
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/fstyle.css"> -->

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        
      </div>
      <div class="col-sm-6">
        <div class="login-form">
        <form method="post" action="#">
         
         <div class="form-group logo">
           <label>Recover Password</label>
          </div>

        <div class="form-group">
          <label class="label_text">Mail Id</label>
          <input type="email" class="form-control" placeholder="Enter Mail Id" name="mail">
        
        </div>
        <input type="submit" class="form_btn btn btn-primary" value="Send OTP" name="Osend">
      </form>
      <br><p>Back To<a href="login.php" style="color: #d1b77a;"> Login</a></p>
    </div>
  </div>
      <div class="col-sm-3">
        
      </div>
    </div>
  </div>
</body>
</html>