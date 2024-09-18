@extends('master')
@section('content')
<!-- <style>
  .card{
    border: none
  }
  .bi-star-fill{
    color: orange
  }
  img:hover {
    transform: scale(1.2); /* Zoom in to 120% */
}
</style> -->
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


<div class="container">

<div class="row gy-4">

@foreach ($venue as $htl)
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
<div class="card h-100 position-relative text-center">
    <div class="card-img">
        <img src="venue/{{$htl->v_image}}" alt="" height="250px" width="100%">
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
    <a href="{{url('/booknow')}}" class="btn booking-btn">Book Now</a>
</div>
</div><!-- End Card Item -->
@endforeach

  

</div>

</div>



</section><!-- /Venue Section -->
@endsection