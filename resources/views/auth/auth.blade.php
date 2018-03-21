<!-- login box -->
<div id="cd-login"> <!-- log in form -->
            <form class="cd-form" method="POST" action="{{ route('login') }}"  id="submitlogin">
                    <p id="error-msg"></p>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">E-mail</label>
                        <!-- <input class="" id="signin-email" type="email" placeholder="E-mail"> -->
                          <input id="signin-email" type="email" placeholder="E-mail" class="full-width has-padding has-border" name="email" value="{{ old('email') }}" required>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">Password</label>
                       <!--  <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password" required> -->
                        <input id="signin-password" type="password" class="full-width has-padding has-border" placeholder="Password"  name="password" required>
                        <a href="#0" class="hide-password">Show</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <!-- <p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Remember me</label>
                    </p> -->

                    <p class="fieldset">
                        <input class="full-width"  type="submit" value="Login"> 
                    </p>
                </form>
                
                <p class="cd-form-bottom-message"><a href="javascript:;" onclick="openForgot()">Forgot your password?</a></p>
                <!-- <a href="#0" class="cd-close-form">Close</a> -->
</div> <!-- cd-login -->

<!-- signup box -->
<div id="cd-signup"> <!-- sign up form -->
                <form class="cd-form" id="submitreg" >
                    <p id="error-msg-reg"></p>
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-firstname">First Name</label>
                        <input class="full-width has-padding has-border" id="first_name" name="first_name" type="text" placeholder="First Name" required>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-lastname">Last Name</label>
                        <input class="full-width has-padding has-border" id="last_name" name="last_name" type="text" placeholder="Last Name" required>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="email" type="email" name="email" placeholder="E-mail" required>
                    </p>

                     
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-phone">Phone Number</label>
                        <input class="full-width has-padding has-border"  id="phone1" type="text" name="phone1" placeholder="Phone" required>
                        <!-- 
                        <input class="full-width has-padding has-border" id="phone2" type="text" name="phone2" required>
                        <input class="full-width has-padding has-border" id="phone3" type="text" name="phone3"  required>     -->
                    </p>



                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" id="password" type="password" name="password"  placeholder="Password" required>
    <!--                         <span>Minimum: 8+ characters with at least 1 capital, 1 number, and 1 special character.</span> -->
                        <a href="#0" class="hide-password">Show</a>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Confirm Password</label>
                        <input class="full-width has-padding has-border" id="confirm-password" type="password" name="password_confirmation"  placeholder="Confirm Password" onblur="return checkConfirmPassword()" required>
                        <a href="#0" class="hide-password">Show</a>
                        <p id="confirm-password-msg" style="display:block"></p>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-agent" for="signup-agent">My Porch Light Agent</label>
                        <select class="full-width has-padding has-border form-control" id="porch_agent" type="text" name="porch_agent">
                            <option value="No Agent">I don't yet have a Porchlight Agent</option>
                            <option value="Aimee Brayman">Aimee Brayman</option>
                            <option value="Alish Jahns">Alish Jahns</option>
                        </select>
                    </p>
                   

                    <p class="fieldset">
                        <label for="accept-terms" class="accept-terms">By registering, you are agreeing to the terms of PorchLight Real Estate Group’s <a href="<?php echo URL::to("/")?>/privacy-legal">Privacy & Legal policies</a></label>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" id="submit" type="submit" value="Create account">
                    </p>
                </form>

                <!-- <a href="#0" class="cd-close-form">Close</a> -->
</div> <!-- cd-signup -->

<!-- reset password form -->
<div id="cd-reset-password"> 
                <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="reset-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Reset password">
                    </p>
                </form>

                <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
</div> <!-- cd-reset-password -->

