@extends('layouts.real')
@section('content')

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-posts" class="recent-posts">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Recent Blog Posts</h2>
        <p>Our blog posts are written by the experienced cake and dessert bakers chefs, so you can trust the advice and guidance they provide.</p>
      </div>

      <div class="row gy-4 justify-content-center">

      @foreach($blog as $blogs)
        <div class="col-xl-4 col-md-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog.png" alt="" class="img-fluid">
            </div>

            <div class="d-sm-flex justify-content-between align-items-center">
                <p class="post-category">{{ $blogs['category'] }}</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jan 1, 2022</time>
                </p>
            </div>

            <h2 class="title mt-3">
              <a href="blog-details.html">{{ $blogs['title'] }}</a>
            </h2>

          </article>
        </div><!-- End post list item -->
        @endforeach

      </div><!-- End recent posts list -->

    </div>
  </section><!-- End Recent Blog Posts Section -->

@endsection