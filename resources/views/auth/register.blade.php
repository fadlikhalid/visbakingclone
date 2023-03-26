<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    
<section class="vh-100" style="background-color: #85445d;">
  <div class="container py-1 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; margin-top: -50px;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="{{ asset('assets/img/sUP_bg.png') }}"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form method="POST" action="{{ route('register') }}">
                                    @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <a href="{{ url('/') }}" class="h1 text-decoration-none fw-bold mb-0">Visbaking</a>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account</h5>

                  <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-2">
                  <div class="form-floating mb-2">
                    <input type="text" id="fname" name="first_name" placeholder="Enter First Name" class="form-control" />
                    <label class="form-label" for="fname">First Name</label>
                    @error('first_name')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                  </div>
                </div>  
                <div class="col-md-6 mb-2">
                  <div class="form-floating mb-2">
                    <input type="text" id="lname" name="last_name" placeholder="Last Name" class="form-control" />
                    <label class="form-label" for="lname">Last Name</label>
                    @error('last_name')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                  </div>
                </div>
             </div>
                  <div class="form-floating mb-4">
                    <input type="text" id="username" name="username" placeholder="Enter username" class="form-control" />
                    <label class="form-label" for="username">Username</label>
                    @error('username')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                  </div>
                  <div class="form-floating mb-4">
                    <input type="text" id="phone" name="phone" placeholder="Enter phone number" class="form-control" />
                    <label class="form-label" for="phone">Phone Number</label>
                    @error('phone')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                  </div>           
                  <div class="form-floating mb-4">
                    <input type="email" id="email" name="email" placeholder="Enter email" class="form-control" />
                    <label class="form-label" for="email">Email address</label>
                    @error('email')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                  </div>

                  <div class="form-floating mb-4">
                    <input type="password" id="pass" name="password" placeholder="Enter password" class="form-control" />
                    <label class="form-label" for="pass">Password</label>
                    @error('password')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                  </div>
                  <div class="form-floating mb-4">
                    <input type="password" id="cpass" name="password_confirmation" placeholder="Confirm password" class="form-control" required autocomplete="current-password"/>
                    <label class="form-label" for="cpass">Confirm Password</label>
                    @error('password-confirm')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                  </div>

                  <input type="hidden" id="is_admin" name="is_admin" value="0"/>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                  </div>

                  <p style="color: #393f81; margin-bottom: -20px">Have an account? <a href="{{route('login')}}"
                      class="text-decoration-none text-primary" style="color: #393f81;">Sign in here</a></p>
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
                <h2>register</h2>
                <ul>
                    <li><a href="{{route('login')}}">login</a></li>
                    <li> register </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="register-area ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="form-group">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first_name" class="text-small text-uppercase">{{ __('First Name') }}</label>
                                                <input id="first_name" type="text" class="form-control form-control-lg" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                                                @error('first_name')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="last_name" class="text-small text-uppercase">{{ __('Last Name') }}</label>
                                                <input id="last_name" type="text" class="form-control form-control-lg" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
                                                @error('last_name')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="username" class="text-small text-uppercase">{{ __('Username') }}</label>
                                                <input id="username" type="text" class="form-control form-control-lg" name="username" value="{{ old('username') }}" placeholder="Username">
                                                @error('username')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email" class="text-small text-uppercase">{{ __('E-Mail Address') }}</label>
                                                <input id="email" type="email" class="form-control form-control-lg" value="{{ old('email') }}" name="email" placeholder="Enter your Email">
                                                @error('email')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="phone" class="text-small text-uppercase">{{ __('Phone') }}</label>
                                                <input id="phone" type="number" class="form-control form-control-lg" name="phone" placeholder="Enter your Phone Number">
                                                @error('phone')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password" class="text-small text-uppercase">{{ __('New Password') }}</label>
                                                <input id="password" type="password" class="form-control form-control-lg" name="password" placeholder="Enter your password">
                                                @error('password')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password-confirm" class="text-small text-uppercase">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Confirm Password">
                                                @error('password-confirm')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label text-small" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-dark">
                                            {{ __('Register') }}
                                        </button>
                                        @if(Route::has('login'))
                                            <a class="btn btn-link text-small" href="{{ route('login') }}">
                                                {{ __('Login?') }}
                                            </a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

