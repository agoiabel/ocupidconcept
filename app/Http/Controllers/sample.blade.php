@extends('partials.frontLayout')
@section('content')

<!-- Page Content
================================================== -->
<div id="body-content">	

	<!-- Section: Mini Hero -->
	<div class="section-mini-hero" style="background-image: url('img/hero9.jpg');">
		<div class="container">
			<h2 class="title2 mini-hero-subtitle">made with passion</h2>
			<h1 class="title1 mini-hero-title">Our Projects</h1>
		</div>
	</div>
	<!-- /Section: Mini Hero -->

	<!-- Categories -->
	<div class="section-categories">
		<div class="container" id="projects-filter-header">
			<span class="section-categories-title">Filter: </span>
			<a href="#" class="category-item" data-filter="project-item">All</a>
			<a href="#" class="category-item" data-filter="cat-featured">Featured</a>
			<a href="#" class="category-item" data-filter="cat-cultural">Cultural</a>
			<a href="#" class="category-item" data-filter="cat-business">Business</a>
		</div>
	</div>
	<!-- Categories -->

	<!-- Section: Projects -->
	<div class="section-projects">
		<div class="container">
			<!-- Projects list -->
			<div class="projects-list row" id="projects-filter">
				<!-- item -->
				<div class="project-item cat-cultural cat-featured">
					<a href="single-project.html" class="project-thumbnail click-fade" style="background-image: url('img/projects-thumb8.jpg');">
						<!-- project-description -->
						<div class="project-description-wrapper">
							<div class="project-description">
								<!-- project name -->
								<h2 class="project-title">Hillside Library</h2>
								<!-- /project name -->
								<span class="see-more">Cultural, Featured</span>
							</div>
						</div>
						<!-- /project-description -->
					</a>
				</div>
				<!-- /item -->
				<!-- item -->
				<div class="project-item cat-business">
					<a href="single-project.html" class="project-thumbnail click-fade" style="background-image: url('img/projects-thumb3.jpg');">
						<!-- project-description -->
						<div class="project-description-wrapper">
							<div class="project-description">
								<!-- project name -->
								<h2 class="project-title">Downtown Skyscraper</h2>
								<!-- /project name -->
								<span class="see-more">Business</span>
							</div>
						</div>
						<!-- /project-description -->
					</a>
				</div>
				<!-- /item -->
				<!-- item -->
				<div class="project-item cat-cultural">
					<a href="single-project.html" class="project-thumbnail click-fade" style="background-image: url('img/projects-thumb2.jpg');">
						<!-- project-description -->
						<div class="project-description-wrapper">
							<div class="project-description">
								<!-- project name -->
								<h2 class="project-title">Cultural Center</h2>
								<!-- /project name -->
								<span class="see-more">Cultural</span>
							</div>
						</div>
						<!-- /project-description -->
					</a>
				</div>
				<!-- /item -->
				<!-- item -->
				<div class="project-item cat-business cat-featured">
					<a href="single-project.html" class="project-thumbnail click-fade" style="background-image: url('img/projects-thumb4.jpg');">
						<!-- project-description -->
						<div class="project-description-wrapper">
							<div class="project-description">
								<!-- project name -->
								<h2 class="project-title">Birdnest Center</h2>
								<!-- /project name -->
								<span class="see-more">business, featured</span>
							</div>
						</div>
						<!-- /project-description -->
					</a>
				</div>
				<!-- /item -->
				<!-- item -->
				<div class="project-item cat-business">
					<a href="single-project.html" class="project-thumbnail click-fade" style="background-image: url('img/projects-thumb5.jpg');">
						<!-- project-description -->
						<div class="project-description-wrapper">
							<div class="project-description">
								<!-- project name -->
								<h2 class="project-title">Enterprise</h2>
								<!-- /project name -->
								<span class="see-more">business</span>
							</div>
						</div>
						<!-- /project-description -->
					</a>
				</div>
				<!-- /item -->
				<!-- item -->
				<div class="project-item cat-cultural cat-featured">
					<a href="single-project.html" class="project-thumbnail click-fade" style="background-image: url('img/projects-thumb6.jpg');">
						<!-- project-description -->
						<div class="project-description-wrapper">
							<div class="project-description">
								<!-- project name -->
								<h2 class="project-title">Ordos Museus</h2>
								<!-- /project name -->
								<span class="see-more">cultural, featured</span>
							</div>
						</div>
						<!-- /project-description -->
					</a>
				</div>
				<!-- /item -->
				<!-- item -->
				<div class="project-item cat-business">
					<a href="single-project.html" class="project-thumbnail click-fade" style="background-image: url('img/projects-thumb7.jpg');">
						<!-- project-description -->
						<div class="project-description-wrapper">
							<div class="project-description">
								<!-- project name -->
								<h2 class="project-title">Harbord</h2>
								<!-- /project name -->
								<span class="see-more">business</span>
							</div>
						</div>
						<!-- /project-description -->
					</a>
				</div>
				<!-- /item -->
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
							<a href="#">1</a>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<a href="#">5</a>
							<a href="#">6</a>
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