<?php
    include('conn.php');
    if(isset($_POST['submit']))
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];

      $query = mysqli_query($con,"insert into icac(name,email,subject,message) values('$name','$email','$subject','$message')");

      if($query)
      {
        
        echo "<script>alert('Data Added');</script>";
        echo "<script type='text/javascript'> document.location = '#'; </script>";
      }
      else{
        echo "<script>alert('Error.');</script>";
      }   
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UDICT - MGM University</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v4.7.0
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 <?php include('header.php'); ?>

 
<!-- ======= Header/Navbar Start ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
       <center> <h1><a href="index.php">UDICT</a></h1>
       <span><a href="index.php" class="whiteColor">MGM UNiversity</a></span>
       </center>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto " href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="admission.php">Admission</a></li>
          <li><a class="nav-link scrollto" href="programs.php">Programs</a></li>
          <li><a class="nav-link scrollto" href="research.php">Research</a></li>
          <li><a class="nav-link scrollto" href="student-life.php">Student Life</a></li>
          <li class="dropdown"><a href="#"><span>Infrastructure</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="#">Campus</a></li>
              <li><a href="library.php">Library</a></li>
              <li><a href="#">Hostel</a></li>
              <!-- <li><a href="#">Virtual Tour</a></li> -->
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="placements.php">Placements</a></li>
          <li><a class="nav-link scrollto active" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
<!-- Header/Navbar End -->


    <!-- ======= Contact Us Section ======= -->

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-3 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>MGM Campus, CIDCO,
Aurangabad-431003</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-phone"></i>
              <h3>Call Us</h3>
              <p>MGM Campus, CIDCO,
Aurangabad-431003</p>
            </div>
          </div>
          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>hodudict@mgmu.ac.in</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>(+91) 9404494299</p>
            </div>
          </div>
          
          <br>
          
        <div class="section-title">
          <h2>Send Us Enquiry</h2>
        </div>
        <br>
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
          <form action="#" method="post" role="form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="message" required></textarea>
              </div>
              <br>
              <center>
              <button name="submit" class="btn colorCss" type="submit">Send Message</button>
              </center>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <?php include('footer.php'); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>