@extends('master')
@section('content')
<style>
  .card{
    border: none
  }
</style>
<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <img src="assets/img/banner.jpg2.jpg" alt="" data-aos="fade-in" class="">

  <div class="container d-flex flex-column align-items-center text-center mt-auto">
    <h2 data-aos="fade-up" data-aos-delay="100" class="">THE EVENT<br><span>MANAGEMENT</span> WEBSITE</h2>
    <p data-aos="fade-up" data-aos-delay="200">We makes your event memorable</p>
    <div data-aos="fade-up" data-aos-delay="300" class="">
      
      
    </div>


  </div>

  <div class="about-info mt-auto position-relative">

    <div class="container position-relative" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6">
          <h2>About The Event</h2>
          <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
            accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in
            est ut optio sequi unde.</p>
        </div>
        <div class="col-lg-3">
          <h3>Where</h3>
          <p>Event Management, Karachi</p>
        </div>
        <div class="col-lg-3">
          <h3>When</h3>
          <p>Monday to Wednesday<br>10-12 December</p>
        </div>
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->

<!-- Speakers Section -->
<section id="speakers" class="speakers section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Event Organizers</h2>
    

  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

    @foreach ($organizer as $org)
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="organizer/{{$org->o_image}}"  alt="" height="250px" width="100%">
          <div class="member-info">
            <div class="member-info-content">
              <h4>{{$org->o_name}}</h4>
              <span>{{$org->o_description}}</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->
      @endforeach

    </div>

  </div>

</section><!-- /Speakers Section -->

<!-- Schedule Section -->
<section id="schedule" class="schedule section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Event Schedule<br></h2>
    <p>Check out our event schedule below and plan your day to maximize your experience</p>
  </div><!-- End Section Title -->

  <div class="container">

    <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
      <li class="nav-item">
        <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Day 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Day 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Day 3</a>
      </li>
    </ul>

    <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

      <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius necessitatibus voluptatem quis labore perspiciatis quia.</h3>

      <!-- Schdule Day 1 -->
      <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

        <div class="row schedule-item">
          <div class="col-md-2"><time>09:30 AM</time></div>
          <div class="col-md-10">
            <h4>Registration</h4>
            <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>10:00 AM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-1-2.jpg" alt="Brenden Legros">
            </div>
            <h4>Keynote <span>Brenden Legros</span></h4>
            <p>Facere provident incidunt quos voluptas.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>11:00 AM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-2-2.jpg" alt="Hubert Hirthe">
            </div>
            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>12:00 AM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-3-2.jpg" alt="Cole Emmerich">
            </div>
            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>02:00 PM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-4-2.jpg" alt="Jack Christiansen">
            </div>
            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>03:00 PM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-5.jpg" alt="Alejandrin Littel">
            </div>
            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>04:00 PM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-6.jpg" alt="Willow Trantow">
            </div>
            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
          </div>
        </div>

      </div><!-- End Schdule Day 1 -->

      <!-- Schdule Day 2 -->
      <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

        <div class="row schedule-item">
          <div class="col-md-2"><time>10:00 AM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-1-2.jpg" alt="Brenden Legros">
            </div>
            <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
            <p>Facere provident incidunt quos voluptas.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>11:00 AM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-2-2.jpg" alt="Hubert Hirthe">
            </div>
            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>12:00 AM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-3-2.jpg" alt="Cole Emmerich">
            </div>
            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>02:00 PM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-4-2.jpg" alt="Jack Christiansen">
            </div>
            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>03:00 PM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-5.jpg" alt="Alejandrin Littel">
            </div>
            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>04:00 PM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-6.jpg" alt="Willow Trantow">
            </div>
            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
          </div>
        </div>

      </div><!-- End Schdule Day 2 -->

      <!-- Schdule Day 3 -->
      <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

        <div class="row schedule-item">
          <div class="col-md-2"><time>10:00 AM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-2-2.jpg" alt="Hubert Hirthe">
            </div>
            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>11:00 AM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-3-2.jpg" alt="Cole Emmerich">
            </div>
            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>12:00 AM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-1-2.jpg" alt="Brenden Legros">
            </div>
            <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
            <p>Facere provident incidunt quos voluptas.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>02:00 PM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-4-2.jpg" alt="Jack Christiansen">
            </div>
            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>03:00 PM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-5.jpg" alt="Alejandrin Littel">
            </div>
            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-2"><time>04:00 PM</time></div>
          <div class="col-md-10">
            <div class="speaker">
              <img src="assets/img/speakers/speaker-6.jpg" alt="Willow Trantow">
            </div>
            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
          </div>
        </div>

      </div><!-- End Schdule Day 3 -->

    </div>

  </div>
</section><!-- /Schedule Section -->

<!-- Venue Section -->
<section id="venue" class="venue section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Event Venue<br></h2>
    <p>Step into our event venues and discover spaces that transform your ideas into reality</p>
  </div><!-- End Section Title -->

  <div class="container-fluid" data-aos="fade-up">

    <div class="row g-0">
      <div class="col-lg-6 venue-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0" allowfullscreen=""></iframe>
      </div>

      <div class="col-lg-6 venue-info">
        <div class="row justify-content-center">
          <div class="col-11 col-lg-8 position-relative">
            <h3>WE MAKE YOUR SPECIAL DAY, MEMORABLE.</h3>
            <p>Whether it's a corporate meeting or a social celebration, our event venues provide a seamless blend of function and style</p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-0">

    @foreach ($venue as $ven)
    <div class="col-lg-3 col-md-4">
      <div class="venue-gallery">
        <a href="venue/{{$ven->v_image}}"  class="glightbox" data-gall="venue-gallery">
          <img src="venue/{{$ven->v_image}}"  alt="" height="250px" width="100%" >
        </a>
      </div>
    </div>
<!-- End Card Item -->
@endforeach
    </div>
  </div>

</section><!-- /Venue Section -->

<!-- Hotels Section -->
<section id="hotels" class="hotels section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Hotels</h2>
    <p>Bring your event to life in our hotel’s versatile spaces, crafted for memorable experiences</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

    @foreach ($hotel as $htl)
    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100 ">
          <div class="card-img text-center" >
            <img src="hotel/{{$htl->h_image}}"  alt="" height="250px" width="100%">
          </div>
          <h3>{{$htl->category->c_name}}</h3>
        <h3>{{$htl->h_name}}</h3>
        <h3>Location: {{$htl->h_location}}</h3>
          <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
          <p>0.4 Mile from the Venue</p>
        </div>
      </div><!-- End Card Item -->
      @endforeach

    </div>

  </div>

</section><!-- /Hotels Section -->

<!-- Gallery Section -->
<section id="gallery" class="gallery section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Gallery</h2>
    <p>Bringing creativity to life with vibrant themes and dynamic setups.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "centeredSlides": true,
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 0
            },
            "768": {
              "slidesPerView": 3,
              "spaceBetween": 20
            },
            "1200": {
              "slidesPerView": 5,
              "spaceBetween": 20
            }
          }
        }
      </script>
      
      <div class="swiper-wrapper align-items-center">
      @foreach ($gallery as $gall)
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="gallery/{{$gall->g_image}}"><img src="gallery/{{$gall->g_image}}" class="img-fluid" alt=""></a></div>
        @endforeach
      </div>
     
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Gallery Section -->

<!-- Sponsors Section -->
<section id="sponsors" class="sponsors section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Sponsors</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-0 clients-wrap">

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-3 col-md-4 client-logo">
        <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

    </div>

  </div>

</section><!-- /Sponsors Section -->


</main>
@endsection