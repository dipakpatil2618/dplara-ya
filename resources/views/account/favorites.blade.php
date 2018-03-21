@extends('layouts.app')

@section('content')


<div class="container">
 @include('account-header')
 
 <div id="dashboard">
    <div class="container">
    	<h5>FAVORITES</h5>
        <div class="row tabbg" >
        		<table style="width: 100%"  class="table">
                        <thead>
                        <tr>
                            <th>PROPERTY</th>
                            <th>DATE / TIME ADDED</th>
                            <th>REMOVE</th>
                           
                        </tr>
                    </thead>
                   <tr>
                   	<td>1-0 of 0 Listings</td>
                   	<td></td>
                   	<td></td>
                   	
                   </tr>
               </table>
        </div>
    </div>
</div>
</div> 
<script type="text/javascript">

jQuery(document).ready(function () {
 	 	jQuery(".nav-link").removeClass("active");//this will remove the active class from  
  	  jQuery('#fav').addClass('active');
});

</script>  
@endsection