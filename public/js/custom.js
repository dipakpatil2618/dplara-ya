            $(document).ready(function() {
                $('#error-msg').hide();
                $('#submitlogin').on('submit', function (e) {
                    e.preventDefault();
                     var url = $('#url').val();
                      var token = $('#csrf-token').val();
                     var email = $('#signin-email').val();
                     var password = $('#signin-password').val();
                    $.ajax({
                        type: "POST",
                        dataType:"text",
                        url:url+"/login" ,
                        data: {email: email,password: password,_token:token},
                        success: function( msg ) {
                          window.location.href = url+"/account";
                        // location.reload();
                        },
                         error: function(e) {
                              var responseText = eval('(' + e.responseText + ')');
                                $('#error-msg').show();
                                $('#error-msg').html('<div class="alert alert-danger">'+responseText.errors.email[0]+'</div>');
                          }
                    });
                });

                $('#submitreg').on('submit', function (e) {
                    e.preventDefault();
                     var url = $('#url').val();
                     var token = $('#csrf-token').val();
                     var first_name = $('#first_name').val();
                     var last_name = $('#last_name').val();
                     var email = $('#email').val();
                     //var phone_number = $('#phone1').val()+$('#phone2').val()+$('#phone3').val();
                     var phone_number = $('#phone1').val();
                     var password = $('#password').val();
                     var password_confirmation = $('#confirm-password').val();
                     var porch_agent = $('#porch_agent').val();
                    $.ajax({
                        type: "POST",
                        dataType:"text",
                        url:url+"/register" ,
                        data: {first_name: first_name,last_name: last_name,email:email,phone_number:phone_number, password: password,porch_agent: porch_agent,_token:token, password_confirmation: password_confirmation},
                        success: function( msg ) {
                         window.location.href = url+"/account";
                        },
                         error: function(e) {
                            var responseText = eval('(' + e.responseText + ')');
                            var errorMsg = "";
                            if(typeof responseText !== "undefined"){
                                if(typeof responseText.errors.first_name !== "undefined"){
                                    errorMsg = responseText.errors.first_name[0]
                                }else if(typeof responseText.errors.last_name !== "undefined"){
                                    errorMsg = responseText.errors.last_name[0]
                                }else if(typeof responseText.errors.email !== "undefined"){
                                    errorMsg = responseText.errors.email[0]
                                }else if(typeof responseText.errors.password !== "undefined"){
                                    errorMsg = responseText.errors.password[0]
                                }
                            }
                            
                                $('#error-msg-reg').show();
                                $('#error-msg-reg').html('<div class="alert alert-danger">'+errorMsg+'</div>');
                          }
                    });
                });

            });
            function checkConfirmPassword(){
                var password = $('#password').val();
                var confirmPassword = $('#confirm-password').val();
                if(confirmPassword !== ""){   
                  $('#confirm-password-msg').hide();  
                  
                  if(confirmPassword !== password){
                        $('#confirm-password-msg').show();
                        $('#confirm-password-msg').html('<div class="alert alert-danger">Both Password not matched</div>');
                        return false
                  }
                  $('#confirm-password-msg').html('');
                  $("'#confirm-password-msg").css("display:none");
                  return true
                } 
            }


             function openForgot(){
                window.location.href = "/password/reset";
            }

               function checkSetPasswordValidation(){
              var regExp = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/
              var newPassword = $('#new_password').val();
              var confirmPassword = $('#confirm_password').val();
              if(!regExp.test(newPassword)){
                $('#set-password-msg').show();
                $('#set-password-msg').html('<div class="alert alert-danger">Minimum: 8+ characters with at least 1 capital, 1 number, and 1 special character.</div>');
                return false;
              }
              else if(newPassword !== confirmPassword){
                $('#set-password-msg').show();
                $('#set-password-msg').html('<div class="alert alert-danger">Both new Password not matched</div>');
                return false;
              }
              return true;
            }