@extends('master')
@section('content')
<!-- Speakers Section -->
<section id="speakers" class="speakers section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Event Organizers<br></h2>

  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

    @foreach ($organizer as $org)
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="organizer/{{$org->o_image}}" class="img-fluid" alt="">
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
@endsection