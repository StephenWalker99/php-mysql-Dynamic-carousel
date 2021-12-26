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
 
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
 .h5, h5 {
    font-size: 1.00rem;
} 
</style>

</head>
<body>
<div class="owl-carousel owl-theme owl-loaded owl-drag">   
       <main id="main">

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Events</h2>
          <h5>You’re well aware with the Sliders or Carousels feature in web design which is used to rotate elements. The Carousels are very popular on E-Commerce websites and especially on the home page as it makes website more user friendly and increase user experience.

So if you’re thinking about implementing Carousel in your project then you’re here right place. In this tutorial you will learn how to create Bootstrap Carousel Slider with Thumbnails using PHP and MySQL.</h5>
        </div>
        <div id="owl-carousel" class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">
            <?php
            $sql = "SELECT * FROM events";
            $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($conn));          
            while( $record = mysqli_fetch_array($resultset) ) {
            ?>
        <div class="row event-item">
          <div class="col-lg-6">
            <!-- show slide image -->
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

<script>
var owl = $('.owl-carousel');
owl.owlCarousel({
  items: 1,
  loop: true,
  margin: 10,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true
});
</script>

  </section><!-- End Events Section -->
  </main><!-- End #main -->


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
