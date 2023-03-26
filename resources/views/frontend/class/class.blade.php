@extends('layouts.real')
@section('content')

<div class="section-header mt-5 p-3">
      <h2>Available Class</h2>
</div>

<section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
        @foreach($class as $classes)
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{ $classes['image'] }}" class="img-fluid" alt="Class Image">
              <h4>{{ $classes['name'] }} Class</h4>
              <span class="my-2">{{ $classes['description'] }}</span>
                <div class="d-sm-flex justify-content-between align-items-center">
                 <h5 class="h-100"><span class="badge bg-danger ms-2 text-light">Max Student: {{ $classes['total_student'] }}</span></h5>
                 <h5 class="h-100"><span class="badge bg-success ms-2 text-light">RM {{ $classes['price'] }}</span></h5>
                </div>
              <a href="{{ url('booking') }}" class="btn-get-started my-2 text-decoration-none">Book Your Session</a>
            </div>
          </div>
          @endforeach
          <!-- End Team Member -->
          </div>

        </div>
    </section><!-- End Our Team Section -->
  </div>
</section><!-- End About Us Section -->

@endsection