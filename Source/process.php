<?php
session_start();
include("header.php");
?>
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

  </head>

<body>

<section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>How to Fill Exam Form ?</h2>
  </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>#Step 1</a></li>
              <li><a href='#tabs-2'>#Step 2</a></li>
              <li><a href='#tabs-3'>#Step 3</a></li>
            </ul>
           <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                   <img src="assets/images/registering.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                <h4>Fill Registration Form</h4>
                    <p>In This Harivandana College Exam Form project First step to fill exam form is that you have to register yourself. Once you are authenticated then you can do next proess. <a href="http://localhost/school-template/register.php" target="_parent" rel="sponsored">Click Me</a> to fill the registration form directly from here ! </p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/login.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Login</h4>
                    <p>In this project if you have registered then you can login yourself, if not then please register yourself as student.  <a href="http://localhost/school-template/login.php" target="_parent" rel="sponsored">Click Me</a> to Login directly from here ! </p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/exam-form.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Fill The Form</h4>
                    <p>You are NOT allowed to  fill exam form directly without login so, first you have to login yourself then you can fill the exam form. and remember that, this exam form can't be updated after once you fill exam form so please fill it carefully. <a href="http://localhost/school-template/login.php" target="_parent" rel="sponsored">Click Me</a> to Login directly from here ! </p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
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
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>
<?php 
  include("footer.php");
?>