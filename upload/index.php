<?php 

include 'connection_DB.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gawharshad Library</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="vendors/assets/img/logo gawharshad.png" rel="icon">
  <link href="vendors/assets/img/logo gawharshad.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendors/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendors/assets/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
  <link href="vendors/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendors/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendors/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendors/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="vendors/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-transparent">
    <div class="container d-flex justify-content-between">

    <div id="logo">
        <a href="index"><img src="vendors/assets/img/lib.png" alt="" style="height:40px; margin-left:-10px;"></a>
        
      </div>
        
      <nav id="nav-menu-container">
        <ul class="nav-menu" style="margin-right:-95px;">
          <li class="menu-active"><a href="index">Home</a></li>
          <li><a href="news">news</a></li>
          <li><a href="Journal.php">journal</a></li>
          <li><a href="gallery">gallery</a></li>
          <li><a href="contact">contact us</a></li>
          <li><a href="about_us">about us</a></li>
          <li><a href="dark_blue">Dark Blue</a></li>
          <li><a href="login">Sign In</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h2><b>Welcome to Gawharshad Library</b></h2>
      <input type="search" name="search" placeholder="Type here to search" autocomplete="off" style="border-radius: 20px; width:600px; height:7%; outline:0; border:1px; padding-left:20px; max-width:90%;">
      <a class="" href="#myModal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fas fa-search-plus"> Advanced Search</i>
            </a>
    </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-search-plus"> Advanced
                                    Search</i></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- inside this we write our input codes its basically out modal body -->
                            <form>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputname"
                                            placeholder="Search by title" name="ti">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Faculty</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputFaculty"
                                            placeholder="search by Faculty Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Translator</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputTranslator"
                                            placeholder="search by Translator Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Author</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputAuthor"
                                            placeholder="search by Author Name">
                                    </div>
                                </div>
                            </form>


                            <button type="button" class="btn btn-primary"
                                style="margin-left:390px; margin-top:10px;">Search</button>
                        </div>
                    </div>
                </div>
            </div>
  </section><!-- End Hero Section -->
  


  <main id="main">
  
   
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
       <strong>
© 2021 All Right Reserved GU Powered By. Dark Blue
</strong>
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendors/assets/vendor/jquery/jquery.min.js"></script>
  <script src="vendors/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendors/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="vendors/assets/vendor/php-email-form/validate.js"></script>
  <script src="vendors/assets/vendor/counterup/counterup.min.js"></script>
  <script src="vendors/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="vendors/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendors/assets/vendor/superfish/superfish.min.js"></script>
  <script src="vendors/assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="vendors/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="vendors/assets/vendor/venobox/venobox.min.js"></script>
  <script src="vendors/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="vendors/assets/js/main.js"></script>

  <script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header").style.top = "0";
  } else {
    document.getElementById("header").style.top = "-90px";
  }
  prevScrollpos = currentScrollPos;
}
</script>

</body>

</html>