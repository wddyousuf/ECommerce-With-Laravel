@extends('frontend.layouts.master')
@section('content')
<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-6 col-sm-6 sign-in">
                    @if (Session::get('message'))
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dissmiss="alert">&times;</button>
                            <strong>{{ Session::get('message') }}</strong>
                    </div>
                    @endif
                    <h4 class="">Sign in</h4>
                    <p class="">Hello, Welcome to your account.</p>
                    <div class="social-sign-in outer-top-xs">
                        <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
                        <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
                    </div>
                    <form class="register-form outer-top-xs" role="form" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="email">Email Address <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" id="email" name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="password">Password <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input" id="password" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="radio outer-xs">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
                            </label>
                            <a href="#" class="forgot-password pull-right">Forgot your Password?</a>
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                    </form>
                </div>
                <!-- Sign-in -->
                <div class="col-md-6">
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
                <!-- create a new account -->
                <div class="col-md-6 col-sm-6 create-new-account">
                    <h4 class="checkout-subtitle">Create a new account</h4>
                    <p class="text title-tag-line">Create your new account.</p>
                    <form class="register-form outer-top-xs" role="form" action="{{ route('cstmr.signup') }}" method="POST" id="myForm">
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
                            <label class="info-title" for="password1">Password <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input" id="password1" name="password1">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="password2">Confirm Password <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input" id="password2" name="password2">
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
                    </form>


                </div>
                <!-- create a new account -->            </div><!-- /.row -->
        </div><!-- /.sigin-in-->
</div><!-- /.body-content -->
@endsection
