<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flora Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('adminside/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('adminside/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('adminside/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('adminside/css/sb-admin.css') }}" rel="stylesheet">

    <!-- Date picker-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    @yield('css')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="{{ url('/admin') }}">Flora Events</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <!-- <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a> -->
          <a href="#" class="nav-link dropdown-toggle" id="userDropdown" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <!-- <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
            </a> 

            <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a> -->

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
             </form>

          </div>
        </li>

      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Event</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{ route('events.create') }}">Add Event</a>
            <a class="dropdown-item" href="{{ route('events.index') }}">Events</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Category</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{ route('categories.create') }}">Add Category</a>
            <a class="dropdown-item" href="{{ route('categories.index') }}">Category</a>
          </div>  
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-folder"></i>
              <span>Newsletter</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <a class="dropdown-item" href="{{  url('newsletter') }}">Newsletters</a>
            </div>  
          </li>

      </ul>
    <div id="content-wrapper">

        @if(Session::has('flash_message'))
        <div class="container">      
            <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
            </div>
        </div>
       @endif

       <div class="row">
        <div class="col-md-8 col-md-offset-2">              
            @include ('errors.list') {{-- Including error file --}}
        </div>
    </div> 

            @section('dashboard')
            @show

            @section('listcategories')
            @show

            @section('addcategories')
            @show

            @section('showcategories')
            @show 

            @section('editcategories')
            @show

            @section('listnewsletters')
            @show

            @section('listevents')
            @show

            @section('addevents')
            @show 

            @section('editevents')
            @show

            @section('showevents')
            @show

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div> 
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    



    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('adminside/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminside/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    

    @yield('js')

    {{--date picker--}}
    {{-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> --}}
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    </script>
    

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('adminside/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Page level plugin JavaScript-->
    {{-- <script src="{{ asset('adminside/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('adminside/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('adminside/vendor/datatables/dataTables.bootstrap4.js') }}"></script> --}}

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('adminside/js/sb-admin.min.js') }}"></script>

    <!-- Demo scripts for this page-->
    {{-- <script src="{{ asset('adminside/js/demo/datatables-demo.js') }}"></script>
    <script src="{{ asset('adminside/js/demo/chart-area-demo.js') }}"></script>  --}}

  </body>
  
</html>
