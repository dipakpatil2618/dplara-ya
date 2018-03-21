@extends('layouts.app')

@section('content')


<div class="container">
 @include('account-header')
 <div id="dashboard">
    <div class="container">
        <h5>CMS REPORTS</h5>
        <div class="row tabbg">
        		<table style="width: 100%"  class="table">
                        <thead>
                        <tr>
                            <th>NAME</th>
                            <th>DATE POSTED</th>
                            <th>VIEW REPORT</th>
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
  	  jQuery('#cma').addClass('active');
});

</script>  
@endsection