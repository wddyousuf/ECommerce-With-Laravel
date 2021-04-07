@extends('frontend.layouts.master')
@section('content')



<div class='row single-product'>
    @include('frontend.layouts.sidebar')
    <div class='col-md-9' >
        <div class="" >
            <h3 class="text-primary" ><strong>Track Your Order</strong></h3>
        </div>
        <div class="col-md-4" style="margin-top: 20px;">
            <form action="{{ route('track.order') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="number">Mobile No</label>
                  <input type="number" class="form-control" name="number" id="number" placeholder="Mobile No">
                </div>
                <div class="form-group">
                  <label for="orderno">Order No</label>
                  <input type="text" class="form-control" name="order_no" id="orderno" placeholder="Order No">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
              </form>
        </div>
    </div>

    @if (@$status)
    <div>
        <h3 class="text-info" ><strong>Your Order Information</strong></h3>
    </div>
    @switch($status->status)
        @case('-1')
            <div style="margin-left: 600px; margin-top: 300px;">
                <h2 class="text-info">Ooops!!!Your Order is Cancelled.</h2>
            </div>
                @break
        @case('0')
            <div class="progress" style="margin-left: 600px; margin-top: 300px;">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                0%
                </div>
            </div>
            <div style="margin-left: 600px;" >
                <h2 class="text-info">Your Order is Pending for Approval.</h2>
            </div>
                @break
        @case('1')
        <div class="progress" style="margin-left: 600px; margin-top: 300px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
              25%
            </div>
          </div>
          <div style="margin-left: 600px;">
              <h2 class="text-info">Your Order is Approved.Waiting to Pick.</h2>
          </div>
            @break
        @case('2')
        <div class="progress" style="margin-left: 600px; margin-top: 300px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
              50%
            </div>
          </div>
          <div style="margin-left: 600px;">
              <h2 class="text-info">Your Order is Picked.Waiting to Ship.</h2>
          </div>
            @break
        @case('3')
        <div class="progress" style="margin-left: 600px; margin-top: 300px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
              75%
            </div>
          </div>
          <div style="margin-left: 600px;">
              <h2 class="text-info">Your Order is Shipped.Waiting to Deliver.</h2>
          </div>
            @break
            @case('4')
        <div class="progress" style="margin-left: 600px; margin-top: 300px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
              100%
            </div>
          </div>
          <div style="margin-left: 600px;">
              <h2 class="text-info">Your Order is Delivered.Thank You For Choosing Us.</h2>
          </div>
            @break
    @endswitch
    @endif
</div><!-- /.row -->
@endsection
