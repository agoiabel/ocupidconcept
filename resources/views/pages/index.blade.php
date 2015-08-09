@extends('partials.frontLayout')

@section('content')
<div id="body-content">	

	<!-- HERO intro -->
	<div class="section-hero" style="background-image: url('includes/img/hero1.jpg');">
		<div class="hero-slide-wrapper hero-intro">
			<div class="container">
				<!-- Hero title -->
				<h1 class="title1 hero-title">We are <strong>Ocupid</strong></h1>	
				<!--/ Hero title -->
				<!-- Hero sub-title -->
				<h2 class="title2 hero-subtitle">An Architecture Office based in Nigeria, Abakaliki, Lagos</h2>	
				<!-- /Hero sub-title -->
				<!-- Hero content -->
				<div class="hero-content">
					<a href="/about" class="btn btn-default" target="_blank">About Us</a> <a href="/blog" class="btn btn-default click-fade">Vist Our Blog</a>
				</div>		
				<!-- /Hero content -->				
			</div>
		</div>		
		<!-- Background Slides -->
		<div class="hero-slide" id="hero-slide">
			<!-- item -->	
			<div class="hero-slide-item">
				<div class="hero-slide-item-bg">
				<img src="{{asset('/includes/img/hero7.jpg')}}"  alt="" /></a>
				</div>								
			</div>	
			<!-- /item -->	
			<!-- item -->
			<div class="hero-slide-item">				
				<div class="hero-slide-item-bg">
					<img src="{{asset('/includes/img/hero1.jpg')}}"  alt="" /></a>
				</div>								
			</div>	
			<!-- /item -->	
			<!-- item -->	
			<div class="hero-slide-item">
				<div class="hero-slide-item-bg">
					<img src="{{asset('/includes/img/hero2.jpg')}}"  alt="" /></a>
				</div>								
			</div>	
			<!-- /item -->				
			<!-- item -->	
			<div class="hero-slide-item">
				<div class="hero-slide-item-bg">
					<img src="{{asset('/includes/img/hero4.jpg')}}"  alt="" /></a>
					
				</div>								
			</div>	
			<!-- /item -->					
		</div>		
		<!-- Background Slides -->
	</div>
	<!-- /Hero INTRO -->

	<!-- Section: Projects -->
	<div class="section-projects section-projects-home">
		<div class="container">			
			<div class="row">
				<div class="col-sm-1 title-rotate-wrapper">
					<h2 class="title-rotate">Recent Projects</h2>
				</div>
				<div class="col-sm-11 project">
					<!-- Projects list -->
					<div class="projects-list" id="projects-filter">
						<!-- item -->
						@foreach($projects as $project)
						<div class="project-item cat-cultural cat-featured">
							<a href="/" class="project-thumbnail click-fade" style="background-image: url({{$project->image}});">
								<!-- project-description -->
								<div class="project-description-wrapper">
									<div class="project-description">
										<!-- project name -->
										<h2 class="project-title">{{$project->title}}</h2>
										<!-- /project name -->
										<span class="see-more">{{$project->category}}</span>
									</div>
								</div>
								<!-- /project-description -->
							</a>
						</div>
						@endforeach
					</div>
					<!-- /projects list -->	
				</div>
			</div>				
		</div>
	</div>	
	<!-- /Section: Projects -->

	<!-- Section: Call to Action-->
	<div class="section-cta">
		<div class="container">
			<div class="section-cta-content">
				<div class="row">
					<div class="col-sm-7">
						<p class="cta-text1">
						<img src="{{asset('/includes/img/archtect-icon.png')}}"  alt="" class="cta-ico"/></a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Go ahead and find out how we can help you!</p>
					</div>
					<div class="col-sm-5 text-right">
						<a href="/contact" class="btn btn-mini click-fade"><span class="fa fa-home"></span>&nbsp; Meet our office</a>
						<a href="/sample" class="btn btn-mini click-fade"><span class="fa fa-paper-plane"></span> &nbsp;See Our Samples</a>
					</div>
				</div>
			</div>			
		</div>
	</div>
	<!-- /Section: Call to Action -->

@endsection