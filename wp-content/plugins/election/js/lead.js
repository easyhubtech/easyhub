  function lead_info_submit(response) {

          jQuery(document).ready(function($) {
            var name= jQuery('#name').val();
            var email= jQuery('#email').val();
            var phone= jQuery('#phone').val();
            var response = grecaptcha.getResponse();
            //recaptcha validation
            if (response.length == 0) {
              $('#html_element_error').html("Verify Yourself");
              return false;
            }
            else {
              $('#html_element_error').empty();
            }
              /*******************validation********************/

              if( name=='' ) {
                  $('#name_error').html("Name Could not Be Blank.");
                  return false;
                }else{
                  $('#name_error').empty();
                }
              if( email == '' ) {
                $('#email_error').html("Email Could not Be Blank.");
                return false;
              }else {
                $('#email_error').empty();
              }

              var atpos = email.indexOf("@");
              var dotpos = email.lastIndexOf(".");
              if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
                  $('#email_id_not_valid_error').html("Email Not Valid");
                  return false;
              }else{
                  $('#email_id_not_valid_error').empty();
              }

              if( phone == '' ) {
                $('#phone_error').html("Contact No Could not Be Blank.");
                return false;
              }else {
                $('#phone_error').empty();
              }
              var ajaxurl = 'https://' + window.location.host + '/wp-admin/admin-ajax.php';

               // This does the ajax request
               $.ajax({
                   url: ajaxurl,
                   dataType: 'json',
                   data : {	'action':'lead_action',
          					 				'name':$("#name").val(),
          				 					'email':$("#email").val(),
          									'phone':$("#phone").val(),
                            'message':$("#message").val(),
          									'product_id':$("#product_id").val(),
                            'product_name':$("#product_name").val(),
                            'product_code':$("#product_code").val(),
                            'product_retail_price':$("#product_retail_price").val(),
                            'product_wholsale_price':$("#product_wholsale_price").val(),
          								},

                       success:function(response) {
          							 if( response.res==1){
                         $('#message').show();
                         $("#lead_bl_form")[0].reset();
          						 }else{
          							 alert('Error');
          						 }
                   },
                   error: function(){
                     alert("There is some error buddy");
                   }
               });

        });
  }
