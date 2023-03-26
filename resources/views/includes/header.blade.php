      <nav style="background: #E9D9DA;" class="navbar navbar-expand-lg navbar-light" style="font-family: 'Roboto', sans-serif;">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
          <img src="{{ asset('assets/img/logo.png') }}" alt="" width="40" height="40" class="d-inline-block mx-2"><h4 class="d-inline-block">Visbaking</h4> 
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>             
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item me-3">
                <a href="{{ url('/') }}" id="nLink" class="nav-link">Home</a>
              </li>
              <li class="nav-item me-3">
                <a href="{{ url('about-us') }}" class="nav-link">About</a>
              </li>
              <li class="nav-item me-3">
                <a href="{{route('shop.index')}}" class="nav-link">Product</a>
              </li>
              <li class="nav-item me-3">
                <a href="{{ url('instructors') }}" class="nav-link">Instructors</a>
              </li>
              <li class="nav-item me-3">
                <a href="{{ url('contact') }}" class="nav-link">Contact Us</a>
              </li>
            </ul>

            @auth
            <!-- User Profile -->
            <ul class="navbar-nav">
              <li class="nav-item dropdown no-arrow">
                    <div class="nav-item dropdown no-arrow">
                      <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                        <span class="d-block d-lg-inline mr-3 text-gray-800 medium" >
                          {{ auth()->user()->username }}
                        </span>
                        <div class="d-lg-none dropdown-divider"></div>
                        <img class="border rounded-circle img-profile avatar" src="{{asset('assets/img/profile.png')}}" width="30px" height="30px"></a>
                        <ul class="dropdown-menu shadow dropdown-menu-dark dropdown-menu-lg-end">
                          <a class="dropdown-item" href="/profile"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                          {{-- <li class="dropdown-item" href="#"><i class="fas fa-id-card-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Switch to Admin</li> --}}

                          @can('admin')
                          <a class="dropdown-item" href="/admin"><i class="fas fa-id-card-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Switch to Admin</a>
                          @endcan

                          <div class="dropdown-divider"></div>
                          <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout
                            </button>
                          </form>
                        </ul>
                    </div>
                </li>
            </ul>

            @else
            <a class="btn btn-outline-dark navbar-text me-2 btn-sm" href="/login">
              Sign In
            </a>
            <a class="btn btn-outline-dark navbar-text btn-sm" href="/register">
              Sign Up
            </a>
            
            @endauth
          </div>
        </div>
      </nav>

      <script type="text/javascript">
      var nav = document.querySelector('nav');
      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 50) {
          nav.classList.add('fixed-top');
        } else {
          nav.classList.remove('fixed-top');
        }
      });
    </script>

    <!-- <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="{{ url('/') }}" class="logo d-flex align-items-center text-decoration-none"> -->
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <!-- <h1>Viz-baking<span>.</span></h1>
    </a>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a href="{{ url('/') }}" class="text-decoration-none">Home</a></li>
            <li><a href="{{ url('about-us') }}" class="text-decoration-none">About</a></li>
            <li><a href="{{ url('instructors') }}" class="text-decoration-none">Instructors</a></li>
            <li><a href="{{ url('contact') }}" class="text-decoration-none">Contact Us</a></li>
            <li><a href="{{ url('/login') }}" class="text-decoration-none">Login</a></li>
            <li class="dropdown"><a href="#" class="text-decoration-none"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Deep Drop Down 1</a></li>
                            <li><a href="#">Deep Drop Down 2</a></li>
                            <li><a href="#">Deep Drop Down 3</a></li>
                            <li><a href="#">Deep Drop Down 4</a></li>
                            <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                </ul>
            </li>
        </ul>
    </nav> -->
    <!-- .navbar -->

    <!-- <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i> -->