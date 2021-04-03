@extends('frontend.layouts.master')
@section('content')
<!-- About us Section -->
	<section class="aboutus" style="min-height: 350px;">
        <div class="row">
            <div class="col-sm-3">
                <div class="list-group">
                  <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action active">
                        <i class="fa fa-dashboard"></i>
                         Dashboard
                  </a>
                  <a href="{{ route('edit.profile') }}" class="list-group-item list-group-item-action"><i class="fa fa-edit"></i> Edit Profile</a>
                  <a href="" class="list-group-item list-group-item-action"><i class="icon fa fa-heart"></i> Wishlist</a>
                  <a href="{{ route('shopping.cart') }}" class="list-group-item list-group-item-action "><i class="icon fa fa-shopping-cart"></i> My Cart</a>
                  @if (@Auth::user()->id != NULL)
                  <a href="{{ route('checkout') }}" class="list-group-item list-group-item-action "><i class="icon fa fa-check"></i> Checkout</a>
                  @else
                  <a href="{{ route('cstmr.login') }}" class="list-group-item list-group-item-action "><i class="icon fa fa-check"></i> Checkout</a>
                  @endif
                    <a href="" class="list-group-item list-group-item-action "><i class="fa fa-area-chart"></i> All Orders</a>
                    <a href="{{ route('resetget.profile') }}" class="list-group-item list-group-item-action "><i class="fa fa-edit"></i> Reset Password</a>
                    <a href="{{ route('logout') }}" class="list-group-item list-group-item-action " onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon fa fa-lock"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                </div>
            </div>
            <div class="col-sm-9" style="margin-bottom: 5px;">
                <div class="content">
                    <form action="{{ route('reset.profile') }}" method="post" id="myForm" name="reset">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="password">Current Password</label>
                                <input type="password" id="p_password"  class="form-control" name="password">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="n_password">New Password</label>
                                <input type="password" id="password1"  class="form-control" name="password1">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="c_password">Confirm Password</label>
                                <input type="password" id="password2"  class="form-control" name="password2">
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Reset Password" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</section>

@endsection



