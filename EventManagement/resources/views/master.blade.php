<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - TheEvent Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('assets/img/favicon.jpg')}}" rel="icon">
  <link href="{{url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  
  <!-- Main CSS File -->
  <link href="{{url('assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: TheEvent
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<!-- fixed-top -->
<body class="index-page">

  <header id="header" class="header d-flex align-items-center  bg-dark">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{url('/')}}" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo.img.png"  alt="">
        <!-- Uncomment the line below if you also wish to use an text logo -->
        <!-- <h1 class="sitename">TheEvent</h1>  -->
      </a>

     <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{url('/')}}" class="active">Home</a></li>
        <li><a href="{{url('/services')}}">Service</a></li>
        <li><a href="{{url('/categories')}}">Event Categories</a></li>
        <li><a href="{{url('/venues')}}">Venue</a></li>
        <li><a href="{{url('/hotels')}}">Hotels</a></li>
        <li><a href="{{url('/galleries')}}">Gallery</a></li>
        <li><a href="{{url('/contact')}}">Contact</a></li>
        
       <li>
       @if (Route::has('login'))
            @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/dashboard') }}">{{Auth::user()->name}}</a></li>
            @else
                <li><a href="{{ route('login') }}">Log in</a></li>
                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endif
            @endauth
        @endif
       </li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

     


    </div>
    
  </header>
  
 

  @yield('content')

 <footer id="footer" class="footer dark-background">

<div class="footer-top">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex align-items-center">
          <span class="sitename">About TheEvent</span>
        </a>
        <div class="footer-contact pt-3 ">
         <p>TheEvent is an Event Management, Catering,<br> Photography and PR company located in <br>Pakistan, which specializes in weddings,<br> parties, corporate events and much more.<br>TheEvent uses its expertise to create<br> powerful impressions, to make your event<br> leave a lasting impression.</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('/organizers')}}">Event Organizers</a></li>
          <li><a href="{{url('/venues')}}">Venues</a></li>
          <li><a href="{{url('/services')}}">Terms of service</a></li>
          <li><a href="{{url('/faqs')}}">Faqs</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Event Categories</h4>
        <ul>
          <li><a href="#">Wedding Events</a></li>
          <li><a href="#">Parties</a></li>
          <li><a href="#">Social Events</a></li>
          <li><a href="#">Ceremanies</a></li>
          <li><a href="#">Birthday Parties</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><a href="#">Photography</a></li>
          <li><a href="#">Entertainment(DJ/Band)</a></li>
          <li><a href="#">Catering</a></li>
          <li><a href="#">Transportation</a></li>
          <li><a href="#">Decoration</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Address</h4>
      <p>A108 Adam Street</p>
          <p>Karachi, Pakistan</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
      </div>

    </div>
  </div>
</div>

<div class="copyright text-center">
  <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

    <div class="d-flex flex-column align-items-center align-items-lg-start">
      <div>
        © Copyright <strong><span>MyWebsite</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>

    <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
      <a href=""><i class="bi bi-twitter-x"></i></a>
      <a href=""><i class="bi bi-facebook"></i></a>
      <a href=""><i class="bi bi-instagram"></i></a>
      <a href=""><i class="bi bi-linkedin"></i></a>
    </div>

  </div>
</div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{url('assets/vendor/aos/aos.js')}}"></script>
<script src="{{url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

<!-- Main JS File -->
<script src="{{url('assets/js/main.js')}}"></script>

</body>

</html>