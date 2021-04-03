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
                    <table class="table table-responsive table-bordered table-hover table-striped text-center">
                        <tr>
                            <td>Profile Picture</td>
                            <td><img class="profile-user-img img-fluid img-circle"
                                src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image): url('upload/noImage.jpg')}}"
                                alt="{{ $user->name }}" style="height: 100px; width: 100px;"></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td>{{ $user->number }}</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>{{ $user->gender }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="{{ route('edit.profile') }}" class="btn btn-primary btn-block"><b>Edit Profile</b></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
	</section>

@endsection



