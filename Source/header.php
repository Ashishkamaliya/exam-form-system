<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />

    <title>Harivandana College</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fstyle.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

  </head>

<body>
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="http://harivandanacollege.org/"><em>Harivandana</em> College</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="index.php" class="external">Home</a></li>
        <li class="has-submenu"><a href="process.php" class="external">Process</a>
          <ul class="sub-menu">
            <li><a href="#section2">Step 1</a></li>
            <li><a href="#section2">Step 2</a></li>
            <li><a href="#section2">Step 3</a></li>
          </ul>
        </li>
        <li><a href="about.php" class="external">About</a></li>
        <li><a href="contact.php" class="external">Contact</a></li>
        <?php
          error_reporting(0);
          if(isset($_SESSION['usn'])) 
          {
            ?>
        <li><a href="ex_form.php" class="external">Form</a></li>
        <li><?php echo "Welcome ".$_SESSION['nm'];?></li>
         <li><a href="logout.php" class="external">Logout</a></li>           
          <?php
          }
          else{
          ?>   
          <li><a href="login.php" class="external">Login / Register</a></li>         
          <?php
          }
          ?>

        
      </ul>
    </nav>
  </header>
</body>