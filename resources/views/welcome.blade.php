
@extends('layouts.master')

@section('content')

	

<!-- features list section -->

<div class="list-section pt-80 pb-80">
	<div class="container">

		<div class="row">
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-shipping-fast"></i>
					</div>
					<div class="content">
						<h3>now Free Shipping</h3>
						<p>When order over $100</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-phone-volume"></i>
					</div>
					<div class="content">
						<h3>24h /7d : Support</h3>
						<p>Get support all day everyday</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="list-box d-flex justify-content-start align-items-center">
					<div class="list-icon">
						<i class="fas fa-sync"></i>
					</div>
					<div class="content">
						<h3>Refund time</h3>
						<p>Get refund within 4 days!</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- end features list section -->


<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>enjoy shopping with us</p>
					</div>
				</div>
			</div>

			<div class="row">
                @foreach ($categories as $item)
                <div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/product/{{$item ->id}}">
                                <img src="{{url($item -> imagepath)}}"
                            style = "max-height:250px !important; min-height:250px !important"
                            alt=""></a>
						</div>
						<h3>{{$item -> name}}</h3>
						<p>{{$item -> discription}}</P>
					</div>
				</div>
                @endforeach

				

			</div>
		</div>
	</div>
 <!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> camera
                                </span>
                            </div>
                        </div>
                    	<img src="assets/img/f19.jpg" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Deal</span> of the month</h3>
                    <h4>4K ULTRAHD DIGITAL</h4>
                    <div class="text">64.00 MEGA PIXEL , WIFI CONNECTION, REMOTLY CONTROLED.....</div>
                    <!--Countdown Timer-->
                    <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2020/2/01">
						<div class="counter-column"><div class="inner"><span class="count">00</span>Days</div></div> 
						<div class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div> 
						<div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div> 
						<div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div></div></div>
                	<a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Since Year 2001</p>
						<h2>WE________ are <span class="orange-text">ALSALAM E-STORE</span></h2>
						<p><strong>credibility..... stability......honority.....essentially success keywords in our job duties...</strong> </p>
						<p>. daily positive action over the week</p>
						<a href="about.html" class="boxed-btn mt-4">know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->

@endsection