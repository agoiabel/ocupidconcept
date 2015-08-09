@extends('partials.frontLayout')
@section('content')

<!-- Page Content
================================================== -->
<div id="body-content">	
	
	<!-- Section: Mini Hero -->
	<div class="section-mini-hero" style="background-image: url('includes/img/hero6.jpg');">
		<div class="container">
			<h2 class="title2 mini-hero-subtitle">The word of architecture:</h2>
			<h1 class="title1 mini-hero-title">Latest News/FORUM</h1>
		</div>
	</div>
	<!-- /Section: Mini Hero -->

	<!-- SECTION: BLog Feed -->
	<div class="section-blog">
		<div class="container">
			<!-- SECTION: Blog + Side Column -->
			<div class="section-blog">
				<div class="row">
					<!-- blog -->
					<div class="col-md-9">	
						<!-- Blog Posts -->
						<div class="blog-posts">
							<!-- item -->
							@foreach($articles as $article)
							<div class="blog-item">
								<!-- Post thumbnail -->
								<div class="post-thumbnail">
									<a href="" class="click-fade"><img src="{{$article->image}}"  alt="" /></a>
								</div>
								<!-- /Post thumbnail -->
								<!-- Post content -->
								<div class="post-content">
									<div class="row">
										<div class="col-sm-1 post-archive-infos-wrapper">
											<div class="post-archive-infos">
												<span class="post-date">{{$article->created_at}}</span>
											</div>
										</div>
										<div class="col-sm-11">
											<h3 class="post-title title-border"><a href="#" class="click-fade">{{$article->title}}</a></h3>
											<div class="post-text">
												<p><a href="#" class="click-fade">{{$article->briefDescription}}</a></p>
											</div>
											<a href="{{ url('/articles', $article->id) }}" class="btn btn-1c click-fade">Read More...</a>
										</div>
									</div>									
								</div>	
								<!-- /Post content -->										
							</div>
							@endforeach
							<!-- /item -->
						</div>			
						<!-- /Blog Posts -->
						<!-- Pagination container -->
						<div class="row">
							<div class="col-xs-12">
								<!-- Pagination -->
								<div class="section-pagination">
									<div class="row">
										<div class="col-xs-4">
											<a href="#">&lt;&lt; Previous</a>
										</div>
										<div class="col-xs-4 text-center">
											<span class="pagination-numbers">
												{!! $articles->render() !!}
											</span>
										</div>
										<div class="col-xs-4 text-right">
											<a href="#">Next &#62;&#62;</a>
										</div>	
									</div>								
								</div>
								<!-- /Pagination -->
							</div>
						</div>
						<!-- /Pagination container -->		
					</div>
					<!-- /blog -->
					<!-- side column -->
					<div class="col-md-3">		
						<div class="blog-sidebar">
							<!-- Tags -->
							<div class="sidebar-module sidebar-tags">
								<h3 class="module-title">Categories</h3>
								<!-- tags -->
								<div class="tags">
									<a href="#">3D</a>
									<a href="#">Educational</a>
									<a href="#">2D</a>
								</div>
								<!-- /tags -->
							</div>
							<!-- /Tags -->
							<!-- Link -->
							<div class="sidebar-module">
								<h3 class="module-title">Our Projects</h3>
								<div class="sidebar-module-content">
									<p>Have you taken a look at our work?</p>	
								</div>				
								<a href="/" class="btn click-fade">Take a look</a>	
							</div>
							<!-- /Link -->
						</div>									
					</div>
					<!-- /side-column -->
				</div>
			</div>
			<!-- /SECTON: Blog + Side Column -->
		</div>
	</div>
	<!-- /SECTION: Blog feed -->
	
@endsection