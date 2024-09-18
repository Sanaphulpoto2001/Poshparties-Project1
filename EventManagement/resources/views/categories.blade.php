@extends('master')
@section('content')
<!-- Categories Section -->
<section id="hotels" class="hotels section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Event Categories</h2>
    <p>Making a splash with innovative events that highlight your brand's essence and captivate your audience.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

    @foreach ($category as $cat)
    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100 " >
          <div class="card-img">
            <img src="category/{{$cat->c_image}}" height="500px"  alt="" >
          </div>
          <h3>{{$cat->c_name}}</h3>
          <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
          <p>0.4 Mile from the Venue</p>
        </div>
      </div><!-- End Card Item -->
      @endforeach
     

    </div>
    

  </div>

</section><!-- /Categories Section -->
@endsection