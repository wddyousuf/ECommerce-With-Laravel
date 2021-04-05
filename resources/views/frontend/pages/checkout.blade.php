@extends('frontend.layouts.master')
@section('content')
                        <div class="body-content">
                            <div class="container">
                                <div class="checkout-box ">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="panel-group checkout-steps" id="accordion">
                                                <!-- checkout-step-01  -->
                        <div class="panel panel-default checkout-step-01">

                            <!-- panel-heading -->
                                <div class="panel-heading">
                                <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                                    <span>1</span>Billing Information
                                    </a>
                                </h4>
                            </div>
                            <!-- panel-heading -->

                            <div id="collapseOne" class="panel-collapse collapse in">

                                <!-- panel-body  -->
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            @error('email')
                                            <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                            @error('mobile')
                                            <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                        <form action="{{ route('checkoutbill') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label class="info-title" for="email">Email Address <span>*</span></label>
                                                <input type="email" class="form-control unicase-form-control text-input" id="email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="name">Name <span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input" id="name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="number">Phone Number <span>*</span></label>
                                                <input type="number" class="form-control unicase-form-control text-input" id="number" name="number">
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="address">Address <span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input" id="address" name="address">
                                            </div>
                                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Next</button>
                                        </form>

                                    </div>
                                </div>
                                <!-- panel-body  -->

                            </div><!-- row -->
                        </div>
                        <!-- checkout-step-01  -->

					</div><!-- /.checkout-steps -->
				</div>
				<div class="col-md-4">
					<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">Your Checkout Progress</h4>
		    </div>
		    <div class="">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                      0%
                    </div>
                  </div>
				<ul class="nav nav-checkout-progress list-unstyled">
					<li><a href="#">Billing Address</a></li>
					<li><a href="#">Payment Method</a></li>
				</ul>
			</div>
		</div>
	</div>

</div>
<!-- checkout-progress-sidebar -->				</div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
@endsection



