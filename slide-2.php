<?php
    require("admin/model/stevedata.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Walkers Inn - Great Food Great Beer</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

<style>
.owl-carousel .owl-nav button.owl-prev, .owl-carousel .owl-nav button.owl-next {
  color: #FFF;
  display: inline-block;
  margin-right: 10px;
  margin-left: 10px;
  font-size: 32px;
  outline: 0; 
}

.events .owl-nav, .events .owl-dots {
    margin-top: 8px;
    text-align: center;
}
</style>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> +1 5589 55488 55
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM</span>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#specials">Specials</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="book-a-table text-center"><a href="#book-a-table">Book a table</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Walkers Inn</span></h1>
          <h2>Serving Food and Drinks for more than 18 years!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Events</h2>
          <p>Organize Your Events in our Restaurant</p>
        </div>
        <div id="owl-carousel" class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">
            <?php
            $sql = "SELECT * FROM events";
            $resultset = mysqli_query($con,$sql) or die("database error:". mysqli_error($con));          
            while($record = mysqli_fetch_array($resultset)) {
            ?>
        <div class="row event-item">
          <div class="col-lg-6">
            <img alt="" class="img-fluid" src="uploads/banner/<?php echo $record['image']; ?>">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3><?php echo $record['title']; ?></h3>
              <div class="price">
                <p><span>£<?php echo $record['cost']; ?></span></p>
              </div>
              <ul>
                <li><i class="icofont-check-circled"></i>Date: <?php echo $record['date']; ?></li>
                <li><i class="icofont-check-circled"></i>Venue: <?php echo $record['location']; ?></li>
              </ul>
              <p>
                <?php echo $record['description']; ?>
              </p>
              <?php echo "<a class='btn btn-".$record['color_button']."' href='".$record['link_button']."' role='button'>".$record['text_button']."</a>"; ?>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section><!-- End Events Section -->
  </main><!-- End #main -->
 

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Walkers Inn</h3>
              <p>
                10 Walker Street <br>
                Walkertown, GB<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@walkers-inn.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Website Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="menu.php">Our Menu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="events.php">Inn Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="booking.php">Book A Table</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact-us.php">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="nightly-events.php">Nightly Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="special-events.php">Weekly Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="live-music.php">Live Music</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="on-tap.php">Whats On Tap</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="bottle.php">Bottled Beers</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Sign up to our weekly newsletter to recieve all our special events!</p>
            <form action="hello" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Walkers Inn</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        ReDesigned by <a href="http://walkerdesigns.ca/">WALKERDesigns</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>
</html>