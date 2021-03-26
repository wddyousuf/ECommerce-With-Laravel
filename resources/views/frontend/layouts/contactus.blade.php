@extends('frontend.layouts.master')
@section('content')
<section class="aboutus">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2 class="about_h2">
                    Send us a Message
                </h2>
                @if (Session::get('success'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>{{ Session::get('success') }}</strong>
                    </div>
                @endif
                <form method="POST" action="{{ route('client.message') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">
                                Name <span class="form_span">*</span>
                            </label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Write your name..." required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">
                                Email <span class="form_span">*</span>
                            </label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email..." required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mobile_no">
                                Mobile No <span class="form_span">*</span>
                            </label>
                            <input type="text" name="mobile_no" id="mobile_no" class="form-control" placeholder="+8801700000000" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">
                                Address <span class="form_span">*</span>
                            </label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Enter your current Address..." required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="message">
                                Message <span class="form_span">*</span>
                            </label>
                            <textarea name="message" id="message" class="form-control" placeholder="Enter your message here..." rows="5" required></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <h2 class="about_h2_location">
                    Office Location
                </h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1438.7569277024272!2d90.55266441352192!3d24.67740459175073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37565975c6b87b3f%3A0x7b0cd07b6c42b0e6!2z4KaX4Ka-4Kas4KawIOCmrOCni-Cnn-CmvuCmsuCngCDgpq7gp4vgp5zgp4fgprAg4Kas4Ka-4Kac4Ka-4Kaw!5e0!3m2!1sen!2sbd!4v1602398882671!5m2!1sen!2sbd" width="470" height="391" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>

@endsection


















