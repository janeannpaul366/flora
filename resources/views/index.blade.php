@extends('layouts.frontend')
 
@section('header')
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Flora events</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <!-- <a class="nav-link js-scroll-trigger" href="{{ url('/about') }}">About</a> -->
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                    </li> 
                    <!-- <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li> -->
                    {{-- @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a> 
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>
                    </li>
                    @endauth
                    @endif  --}}

                    <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>

                    @if (Route::has('login'))
                    @auth
                    @else
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>
                    </li>
                    @endauth
                    @endif 
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead text-center text-white d-flex">
            <div class="container my-auto">
              <div class="row">
                <div class="col-lg-10 mx-auto">
                  <h1 class="text-uppercase">
                    <strong>Flora: Where elegance meets extraordinary </strong>
                  </h1>
                  <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                  <p class="text-faded mb-5">Decor your life with new impressions</p>
                  <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                </div>
              </div>
            </div>
          </header>
    @endsection

    @section('about')
    <section class="bg-primary" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-heading text-white">We have got what you need!</h2>
                        <hr class="light my-4">
                        <p class="text-faded mb-4">
                        Special Occasions Made Spectacularly Beautiful. We Coordinate and Decorate You. Innovative concepts, creative design, flawless execution.
                        </p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        @endsection

        @section('services')
        <section id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading">At Your Service</h2>
                            <hr class="my-4">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box mt-5 mx-auto">
                                <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-1"></i>
                                <h3 class="mb-3">MICE Events</h3>
                                <p class="text-muted mb-0">Inaugurations, Award Nights, Entertainment Shows</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box mt-5 mx-auto">
                                <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-2"></i>
                                <h3 class="mb-3">Brand Activation</h3>
                                <p class="text-muted mb-0">Celebrity Management, Mall Activations, Roadshows</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box mt-5 mx-auto">
                                <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-3"></i>
                                <h3 class="mb-3">Destination Events</h3>
                                <p class="text-muted mb-0">Green Events, Outbound Training Programs</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box mt-5 mx-auto">
                                <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
                                <h3 class="mb-3">Personal Events</h3>
                                <p class="text-muted mb-0">Wedding, Engagement, Baptism</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endsection


            @section('portfolio')
            <section class="p-0" id="portfolio">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters popup-gallery">

                            @foreach ($categories as $key => $category)
                            <div class="col-lg-4 col-sm-6">
                                <a class="portfolio-box" href="{{ asset('img/portfolio/fullsize/') }}/{{ $category->image }}">
                                    <img class="img-fluid" src="{{ asset('img/portfolio/thumbnails/') }}/{{ $category->image }}" alt="">
                                    <div class="portfolio-box-caption">
                                        <div class="portfolio-box-caption-content">
                                            
                                            <div class="project-name">
                                                    {{ $category->name }}
                                             </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </section>
            
                <section class="bg-dark text-white">
                  <div class="container text-center">
                    <h2 class="mb-4">"Flora Events, let us create your magical memory"</h2>
                    <a class="btn btn-light btn-xl sr-button" href="#">Explore it now!</a>
                  </div>
                </section>
                @endsection

                @section('footer')
                <section id="contact">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 mx-auto text-center">
                                    <h2 class="section-heading">Let's Get In Touch!</h2>
                                    <hr class="my-4">
                                    <p class="mb-5">Come and join us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                                </div>
                                <div class="col-lg-8 mx-auto text-center">
                                    <style>
                                        .clrmsg{
                                            color:green;
                                        }
                                     </style>
                                        <div id="msg"></div> 
                                    <p class="mb-5">

                                        {{-- {{  Form::open(['url' => url('/'),'method' =>'POST', 'class' => 'form-horizontal','id' => 'form', 'onsubmit' => 'return validation()']) }} 

                                        <div class="form-group">
                                             
                                             <input id="email" type="email" class="form-control text-center" name="email"  placeholder="Send us your mail for subscription" >
                                            <span id="err_email"></span>     
                                        </div>
                                        <div class="form-group">
                                            {{ Form::submit("Submit",["class"=>"btn btn-primary"]) }}
                                        </div> 

                                        {{ Form::close() }}  --}}

  
                                        {{-- <form class="form-horizontal" id="frm" method="POST" action="{{ action('FrontendController@savenewsletter') }}"> --}}
                                            {{-- <form class="form-horizontal" id="frmnewsletter" method="POST" action="{{ action('FrontendController@savenewsletterajax') }}">
                                            
                                            {{ csrf_field() }}
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                 <input id="email" type="email" class="form-control text-center" name="email"  placeholder="Send us your mail for subscription" required >
                                                        
                                            </div>
                                            <div class="form-group">
                                                    {{ Form::submit("Submit",["class"=>"btn btn-primary"]) }} 

                                                   
                                            </div>
                                        </form>     --}}

                                        
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control text-center" name="email"  placeholder="Send us your mail for subscription"  >
                                        <span id="erremail"></span>
                                        </div>
                                       

                                        <div class="form-group">
                                            <button id="submit" class="btn btn-primary">Submit</button> 
                                        </div>
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 ml-auto text-center">
                                    <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
                                    <p>123-456-6789</p>
                                </div>
                                <div class="col-lg-4 mr-auto text-center">
                                    <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
                                    <p>
                                        <a href="mailto:your-email@your-domain.com">floraevents@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <script type="text/javascript">
                       

    /*$.noConflict();


    jQuery(document).ready(function( $){
            alert("aaaaaaa");
            var email = $('#email').val();
            alert(email);
            $( "#replacebtn" ).click(function() {
                alert( "Handler for .click() called aaaaaaaaaaa." );
                $.ajax({
                      method : "GET",
                      cache : false,
                      //data  : {countryid: cid },
                      //dataType : 'json',
                     
                      //url:'/getmsg',
                      url:"setdata",
                      //dataType: 'json'
                      //data:'_token = <?php echo csrf_token() ?>',
                      success: function(result){
                            // /$("#ajaxdata").html(result.states);
                          alert(result);
                          if(result){
                            $("#msg").html(" Email submitted successfully");
                          }else{
                            $("#msg").html(" Please try again"); 
                          }
                          
                          
                          //alert(JSON.stringify(result));
                         // json = JSON.stringify(result);
                         // alert(json);
                           
                        },
                        error: function(result){
                            alert("error fffffffff");
                        }
                
                    });
                });         
        });*/



                        </script>
                    @endsection