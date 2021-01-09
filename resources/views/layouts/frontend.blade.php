<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Flora Events</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/creative.min.css') }}" rel="stylesheet">

        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        {{--jquery validation--}} 
        {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  --}}
   
    </head>
    <body id="page-top">
    
        
            @section('header')
            @show

            @section('about')
            @show

            @section('services')
            @show

            @section('portfolio')
            @show

            @section('footer')
            @show
  
        
        {{-- <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>--}}

        {{-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
        <script>
                $(document).ready(function () {
                $('#form').validate({ // initialize the plugin
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                        
                    }
                });
            });
            </script>  --}}

        <!-- Bootstrap core JavaScript -->
        {{-- <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script> --}}



        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Plugin JavaScript -->
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('vendor/scrollreveal/scrollreveal.min.js') }}"></script>
        <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        <!-- Custom scripts for this template -->
        <script src="{{ asset('js/creative.min.js') }}"></script>

        <script src="{{ asset('js/newsletter.js') }}"></script> 

        <script type="text/javascript">
            // function getMessage(){
            //     alert("hhhh");
            //     $.ajax({
            //         type:'POST',
            //         url:'/getmsg',
            //         data:'_token = <?php echo csrf_token() ?>',
            //         success:function(data){
            //             $("#msg").html(data.msg);
            //             //alert(data.msg);
            //         }
            //     });
            // }
/*
        jQuery( document ).ready( function( $ ) {

            $( '#frmnewsletter' ).on( 'submit', function(e) {
                e.preventDefault();

                //var name = $(this).find('input[name=name]').val();
                alert("reachecxcvxd");
                var base_url = {!! json_encode(url('/')) !!};
                //var finalUrl = base_url+'/index.php/frontend/savenewsletter';
                //var host = base_url+'/index.php';
                var host = base_url;
                alert(host);

                $.ajax({
                    type: "POST",
                    url: host+'/frontend/add',
                    data:'_token = <?php echo csrf_token() ?>',
                    // data: {name:name, message:message, post_id:postid}
                    success: function( data ) {
                       // alert( msg );
                        alert(data.msg);
                    }
                });
                // $.ajax({
                //     type: "POST",
                //     //url: host+'/frontend/savenewsletter',
                //     url: host+'/frontend/add',
                //     success:function(data){
                //         //var data = $.parseJSON(data);
                //         alert(data);
                //         //$("#msg").html(data.msg);
                //     }
                // });

            });
          });

          */
            // function getMessage(){
            //     alert("ajax");
            //     var email   =   $('#email').val(); 
            //     alert(email);
            //     var base_url = {!! json_encode(url('/')) !!};
            //     //var finalUrl = base_url+'/index.php/Frontend/savenewsletter';
            //     var finalUrl = base_url+'/index.php/getmsg';
            //     alert(finalUrl);
            //     $.ajax({
            //         type:'POST',
            //         //url:'/getmsg',
            //         url:finalUrl,
            //         //url:'<?php echo "savenewsletter"; ?>',
            //         //data:'_token = <?php echo csrf_token() ?>',
            //         success:function(data){
            //             var data = $.parseJSON(data);
            //             alert(data);
            //             //$("#msg").html(data.msg);
            //         }
            //     });
            // }
      </script>

    </body>
</html>