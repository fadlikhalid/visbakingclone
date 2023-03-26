@extends('layouts.real')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
  <div class="container position-relative">
    <div class="row gy-5" data-aos="fade-in">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <div class="box-shadow">
          <h2>Everyone can cook <span></span></h2>
          <p>Book an appointment now</p>
        </div>

        <p></p>

        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="{{ url('about-us') }}" class="btn-get-started text-decoration-none">Get Started</a>
          <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="btn-watch-video text-decoration-none d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2">
        <!-- <img src="logo.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100"> -->
      </div>
    </div>
  </div>

  <div class="icon-boxes position-relative">
    <div class="container position-relative">
      <div class="row gy-4 mt-5">

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-easel"></i></div>
            <h4 class="title"><a href="" class="stretched-link text-decoration-none">We teach</a></h4>
          </div>
        </div>
        <!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-gem"></i></div>
            <h4 class="title"><a href="" class="stretched-link text-decoration-none">You learn</a></h4>
          </div>
        </div>
        <!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-geo-alt"></i></div>
            <h4 class="title"><a href="" class="stretched-link text-decoration-none">We cook</a></h4>
          </div>
        </div>
        <!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-command"></i></div>
            <h4 class="title"><a href="" class="stretched-link text-decoration-none">Food is Good</a></h4>
          </div>
        </div>
        <!--End Icon Box -->

      </div>
    </div>
  </div>

  </div>
</section>
<!-- End Hero Section -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>About Us</h2>
      <p>In Visbaking we have the mindset that baking can be for everyone. Baking is a beatiful mixture of art and skill and our passion is to share our knowledge on the world of baking. We strive to expand our client skills on creating the high quality baking with the best ingridients. Join our baking class now to learn about the best baking techniques.</p>
    </div>

    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <!-- <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100"> -->
          <div class="col-xl-5 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{ asset('assets/img/class.png') }}" class="img-fluid" alt="Class Image">
              <h4>Our Available Class</h4>
              <span class="my-2">Learn how to make some delicious desserts from around the world</span>
              <a href="/class" class="btn-get-started my-2 text-decoration-none">Check Our Class</a>
            </div>
          </div><!-- End Team Member -->

          </div>

        </div>
    </section><!-- End Our Team Section -->
  </div>
</section><!-- End About Us Section -->

<main id="main">

  <!-- ======= Our Services Section ======= -->
  <section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Services</h2>
        <p>Our service is dedicated to providing the highest level of quality and satisfaction to our customers.</p>
      </div>

      <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-calendar4-week"></i>
            </div>
            <h3>Baking Class</h3>
            <p>With our hands-on baking lessons, you'll learn the techniques and secrets to create delicious cakes and desserts. Our baking class is perfect for anyone who loves to bake, entertain, or just enjoy sweet treats with family and friends.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <h3>Cake Product</h3>
            <p>Our cake products are made from high-quality ingredients and baked fresh to ensure the best taste and texture. Whether you're looking for a birthday cake, wedding cake, or just a sweet treat for yourself, we have a wide selection of cake products to choose from.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-chat-square-text"></i>
            </div>
            <h3>Blog Posts</h3>
            <p>Our blog posts are written by experienced bakers and pastry chefs, so you can trust the advice and guidance they provide. Whether you're interested in bread baking, cake decorating, or pastry making, you'll find plenty of inspiration and ideas on our blog. Follow our baking blog and never miss a post, you will always receive the baking recipes, tutorials, and advice.</p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Our Services Section -->

  
  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-posts" class="recent-posts">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Blog Post</h2>
        <p>Our blog posts are written by the experienced cake and dessert bakers chefs, so you can trust the advice and guidance they provide.</p>
      </div>

      <div class="row gy-4 justify-content-center">

        <div class="col-xl-6 col-md-6">
          <article>

            <div class="post-img">
             <a href="/blog-post"><img src="assets/img/cook1.png" alt="" class="img-fluid"></a>
            </div>

            <h2 class="title">
              <a href="/blog-post">Check our our blog posts</a>
            </h2>

          </article>
        </div><!-- End post list item -->

      </div><!-- End recent posts list -->

    </div>
  </section><!-- End Recent Blog Posts Section -->


</main><!-- End #main -->
@stop