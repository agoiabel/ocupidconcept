@extends('partials.frontLayout')
@section('content')

<!-- Page Content
================================================== -->
<div id="body-content">	

	<!-- Section: Mini Hero -->
	<div class="section-mini-hero" style="background-image: url('includes/img/hero12.jpg');">
		<div class="container">
			<h2 class="title2 mini-hero-subtitle">The essence of our office</h2>
			<h1 class="title1 mini-hero-title">Ocupid Architecture</h1>
		</div>
	</div>
	<!-- /Section: Mini Hero -->

	<!-- SECTION: About  -->
	<div class="container-fluid section-about">
		<div class="row">
			<!-- Left Column -->
			<div class="col-sm-6">
				<div class="about-picture" id="about-picture">
					<img src="{{asset('/includes/img/tobi.jpg')}}"  alt="" class="responsive-image" /></a>
				</div>
			</div>			
			<!-- /Left Column -->
			<!-- Right Column -->
			<div class="col-sm-6"> 
				<div class="about-text" id="about-text">
					<h1 class="title1">Who we Are</h1>
					<p>Open Consultant Universal Invention Design/architecture performs architectural design, 
					urban planning,	recovery and restoration and industrial design for different activity sectors: residential and residential complexes, shops, restaurants, industries, buildings for recreation and public and institutional use.</p>
					<p>We seek an architecture created from deep connection with Creating Global universal Standard In design Homes, Productive  Development  Relevant to the Society, 
					Our Visions include Creating and Making Media Industry World Class, Innovating the World of Interior & External Works.
					To give first class delivery in our services, To Empower the youth in Skills and Productiveness.

				</div>
			</div>
			<!-- /Right Column -->
		</div>
	</div>
	<!-- / SECTION: About  -->

	<!--  SECTION: Counters  -->
	<div class="section-counters">
		<div class="container">
			<div class="row">
				<!-- item -->
				<div class="col-sm-3">
					<!-- item content-->
					<div class="counter-item">
						<div class="counter-item-title" id="counter-item-title1"></div>
						<div class="counter-item-subtitle">Finished projects</div>
					</div>
					<!-- /item content-->
				</div>
				<!-- /item -->
				<!-- item -->
				<div class="col-sm-3">
					<!-- item content-->
					<div class="counter-item">
						<div class="counter-item-title" id="counter-item-title2">168</div>
						<div class="counter-item-subtitle">Happy customers</div>
					</div>
					<!-- /item content-->
				</div>
				<!-- /item -->
				<!-- item -->
				<div class="col-sm-3">
					<!-- item content-->
					<div class="counter-item">
						<div class="counter-item-title" id="counter-item-title3">222</div>
						<div class="counter-item-subtitle">Working hours</div>
					</div>
					<!-- /item content-->
				</div>
				<!-- /item -->
				<!-- item -->
				<div class="col-sm-3">
					<!-- item content-->
					<div class="counter-item">
						<div class="counter-item-title" id="counter-item-title4">90</div>
						<div class="counter-item-subtitle">Partnerships in the Word</div>
					</div>
					<!-- /item content-->
				</div>
				<!-- /item -->
			</div>
		</div>
	</div>
	<!--  /SECTION: Counters  -->

	<!-- SECTION: Features -->
	<div class="section-features fixed-bg1">
		<div class="container">
			<!-- Section Title -->
			<h2 class="title2 title-border title-section">WHAT WE DO</h2>
			<!-- /Section Title -->		
			<!-- /Title Row -->
			<!-- Features -->
			<div class="row">				
				<!-- item -->
				<div class="col-sm-3 feature-item">
					<div class="feature-icon">
						<img src="{{asset('/includes/img/about-ico1.png')}}"  alt="" />
					</div>
					<h2 class="feature-title">Architecture</h2>
					<div class="feature-description">
						<p>Projects with concept.</p>
					</div>
				</div>
				<!-- /item -->
				<!-- item -->
				<div class="col-sm-3 feature-item">
					<div class="feature-icon">
						<img src="{{asset('/includes/img/about-ico3.png')}}"  alt="" />
						
					</div>
					<h2 class="feature-title">Consulting</h2>
					<div class="feature-description">
						<p>Our know-how at your disposal</p>
					</div>
				</div>
				<!-- /item -->
				<!-- item -->
				<div class="col-sm-3 feature-item">
					<div class="feature-icon">
						<img src="{{asset('/includes/img/about-ico2.png')}}"  alt="" />
					
					</div>
					<h2 class="feature-title">Interior Design</h2>
					<div class="feature-description">
						<p>Unique and conceptual environments</p>
					</div>
				</div>
				<!-- /item -->
				<!-- item -->
				<div class="col-sm-3 feature-item">
					<div class="feature-icon">
						<img src="{{asset('/includes/img/about-ico4.png')}}"  alt="" />
						
					</div>
					<h2 class="feature-title">Product Design</h2>
					<div class="feature-description">
						<p>Great and exclusive products</p>
					</div>
				</div>
				<!-- /item -->
			</div>
			<!-- /features -->	
		</div>
	</div>
	<!-- /SECTION: Features -->	

	

	
	<!-- Section: Call to Action-->
		<div class="section-cta">
			<div class="container">
				<div class="section-cta-content">
					<div class="row">
						<div class="col-sm-7">
							<p class="cta-text1"><img src="{{asset('/includes/img/archtect-icon.png')}}"  alt="" class="cta-ico" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Already looked at our projects?</p>
						</div>
						<div class="col-sm-5 text-right">
							<a href="/" class="btn btn-mini click-fade"><span class="fa fa-home"></span>&nbsp; see projects</a>
							<a href="/contact" class="btn btn-mini click-fade"><span class="fa fa-paper-plane"></span> &nbsp;Get in Touch</a>
						</div>
					</div>
				</div>			
			</div>
		</div>
	<!-- /Section: Call to Action -->

@endsection