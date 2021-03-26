<!DOCTYPE html>
<html>
<head>
	<title>Just Chill</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/frontend') }}/CSS/customize.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- Header Section -->
	<section class="header">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-light">
				<a href="" class="navbar-brand"><img src="{{ asset('/assets/frontend') }}/image/logo.png" class="logodesign"></a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
					<div class="navbar-nav font-navbar">
						<a href="{{ route('hmpg') }}" class="nav-item nav-link active">Home</a>
						<div class="nav-item dropdown">
							<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
							<div class="dropdown-menu bg-dropdown">
								<a href="{{ route('about') }}" class="dropdown-item">About Us</a>
								<a href="" class="dropdown-item">Mission</a>
								<a href="" class="dropdown-item">Vision</a>
							</div>
						</div>
						<a href="" class="nav-item nav-link active">News & Events</a>
						<a href="{{ route('contact') }}" class="nav-item nav-link active">Contact Us</a>
						<a href="{{ route('login') }}" class="nav-item nav-link active">Login</a>
					</div>
					<div class="navbar-nav">
						<form class="form-inline">
							<div class="input-group">
								<input type="text" name="search" placeholder="Search">
								<div class="input-group-append">
									<button type="button" class="btn btn-secondary">
										Search
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</nav>
		</div>
	</section>
	<!-- Banner Section -->
	<section class="banner_part">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img src="{{ asset('/assets/frontend') }}/image/img2.jpg">
				</div>
			</div>
		</div>
	</section>
	<!-- News & Events Details -->
		<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-danger">
                        <u>News and Events </u>
                    </h1>
                </div>
            </div>
			<div class="row">
                <div class="col-sm-3">
                    <img src="{{ url('upload/news/'.$data->image) }}" alt="{{ $data->title }}" class="images mt-3 mb-3">
                </div>
				<div class="col-md-9">
					<h2 class="about_h2">
						{{ $data->title}}
					</h2>
                    <p>Date: {{ date('d-m-Y',strtotime($data->date)) }}</p>
					<p>
						{{ $data->description }}
					</p>
				</div>
			</div>
        </div>
	</section>

	<!-- footer Section -->
	<section class="footer_part">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h3 class="footer_h3">
						Contact Us
					</h3>
					<p class="footer_p">Address: Zonaid Palli,Homeopathy Mor,Shalgaria,Pabna-6600, Mobile: 01857938869,01521309208, Email: Saikatyousuf@gmail.com</p>
				</div>
				<div class="col-md-4">
					<h3 class="footer_h3">Follow Us</h3>
					<div class="social">
						<ul>
							<li>
								<a href="https://www.facebook.com/ysaikat" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="https://www.youtube.com/watch?v=Hqd8dZrw5bg&list=PLbGui_ZYuhigFdLdbSI2EM2MrJB7I0j-B" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p class="copy_p">Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear())</script> @Md. Yousuf Hossain</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="gototop">
						<img src="{{ asset('/assets/frontend') }}/image/top1.png">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
				if($(this).scrollTop()>450){
					$('.gototop').fadeIn();
				}else{
					$('.gototop').fadeOut();
				}
			});
			$('.gototop').click(function(){
				$('html,body').animate({scrollTop:0},1500);
			});
		});
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
