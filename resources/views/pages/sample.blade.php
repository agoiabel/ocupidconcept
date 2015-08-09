@extends('partials.frontLayout')
@section('content')

<!-- Page Content
================================================== -->
<div id="body-content">	

	<!-- Section: Mini Hero -->
	<div class="section-mini-hero" style="background-image: url('includes/img/hero9.jpg');">
		<div class="container">
			<h2 class="title2 mini-hero-subtitle">made with passion</h2>
			<h1 class="title1 mini-hero-title">Our Work Samples</h1>
		</div>
	</div>
	<!-- /Section: Mini Hero -->

	<!-- Categories -->
	<div class="section-categories">
		<div class="container" id="projects-filter-header">
			<span class="section-categories-title">Filter: </span>
			<a href="#" class="category-item" data-filter="project-item">All</a>
			<a href="#" class="category-item" data-filter="cat-featured">Color</a>
			<a href="#" class="category-item" data-filter="cat-cultural">Wall Padding</a>
			<a href="#" class="category-item" data-filter="cat-business">Flooring</a>
			<a href="#" class="category-item" data-filter="cat-business">Ceiling</a>
		</div>
	</div>
	<!-- Categories -->

	<!-- Section: Projects -->
	<div class="section-projects">
		<div class="container">
			<!-- Projects list -->
			<div class="projects-list row" id="projects-filter">
				@foreach($samples as $sample)
				<!-- item -->
				<div class="project-item cat-cultural cat-featured">
					<a href="single-project.html" class="project-thumbnail click-fade" style="background-image: url({{$sample->image}});">
						<!-- project-description -->
						<div class="project-description-wrapper">
							<div class="project-description">
								<!-- project name -->
								<h2 class="project-title">{{$sample->title}}</h2>
								<!-- /project name -->
								@foreach($sample->categories as $category)
									<span class="see-more">{{$category->name}}</span>
								@endforeach
							</div>
						</div>
						<!-- /project-description -->
					</a>
				</div>
				<!-- /item -->
				@endforeach
			</div>
			<!-- /projects list -->		
		</div>
	</div>	
	<!-- /Section: Projects -->

	<!-- Pagination -->
		<div class="container">
			<div class="section-pagination">
				<div class="row">
					<div class="col-xs-4">
						<a href="#"><span class="fa fa-angle-double-left"></span>&nbsp;&nbsp; Previous</a>
					</div>
					<div class="col-xs-4 text-center">
						<span class="pagination-numbers">
							<?php echo $samples->render(); ?>
						</span>
					</div>
					<div class="col-xs-4 text-right">
						<a href="#">Next&nbsp;&nbsp;<span class="fa fa-angle-double-right"></span></a>
					</div>	
				</div>								
			</div>
		</div>
		<!-- /Pagination -->
@endsection