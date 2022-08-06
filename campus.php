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
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="admission.php">Admission</a></li>
          <li><a class="nav-link scrollto" href="programs.php">Programs</a></li>
          <li><a class="nav-link scrollto" href="research.php">Research</a></li>
          <li><a class="nav-link scrollto" href="student-life.php">Student Life</a></li>

          <li class="dropdown "><a href="#"><span class="active">Infrastructure</span> <i class="bi bi-chevron-down"></i></a>
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
              <li><a href="campus.php">Campus</a></li>
              <li><a href="library.php">Library</a></li>
              <li><a href="hostel.php">Hostel</a></li>
              <!-- <li><a href="virtualTour.php">Virtual Tour</a></li> -->
            </ul>
          </li>
          
          <li><a class="nav-link scrollto" href="placements.php">Placements</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
<!-- Header/Navbar End -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/Campus/campus_1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <!-- <h2 class="animate__animated animate__fadeInDown">Welcome to our <span>LIBRARY</span></h2> -->
                <!-- <p class="animate__animated animate__fadeInUp">Department of Information and Communication Technology,<br>Aurangabad</p> -->
                <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/Campus/campus_2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <!-- <h2 class="animate__animated animate__fadeInDown">Bird's-eye View</h2> -->
                <!-- <p class="animate__animated animate__fadeInUp">MGM University Campus</p> -->
                <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/Campus/campus_3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <!-- <h2 class="animate__animated animate__fadeInDown">IIRC</h2> -->
                <!-- <p class="animate__animated animate__fadeInUp">Mechatronics Lab </p> -->
                <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div> 

          <!-- Slide 5 -->
          <div class="carousel-item" style="background-image: url('assets/img/Campus/campus_4.jfif');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <!-- <h2 class="animate__animated animate__fadeInDown">IIRC</h2> -->
                <!-- <p class="animate__animated animate__fadeInUp">Mechatronics Lab </p> -->
                <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div> 

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
  

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