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
                <section class="content">
                          <div class="card">
                            <div class="card-header">
                              <h3>
                                <i class="fa fa-user mr-1 text-info"></i>
                                Profile
                                <a href="{{ route('dashboard') }}" class="btn btn-info float-right " style="float: right;"><i class="fa fa-list fa-xs ml-1 mr-1"></i> View Profile</a>
                              </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('store.profile',$user->id) }}" method="post" enctype="multipart/form-data" id="myForm" name="regstr">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" value="{{ $user->name }}" class="form-control" name="name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="address">Address</label>
                                            <input type="text" id="address" value="{{ $user->address }}" class="form-control" name="address">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="gender">Gender</label>
                                            <div class="col-sm-12 form-control">
                                              <input type="radio" name="gender" id="gender" value="Male"  {{ ($user->gender=="Male")?"checked":"" }}> Male
                                              <input type="radio" name="gender" id="gender" value="Female"  {{ ($user->gender=="Female")?"checked":"" }}> Female
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <img src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image): url('upload/noImage.jpg')}}" id="showImage" style="height: 150px; width: 150px; border: 1px solid black;" alt="">
                                          </div>
                                      <div class="form-group col-md-4">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control" name="image">
                                      </div>


                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" value="Update Profile" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                  </section>

            </div>
        </div>
	</section>

@endsection



