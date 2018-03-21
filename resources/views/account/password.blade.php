@extends('layouts.app')

@section('content')


<div class="container">
 @include('account-header')
<div id="dashboard">
    <div class="container">
         <h5>CHANGE PASSWORD</h5>
         <div>
         @if(session()->has('message.level'))
            <div class="alert alert-{{ session('message.level') }}"> 
                {!! session('message.content') !!}
            </div>
        @endif
        <p id="set-password-msg"></p>
        </div>
        <div class="row" style="background: #ccc;">
        		<form class="modal-form" id="form-account-password" method="POST">
                     {{ csrf_field() }}
        <div class="row">
            <div class="col-md-3">
                <div class="text-field required">
                    <label for="CurrentPassword">Current Password</label>
                    <input type="password" name="current_password" id="current_password" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-field validate-password required">
                    <label for="Password">Password</label>
                    <input type="password" name="new_password" id="new_password" required>
                    <sub>Minimum: 8+ characters with at least 1 capital, 1 number, and 1 special character.</sub>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-field validate-confirm-password required">
                    <label for="ConfirmPassword">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" required>
                </div>
            </div>
            <div class="col-xs-3">&nbsp;</div>
        </div>
        <a href="<?php echo URL::to("/")?>/password/reset" title="Forgot your password?">Forgot your password? »</a>
        <div class="buttons">
           <div class="row">
                <div class="col-xs-6 text-right">
                    <input type="submit" value="Save Changes" class="btn-default" onclick="return checkSetPasswordValidation()">
                </div>
                <div class="col-xs-6">
                    <input type="reset" value="Cancel" class="btn-default">
                </div>
            </div>
        </div>
    </form>
        </div>
    </div>
</div>
</div>   
<script type="text/javascript">

jQuery(document).ready(function () {
 	 	jQuery(".nav-link").removeClass("active");//this will remove the active class from  
  	  jQuery('#cpwd').addClass('active');
});

</script>
@endsection