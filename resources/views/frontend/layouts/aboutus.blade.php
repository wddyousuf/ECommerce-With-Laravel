@extends('frontend.layouts.master')
@section('content')
<!-- About us Section -->
	<section class="aboutus" style="min-height: 350px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-danger">
						<u> About Us</u>
					</h2>
					<p>
                        {{ $about->about }}
					</p>
				</div>
			</div>
		</div>
	</section>

@endsection



