<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Flora Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('adminside/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('adminside/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ asset('adminside/css/sb-admin.css') }}" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form class="" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

            <!-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <div class="form-label-group">
                <input type="text" id="email" name="email" style="" value="" class="form-control" placeholder="Email address" required="required">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                
              </div>
            </div> -->
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <div class="form-label-group">
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Email address" required="required" autofocus="autofocus">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <label for="inputEmail">Email address</label>
              </div>
            </div>

           <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <label for="inputPassword">Password</label>  
              </div>
            </div>

            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                    Login
            </button>

            {{--  <a class="btn btn-primary btn-block" href="index.html">Login</a>  --}}
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="{{ route('register') }}">Register an Account</a>
            <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('adminside/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminside/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('adminside/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script> 
  </body>

</html>
