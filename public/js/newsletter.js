
    $.noConflict();
    jQuery(document).ready(function( $){
        $('#submit').on('click', function() {
     
            var email = $('#email').val();
            //alert(email);
            document.getElementById("erremail").style.display="none";
            if(email==''){
                document.getElementById("erremail").style.display="block";
                document.getElementById("erremail").innerHTML="Please provide email";
            }else{
            
                $.ajax({
                    method : "GET",
                    data: {
                        email:email
                    },
                    cache : false,
                    url:"savenewsletter",
                    success: function(data){
                       if (data.success == true) {
                            $("#msg").addClass("clrmsg");
                            $('#msg').html(data.message);
                            jQuery("div#msg").delay(3000).fadeOut("fast");
                            $('#email').val("");


                            //$('#email').removeAttr('value');
                        }
                        
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        alert("Error: " + errorThrown);
                    }
                    
            
                });
            }
    });  

                /*$(document).on('submit',function (e) {

                    e.preventDefault();
                    
                    $.ajaxSetup({
                        headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                      });

                    var email = $('#email').val();
                    var token = $('input[name=_token]').val();
                    alert(email);
                    $.ajax({
                        type: "POST",
                        cache : false,
                        url: "savenewsletterajax",
                        contentType: false,
                        processData: false,
                        data: {
                            email:email,
                            _token: token 
                        },
                        success: function(data) {
                            alert(data.success);
                            if (data.success == 'true') {
                                $('#msg').html(data.message);
                            }
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            alert("Error: " + errorThrown);
                        }
                    });

                });*/

        });

// $(document).ready(function(){
//     alert("jjj");
// });


// function getMessage(){
//     alert("ajax");
//     var email   =   $('#email').val(); 
//     alert(email);
//     var base_url = {!! json_encode(url('/')) !!};
//     var finalUrl = base_url+'/Frontend/savenewsletter';
//     alert(finalUrl);
//     $.ajax({
//        type:'POST',
//        url:'/getmsg',
//        //data:'_token = <?php echo csrf_token() ?>',
//        success:function(data){
//            alert(data.msg);
//           //$("#msg").html(data.msg);
//        }
//     });
//  }
// $(document).ready(function(){
//     $(document).on('submit',function (e) {

//         e.preventDefault(); 
//         var email   =   $('#email').val(); 
//         var url     =   $('#frm').attr("action");
//         //alert(host);
//         alert(email);
//         alert(url);

//     //     var form = $(this);
//     // var data = new FormData($(this)[0]);

//     // var url = form.attr("action");

//         $.ajax({
//             type: "POST",
//             url: url,
//             data: data,
//             success: function(data) {
//                 //alert( data );
//                 $('div.flash-message').html(data);
//             } 
//         });
//     });
// });
/*
$(document).on('submit', 'form#frmnewsletter', function (e) {
    //alert("hggghh");
        e.preventDefault(); 

        var email = $('#email').val();
        alert(email);
        $.ajax({
            type: "GET",
            cache : false,
            url: "savenewsletter",
            data: {
                "email":email 
            },
            success: function(data) {
                alert(data.success);
                if (data.success == 'true') {
                    $('#msg').html(data.message);
                }
            },
            error: function(data){
                alert("error");
            }
        }); 
    }); 
*/
    

/*function validation(){ 
    //alert("kk");
    f=1;
    document.getElementById("err_email").style.display="none";
    email          = document.getElementById("email").value;
    if(email == ""){
        
        f=0;
        document.getElementById("err_email").style.display="block";
        document.getElementById("err_email").innerHTML="Please provide email";
    }
    else{
        chk = chkemail(email);
        if(chk == 0){
            //alert(chk);
            f=0;
            document.getElementById("err_email").style.display="block";
            document.getElementById("err_email").innerHTML="Please provide valid email";
        }
    }

    function chkemail(email){
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        //return re.test(String(email).toLowerCase());
        if (re.test(email)) {
            return 1;
        }
        else {
            return 0;  
        }
 
    }
}*/


