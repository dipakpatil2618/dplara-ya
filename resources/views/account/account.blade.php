@extends('layouts.app')

@section('content')


<div class="container">
 @include('account-header')


<div id="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 demographics">
                <h3>  {{ Auth::user()->first_name.' '.Auth::user()->last_name }}</h3>
                <p>
                                    <a href="mailto:dipakpatil2618@gmail.com" class="my-email" title="dipakpatil2618@gmail.com">  {{ Auth::user()->email }}</a>

                    <a href="<?php echo URL::to("/")?>/account/settings" class="btn btn-default" title="Edit My Information">Edit My Information</a>
                </p>
            </div>
            <div class="col-lg-5 favorites">
                <div class="row">
                    <div class="col-xs-6 heart">
                        <strong>Favorites</strong> <a href="<?php echo URL::to("/")?>/account/favorites" title="0 Favorites">0</a>
                    </div>
                    <div class="col-xs-6 list">
                        <strong>Saved Searches</strong> <a href="<?php echo URL::to("/")?>/account/saved-searches" title="0 Saved Searches">0</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 pie">
                        <strong>Quarterly Stats</strong> <a href="<?php echo URL::to("/")?>/account/saved-searches" title="0 Quarterly Reports">0</a>
                    </div>
                    <div class="col-xs-6 chart">
                        <strong>CMA Rerports</strong> <a href="<?php echo URL::to("/")?>/account/cma-reports" title="0 CMA Reports">0</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 agent-details">
                <div class="my-agent">
                    <h4>Your Agent</h4>
                    <div class="thumbnail-wrapper">
                        <img src="<?php echo URL::to("/")?>/img/aimeebrayman_web.jpg" alt="/media/1520/aimeebrayman_web.jpg" class="agent-image">
                    </div>
                    <div class="my-agent-content">
                        <span class="my-agent-name"> </span>
                        <span class="my-agent-title">Broker Associate</span>
                            <a href="tel:3039036211" class="my-agent-phone">303.903.6211</a>
                        <a href="mailto:aimeebrayman@porchlightgroup.com" class="my-agent-email">aimeebrayman@porchlightgroup.com</a>
                        <a href="#" class="my-agent-link btn-contact-modal" data-inquiry="2" data-agent-id="55789">Contact Agent »</a>
                        <a href="#" class="my-agent-link my-agent-page">View Agent Page »</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>   
@endsection