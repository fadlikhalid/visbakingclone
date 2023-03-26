<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    
    <!-- login-area end -->

<section class="vh-100" style="background-color: #85445d;">
  <div class="container py-1 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="{{ asset('assets/img/sIN_bg.png') }}"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form method="POST" action="/sign-in">
                  @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <a href="{{ url('/') }}" class="h1 text-decoration-none fw-bold mb-0">Visbaking</a>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-floating mb-4">
                    <input type="text" id="username" name="username" placeholder="Enter Username" class="form-control form-control-lg" />
                    <label class="form-label" for="username">Username</label>
                    @error('username')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>

                  <div class="form-floating mb-4">
                    <input type="password" id="pass" name="password" placeholder="Enter password" class="form-control form-control-lg" />
                    <label class="form-label" for="pass">Password</label>
                    @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>

                  <a class="small text-muted text-decoration-none" href="{{ route('password.request') }}">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{route('register')}}"
                      class="text-decoration-none text-primary">Register here</a></p>
                  <a href="#!" class="small text-decoration-none">Terms of use.</a>
                  <a href="#!" class="small text-muted text-decoration-none">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

</html>

<!-- <div class="breadcrumb-area pt-5 pb-5" style="background-color: #09c6a2">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>login</h2>
                <ul>
                    <li><a href="{{route('register')}}">register</a></li>
                    <li> login </li>
                </ul>
            </div>
        </div>
    </div>
    login-area start 
    <div id="login-form" class="register-area ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="form-group">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="username">Username*</label>
                                        <input type="text" name="username" value="{{ old('username') }}" placeholder="Username">
                                        @error('username')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password">Password*</label>
                                        <input id="pass" type="password" name="password" placeholder="password">
                                        @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <label class="show">Show password</label>
                                    <label class="hide"></label>
                                    <div class="form-group row mb-0">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="button-box">
                                        <button class="default-btn floatright">{{ __('Login') }}</button>
                                    </div>
                                    <div class="form-group mt-2">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="form-group mt-4 mb-0">
                                        <a href="{{ route('social_login', 'facebook') }}" class="btn btn-block" style="background-color: #1877F2; color: #FFFFFF">
                                            Login with Facebook
                                        </a>
{{--                                    <a href="{{ route('social_login', 'twitter') }}" class="btn btn-block" style="background-color: #1DA1F2; color: #FFFFFF">--}}
{{--                                        Login with Twitter--}}
{{--                                    </a>--}}
{{--                                    <a href="{{ route('social_login', 'google') }}" class="btn btn-block" style="border-color: #1877F2; color: black">--}}
{{--                                        Login with Google--}}
{{--                                    </a>--}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


