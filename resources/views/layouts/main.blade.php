<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FashanDesighners |@yield('title')</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <!-- Google Fonts -->
  <link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"')}} rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{url('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{url('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{url('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{url('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('css/style.css')}}" rel="stylesheet">
  <!-- Favicons -->

  <link href="{{url('img/apple-touch-icon.png')}}" rel="apple-touch-icon">



</head>

<body>

<!--==========================
  Header
============================-->
<header id="header">
  <div class="container-fluid">

    <div id="logo" class="pull-left">
      <h1><a href="{{url('index')}}" class="scrollto">FashanDesighners</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('About Us')}}"></a></li>
        <li><a href="{{url('services')}}">Services</a></li>
        <li class="menu-has-children"><a href="{{url('products')}}">Our Products</a>

        </li>
        <li><a href="{{url('contact')}}">Contact</a></li>
      </ul>
    </nav><!-- #nav-menu-container -->
  </div>
</header><!-- #header -->

<main id="main">


@yield('content')
    

</main>
<!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

         
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('home')}}">Home</a></li>

              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('services')}}">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('products')}}">Products</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('contact')}}">Contact Us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><a href="">Olara John Lucas</a></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- #footer -->


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{url('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{url('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{url('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('lib/easing/easing.min.js')}}"></script>
  <script src="{{url('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{url('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{url('lib/wow/wow.min.js')}}"></script>
  <script src="{{url('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{url('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{url('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{url('lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{url('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{url('js/main.js')}}"></script>

</body>
</html>
