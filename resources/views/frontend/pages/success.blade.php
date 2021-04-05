@extends('frontend.layouts.master')
@section('content')
                        <div class="body-content">
                            <div class="container">
                                <div class="checkout-box ">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="panel-group checkout-steps" id="accordion">
                                                <!-- checkout-step-01  -->
                                            <div class="text-center">
                                                <h2>Thank You For Choosing Us.</h2>
                                            <h5>We will confirm your orders very shortly.</h5>
                                            </div>

					</div><!-- /.checkout-steps -->
				</div>

                <div class="checkout-progress-sidebar col-md-4">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                            </div>
                            <div class="">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                    100%
                                    </div>
                                </div>
                                <ul class="nav nav-checkout-progress list-unstyled">
                                    <li><a href="#">Billing Address <i class="fa fa-check-circle"></i></a></li>
                                    <li><a href="#">Payment Method <i class="fa fa-check-circle"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
                                </div>
                            </div>


@endsection



