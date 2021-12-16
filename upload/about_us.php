<?php
include 'header.php';
?>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="vendors/assets/img/logo Gawharshad.png" rel="icon">
  <link href="assets/img/logo Gawharshad.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <link href="vendors/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendors/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="vendors/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendors/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendors/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendors/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="vendors/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="vendors/assets/web-fonts-with-css/css/fontawesome-all.css">
  <style>
  
  
.about-us {
  background-color: #34262B;
}

.about-us h1 {
  color: #C1292E;
  font-size: 50px;
  margin-top: 14%;
}

.about-us-p {
  font-size: 20px;
  color: #FDFFFC;
  margin-left: 12%;
  margin-right: 12%;
  margin-top: 7%;
  margin-bottom: 10%;
}

.descript {
  margin-bottom: 15%;
}


p,a,h1,h2,h3,h4 {
	margin: 0;
	padding: 0;
}


/* cards section of css */

ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        
img {
    max-width: 100%;
    height: auto;
}


.team-page-section{
    position:relative;
    padding-top:70px;
}

.team-page-section .team-block{
    margin-bottom:60px;
}

.sec-title{
    position:relative;
    z-index:1;
    margin-bottom:65px;
}

.sec-title .title{
    position:relative;
    font-size:18px;
    color:#bd0000;
    font-weight:700;
    margin-bottom:12px;
    text-transform:capitalize;
}

.sec-title .separator{
    position:relative;
    width:40px;
    margin-top:16px !important;
}

.sec-title .separator:before{
    position:absolute;
    content:'';
    left:0px;
    top:0px;
    width:10px;
    height:2px;
    background-color:#ff9600;
}

.sec-title .separator:after{
    position:absolute;
    content:'';
    right:0px;
    top:0px;
    width:10px;
    height:2px;
    background-color:#ff9600;
}

.sec-title .separator span{
    position:absolute;
    left:50%;
    top:-2px;
    width:10px;
    height:5px;
    margin-left:-5px;
    display:inline-block;
    background-color:#bd0000;
}

.sec-title h2{
    position:relative;
    color:#222222;
    font-weight:700;
    font-size:36px;
    line-height:1.2em;
    margin-top:35px;
}

.sec-title .text{
    position:relative;
    font-size:14px;
    line-height:1.9em;
    color:#555555;
    margin-top:10px;
}

.sec-title.centered .separator{
    margin:0 auto !important;
    float:none !important;
}

.sec-title.centered{
    text-align: center !important;
}

.sec-title.light .title{
    color:#ffffff;
}

.sec-title.light h2{
    color:#ffffff;
}

.sec-title.light .separator span{
    background-color:#ff9600;
}

.sec-title.light .separator:before,
.sec-title.light .separator:after{
    background-color:#ffffff;
}

.team-section{
    position:relative;
    padding:80px 0px 60px;
}

.team-section.style-two .pattern-layer{
    position:absolute;
    left:0px;
    top:0px;
    right:0px;
    bottom:0px;
    background-position:center center;
    background-repeat:no-repeat;
}

.team-section .title-box{
    position:relative;
    text-align:center;
}

.team-section .title-box h2{
    position: relative;
    color: #222222;
    font-size: 36px;
    font-weight: 700;
    line-height: 1.3em;
    margin-bottom: 50px;
}

.team-section .title-box h2 span{
    color: #ff9600;
}

.team-block{
    position:relative;
}

.team-block .inner-box{
    position:relative;
    padding:40px 70px 28px 0px;
}

.team-block .inner-box:before{
    position:absolute;
    content:'';
    right:0px;
    top:0px;
    left:70px;
    bottom:0px;
    border-radius:10px;
    background-color:#f5f5f5;
    -webkit-transition:all 600ms ease;
    -moz-transition:all 600ms ease;
    -ms-transition:all 600ms ease;
    -o-transition:all 600ms ease;
    transition:all 600ms ease;
}

.team-block .inner-box::after{
    position:absolute;
    content:'';
    top:0px;
    left:70px;
    bottom:0px;
    width:0%;
    border-radius:10px;
    -webkit-transition:all 600ms ease;
    -moz-transition:all 600ms ease;
    -ms-transition:all 600ms ease;
    -o-transition:all 600ms ease;
    transition:all 600ms ease;
    background-image: -ms-linear-gradient(top, #ffca08 0%, #f70067 100%);
    background-image: -moz-linear-gradient(top, #ffca08 0%, #f70067 100%);
    background-image: -o-linear-gradient(top, #ffca08 0%, #f70067 100%);
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #ffca08), color-stop(100, #f70067));
    background-image: -webkit-linear-gradient(top, #ffca08 0%, #f70067 100%);
    background-image: linear-gradient(to bottom, #ffca08 0%, #f70067 100%);
}

.team-block .inner-box:hover::after{
    width:81%;
}

.team-block .inner-box .social-icons{
    position:absolute;
    right:25px;
    top:100px;
    z-index:1;
}

.team-block .inner-box .social-icons li{
    position:relative;
    margin-bottom:20px;
}

.team-block .inner-box .social-icons li a{
    position:relative;
    color:#e40000;
    font-size:18px;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.team-block .inner-box:hover .lower-content h3 a,
.team-block .inner-box:hover .social-icons li a,
.team-block .inner-box:hover .lower-content .designation{
    color:#ffffff;
}

.team-block .inner-box .image{
    position:relative;
    z-index:1;
    border-radius:10px;
    background-color:#ffffff;
    box-shadow:inset 0px 0px 35px rgba(0,0,0,0.20);
}

.team-block .inner-box .image img{
    position:relative;
    width:100%;
    display:block;
}

.team-block .inner-box .lower-content{
    position:relative;
    text-align:left;
    z-index:1;
    padding:30px 15px 0px 110px;
}

.team-block .inner-box .lower-content h3{
    position:relative;
    color:#bd0000;
    font-size:18px;
    font-weight:700;
    line-height:1.3em;
}

.team-block .inner-box .lower-content h3 a{
    position:relative;
    color:#bd0000;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.team-block .inner-box .lower-content .designation{
    position:relative;
    margin-top:5px;
    color:#777777;
    font-size:14px;
}

.team-block.style-two .inner-box .lower-content h3 a,
.team-block.style-two .inner-box .social-icons li a{
    color:#ff9600;
}

.team-block.style-two .inner-box:hover .lower-content h3 a,
.team-block.style-two .inner-box:hover .social-icons li a{
    color:#ffffff;
}

.team-block.style-two .inner-box::after{
    background-image: -ms-linear-gradient(top, #FFEB3C 0%, #ff9600 100%);
    background-image: -moz-linear-gradient(top, #FFEB3C 0%, #ff9600 100%);
    background-image: -o-linear-gradient(top, #FFEB3C 0%, #ff9600 100%);
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFEB3C), color-stop(100, #ff9600));
    background-image: -webkit-linear-gradient(top, #FFEB3C 0%, #ff9600 100%);
    background-image: linear-gradient(to bottom, #FFEB3C 0%, #ff9600 100%);
}

  </style>
</head>
<!----ABOUT US---->

<div class="about-us" id="startchange">
    <a name="about"></a>
    <div class="container-fluid">
      <div class="row text-center">
        <div class="descript col-xs-12 col-sm-12 col-md-12">
          <h1>ABOUT US</h1>
          <p class="about-us-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    </div>
  </div>



 

  
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
<?php
include 'footer.php';
?>