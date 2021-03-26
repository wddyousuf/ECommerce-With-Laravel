{{--  @extends('layouts.app')  --}}

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ '/inc.css' }}">
{{--  @section('content')  --}}
<div class="container">
    <div class="row">
     <div class="col-md-6 col-md-offset-3">
       <div class="panel panel-login">
         <div class="panel-body">
           <div class="row">
             <div class="col-lg-12">
               <form id="login-form" action="{{ route('login') }}" method="POST" style="display: block;">
                   @csrf
                 <h2>LOGIN</h2>
                   <div class="form-group">
                     <input type="email" name="email" id="email" tabindex="1" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" >
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                   </div>
                   <div class="form-group">
                     <input type="password" name="password" id="password" tabindex="2" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                     @error('password')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                     </div>
                   {{--  <div class="col-xs-6 form-group pull-left checkbox">
                     <input id="checkbox1" type="checkbox" name="remember">
                     <label for="checkbox1">Remember Me</label>
                   </div>
                     <div class="form-group row mb-0">
                     <div class="col-md-8 offset-md-4">
                         <button type="submit" class="btn btn-primary">
                             {{ __('Login') }}
                         </button>


                     </div>
                 </div>  --}}

                   <div class="col-xs-6 form-group pull-right">
                         <input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="Sign In">
                   </div>
                   <div class="col-xs-6 form-group pull-right">
                    @if (Route::has('password.request'))
                             <a class="btn btn-link" href="{{ route('password.request') }}">
                                 {{ __('Forgot Your Password?') }}
                             </a>
                         @endif
                    </div>

               </form>
           </div>
         </div>
       </div>
       {{--  <div class="panel-heading">
         <div class="row">
           <div class="col-xs-6 tabs">
             <a href="#" class="active" id="login-form-link"><div class="login">LOGIN</div></a>
           </div>
           <div class="col-xs-6 tabs">
             <a href="#" id="register-form-link"><div class="register">REGISTER</div></a>
           </div>
         </div>
       </div>  --}}
     </div>
   </div>
 </div>
 </div>
 <footer>
     <div class="container">
         <div class="col-md-10 col-md-offset-1 text-center">
             <h6 style="font-size:14px;font-weight:100;color: #fff;">Coded with <i class="fa fa-heart red" style="color: #BC0213;"></i> by <a href="http://www.facebook.com/ysaikat" style="color: #fff;" target="_blank">Md. Yousuf Hossain</a></h6>
         </div>
     </div>
 </footer>



{{--  @endsection  --}}
<script src="{{ '/inc.js' }}"></script>
