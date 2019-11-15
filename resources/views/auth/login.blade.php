
  <head>
    <title> Login - Rumah Sakit </title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/vendor/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">

  </head>


  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">   

          @if (session('status'))
            <div class="row">
              <div class="col-md-12">
                <div class="alert @if(session('status.success')) alert-success @else alert-danger @endif alert-dismissible fade show mt-5" role="alert">
                  {{ session('status.msg') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
            </div>
          @endif

          <form method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}

              @php
                $pwd = '';
                $email = '';
              @endphp

            <h1>Login Form</h1>
            <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" value="{{$email}}"  placeholder="EMail Address"  required autofocus>
                @if ($errors->has('email'))
                  <span class="help-block text-danger">
                    <small class="help-text">
                        {{ $errors->first('email') }}
                    </small>
                  </span>
                @endif
              </div>
              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" value ="{{$pwd}}" required>
                  @if ($errors->has('password'))
                    <span class="help-block text-danger">
                      <small class="help-text">
                        {{ $errors->first('password') }}
                      </small>
                    </span>
                  @endif
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="custom-control-label" for="remember">
                    Remember Me
                  </label>
              </div>
              <br>
              <div>
                <input type="submit" name="login" class="btn btn-dark Log in" value="Sign In">
                <input type="reset" name="reset" class="btn btn-dark Reset" value="forgot your password ?">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                <a href="#signup"class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-stethoscope"></i> Fairfield Hospital</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
        
        <div id="register" class="animate form registration_form">
          <section class="login_content">
          <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf

              <h1>Create Account</h1>
              <div>
                <input id="name" type="text" placeholder="Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                
                @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              
              </div>
              <div>
                <input id="email" type="email" placeholder="E-Mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                
                @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif

              </div>
              <div>
                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
              <div>
                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
              </div> 
              <div>
                <input type="submit" name="login" class="btn btn-dark Log in" value="Sign Up">
                <input type="reset" name="reset" class="btn btn-dark Reset" value="forgot your password ?">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-stethoscope"></i> Fairfield Hospital</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
          </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>