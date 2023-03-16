
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login / Register Form</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="formstyle.css">
  <script type="text/javascript" src="formscript.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        
      </div>
      <div class="col-sm-6">
        <div class="login-form">
        <form>
         
         <div class="form-group logo">
           <label>Recover Password</label>
          </div>

        <div class="form-group">
          <label class="label_text">Mail Id</label>
          <input type="text" class="form-control" placeholder="Enter Mail Id" name="mail">
        
        </div>
        <input type="submit" class="form_btn btn btn-primary" value="Send OTP" name="Osend">
      </form>
      <br><p>Back To<a href="register.php" style="color: #d1b77a;"> Login</a></p>
    </div>
      </div>
      <div class="col-sm-3">
        
      </div>
    </div>
  </div>
</body>
</html>