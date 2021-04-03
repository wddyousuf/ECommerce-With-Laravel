<!DOCTYPE html>
<html lang="en">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<title>Flipmart premium HTML5 & CSS3 Template</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('frontend/js')}}/jquery-1.11.1.min.js"></script>

<script src="{{ asset('/assets') }}/plugins/jquery-validation/jquery.validate.min.js"></script>
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
<style type="text/css">
    .notifyjs-corner{
        z-index: 10000 !important;
    }
    .avoid td{
        max-width: 150px;
    }
</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
<!-- Customizable CSS -->
<link rel="stylesheet" href="{{ asset('frontend') }}/css/main.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/css/blue.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/css/inputplus.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.transitions.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/css/rateit.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap-select.min.css">
<link href="{{ asset('frontend') }}/css/lightbox.css" rel="stylesheet">


<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.css">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">

@include('frontend.layouts.header')


<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row">


@yield('content')
    </div>
  </div>
</div>

@include('frontend.layouts.footer')
@if (session()->has('success'))
      <script type="text/javascript">
        $(function(){
            $.notify("{{ session()->get('success')}}",{globalPosition:'top right',className:'success' });
        });
      </script>
  @endif
  @if (session()->has('error'))
  <script type="text/javascript">
    $(function(){
        $.notify("{{ session()->get('error')}}",{globalPosition:'top right',className:'error' });
    });
  </script>
@endif


<!-- For demo purposes – can be removed on production -->

<!-- For demo purposes – can be removed on production  End -->

<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="{{asset('frontend/js')}}/bootstrap.min.js"></script>
<script src="{{asset('frontend/js')}}/bootstrap-hover-dropdown.min.js"></script>
<script src="{{asset('frontend/js')}}/owl.carousel.min.js"></script>
<script src="{{asset('frontend/js')}}/echo.min.js"></script>
<script src="{{asset('frontend/js')}}/jquery.easing-1.3.min.js"></script>
<script src="{{asset('frontend/js')}}/bootstrap-slider.min.js"></script>
<script src="{{asset('frontend/js')}}/jquery.rateit.min.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/lightbox.min.js"></script>
<script src="{{asset('frontend/js')}}/bootstrap-select.min.js"></script>
<script src="{{asset('frontend/js')}}/wow.min.js"></script>
<script src="{{asset('frontend/js')}}/scripts.js"></script>
</body>
<script>
    $(document).ready(function () {
        jQuery('<div class="quantity-nav"><button class="quantity-button quantity-up" type="button">&#xf106;</button><button class="quantity-button quantity-down" type="button">&#xf107</button></div>').insertAfter('.quantity input');
        jQuery('.quantity').each(function () {
          var spinner = jQuery(this),
              input = spinner.find('input[type="number"]'),
              btnUp = spinner.find('.quantity-up'),
              btnDown = spinner.find('.quantity-down'),
              min = input.attr('min'),
              max = input.attr('max');

          btnUp.click(function () {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
              var newVal = oldValue;
            } else {
              var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
          });

          btnDown.click(function () {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
              var newVal = oldValue;
            } else {
              var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
          });

        });
      });
</script>
<script>
    $(function () {
      $("#myForm").validate({
        rules: {
            email: {
                required: true,
                email: true,
          },
          password1: {
            required: true,
            minlength: 8,
          },
          password2: {
            required: true,
            equalTo: '#password1',
          },
          number:{
            required: true,
          },
          name:{
            required: true,
          },
        },
        messages: {
          email: {
            required: "Please enter a email address",
            email: "Please enter a vaild email address",
          },
          password1: {
            required: "Please provide a password",
            minlength: "Your password must be at least 8 characters long",
          },
          password2: {
            required: "Confirm Password Field is Required",
            equalTo: "Password doesn't match",
          },
          number: "Mobile Number is required",
          name: "Name is required",
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
    </script>
    <script>
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader =new FileReader();
                reader.onload=function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
</html>
