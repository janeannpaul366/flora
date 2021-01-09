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

    <title>Flora Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('adminside/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('adminside/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ asset('adminside/css/sb-admin.css') }}" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">

          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name" required="required" autofocus="autofocus">
                    <label for="name">Name</label>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email address" value="{{ old('email') }}" required="required">
                <label for="email">Email address</label>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                {{--  <label for="inputEmail">Email address</label>  --}}
              </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                    <label for="password">Password</label>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    {{--  <label for="inputPassword">Password</label>  --}}
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Confirm password" required="required">
                    <label for="password-confirm">Confirm password</label>
                    {{--  <label for="confirmPassword">Confirm password</label>  --}}
                  </div>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                    Register
            </button>

            {{--  <a class="btn btn-primary btn-block" href="login.html">Register</a>  --}}

          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="{{ route('login') }}">Login Page</a>
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

  </body>

</html>
