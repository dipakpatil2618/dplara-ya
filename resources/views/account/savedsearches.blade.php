@extends('layouts.app')

@section('content')


<div class="container">
 @include('account-header')
        
<div id="dashboard">
    <div class="container">
    	<h5>SAVED SEARCH</h5>
        <div class="row tabbg">
        		<table style="width: 100%"  class="table">
                        <thead>
                        <tr>
                            <th>SEARCH NAME</th>
                            <th>ENABLE EMAIL ALERTS</th>
                            <th>ENABLE TEXT ALERTS</th>
                            <th>LOAD / MODIFY SEARCH</th>
                            <th>DISABLE</th>
                          </tr>
                    </thead>
                   <tr>
                   	<td><button>Start New search</button></td>
                   	<td></td>
                   	<td></td>
                   	
                   </tr>
               </table>
        </div>
        <h5>QUARTERLY STATS</h5>
        <div class="row tabbg" >
        		<table style="width: 100%"  class="table">
                        <thead>
                        <tr>
                            <th>CITY / NEIGHBORHOOD</th>
                            <th>RESEND EMAIL</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                   <tr>
                   	<td></td>
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
  	  jQuery('#search').addClass('active');
});

</script>   
@endsection