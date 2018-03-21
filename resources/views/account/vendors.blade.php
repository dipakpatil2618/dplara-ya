@extends('layouts.app')

@section('content')


<div class="container">
 @include('account-header')
<div id="dashboard">
    <div class="container">
        <div class="row">
        	<h1> Vendors list goes here.. </h1>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">

jQuery(document).ready(function () {
 	 	jQuery(".nav-link").removeClass("active");//this will remove the active class from  
  	  jQuery('#vendors').addClass('active');
});

</script>   
@endsection