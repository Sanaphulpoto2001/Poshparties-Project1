@extends('master')
@section('content')
<style>
  .card{
    border: none;
  }
 
</style>
<!-- Hotels Section -->
<section id="hotels" class="hotels section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Hotels</h2>
    <p>Our hotel offers the perfect blend of luxury and functionality for your next event</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

    @foreach ($hotel as $htl)
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
    <div class="card h-100 position-relative text-center">
        <div class="card-img">
            <img src="hotel/{{$htl->h_image}}" alt="" height="250px" width="100%">
        </div>
        <h3>{{$htl->category->c_name}}</h3>
        <h6>{{$htl->h_name}}</h6>
        <h6>Location: {{$htl->h_location}}</h6>
        <div class="stars">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
        </div>   <br><br><br>
        
        <!-- Booking Button -->
        <a href="{{url('/hbooknow')}}" class="btn booking-btn">Book Now</a>
    </div>
</div><!-- End Card Item -->
@endforeach

      

    </div>

  </div>

</section><!-- /Hotels Section -->
@endsection