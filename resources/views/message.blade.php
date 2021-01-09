<html>
   <head>
      <title>Ajax Example</title>
      
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
      <script>
        //  function getMessage(){
        //     $.ajax({
        //        type:'POST',
        //        url:'/getmsg',
        //        data:'_token = <?php echo csrf_token() ?>',
        //        success:function(data){
        //           $("#msg").html(data.msg);
        //        }
        //     });
        //  }
       

        $(document).ready(function(){
            alert("jjj");
            $( "#replacebtn" ).click(function() {
                alert( "Handler for .click() called." );
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

                          //alert(JSON.stringify(result));
                         // json = JSON.stringify(result);
                         // alert(json);
                           
                        },
                        error: function(result){
                            alert("error ssssssssss");
                        }
                
                    });
                });




                // $.ajax({
                //     headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                //     type:'POST',
                //     url:'/getmsg',
                //     dataType : 'json', 
                //     data:'_token = <?php echo csrf_token() ?>',
                //     success:function(data){
                //         $("#msg").html(data.msg);
                //     }
                // });

           
         
        });

      </script>
   </head>
   
   <body>
      <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>

         <button id="replacebtn">Replace Message</button>
     
   </body>

</html>