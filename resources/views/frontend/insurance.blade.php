@extends('frontend.layouts.app')
@section('content')        
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Insurance				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="insurance.html"> Insurance</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start insurence-one Area -->
			<section class="insurence-one-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 insurence-left">
							<img class="img-fluid img-one" src="{{asset('frontend')}}/img/insurence/i1.jpg" alt="">
						</div>
						<div class="col-lg-6 insurence-right">
							<h6 class="text-uppercase">Need to know</h6>
							<h1>Insurance for journey</h1>
							<p>
								Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
							</p>
							<div class="list-wrap">
								<ul>
									<li>Strategic approach towards redesigning brand.</li>
									<li>logo design strategy ensures a perfectly crafted
									logo for your business.</li>
									<li>Branding that stands out in the crowd.</li>
									<li>Modern and evergreen logo for your business.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End insurence-one Area -->

			<!-- Start insurence-two Area -->
			<section class="insurence-two-area pb-120">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 insurence-left">
							<h6 class="text-uppercase">Need to know</h6>
							<h1>Insurance for journey</h1>
							<p>
								Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
							</p>
							<div class="list-wrap">
								<ul>
									<li>Strategic approach towards redesigning brand.</li>
									<li>logo design strategy ensures a perfectly crafted
									logo for your business.</li>
									<li>Branding that stands out in the crowd.</li>
									<li>Modern and evergreen logo for your business.</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 insurence-right">
							<img class="img-fluid img-two" src="{{asset('frontend')}}/img/insurence/i2.jpg" alt="">
						</div>						
					</div>
				</div>	
			</section>
			<!-- End insurence-two Area -->

@endsection