@extends('frontend.layouts.master')
@section('content')


    <div class='col-md-8 mt-2 mb-2'>
        <form action="{{ route('cstmr.verifyuser') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="info-title" for="email">Email:<span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="email" name="email" >
            </div>
            <div class="form-group">
                <label class="info-title" for="number">Verification Code:<span>*</span></label>
                <input type="number" class="form-control unicase-form-control text-input" id="code" name="code">
            </div>
            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Verify</button>
        </form>
    </div>
    <div class="clearfix"></div>
@endsection
