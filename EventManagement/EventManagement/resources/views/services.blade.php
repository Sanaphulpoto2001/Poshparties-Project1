@extends('master')
@section('content')
<!-- Categories Section -->
<section id="hotels" class="hotels section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Event Services</h2>
    <p>Providing state-of-the-art audio-visual services to enhance your event with crystal-clear sound and stunning visuals.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

    @foreach ($service as $ser)
    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100 text-center" >
          <div class="card-img">
            <img src="service/{{$ser->s_image}}" height="300px" width="100%" alt="" >
          </div>
          <h3>{{$ser->s_name}}</h3>
          <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
          <p>0.4 Mile from the Venue</p>
        </div>
      </div><!-- End Card Item -->
      @endforeach
     

    </div>
    

  </div>

</section><!-- /Categories Section -->
@endsection