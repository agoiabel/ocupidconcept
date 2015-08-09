@extends('partials.frontLayout')
@section('content')

<!-- Page Content
================================================== -->
<div id="body-content">	
	
	<!-- Section: Mini Hero -->
	<div class="section-mini-hero" style="background-image: url({{$article->image}});">
		<div class="container">
			<h2 class="title2 mini-hero-subtitle">The word of architecture:</h2>
			<h1 class="title1 mini-hero-title">Latest News</h1>
		</div>
	</div>
	<!-- /Section: Mini Hero -->

	<!-- Section: Single project -->
	<div class="section-project-single">
		<div class="container">			
			<!-- /header image -->
			<div class="row single-post">				

				<!-- SECTION: Blog post -->
				<div class="section-blog-post">
					<div class="container">
						<div class="row">
							<div class="col-sm-3 post-single-infos-wrapper">
								<div class="post-single-infos">
									<span class="post-date">{{$article->created_at}}</span>
								</div>
							</div>
							<!-- Blog Post -->
							<div class="col-sm-8">
								<!-- main title -->					
								<h1 class="title2 title-border">{{$article->title}}</h1>
								<!-- /main title -->
								<!-- Blog Post -->
								<div class="blog-post-container">
									{{$article->body}}
								</div>
								<!-- /Blog post -->

								<!--=== Blog Comments -->
								<div class="blog-comments">
									<h2 class="title2 blog-comments-title title-border">Comments</h2>
					                <!-- Comments Form -->
					                <div class="well">
					                    <h4>Leave a Comment:</h4>
					                    
					                    {!! Form::open(['url'=>'comments']) !!}
						                    {!! Form::hidden('article_id', $article->id) !!}
					      					@include('errors.list')
					      					<div class="form-group">
					                            {!! Form::text('name', null, ['placeholder'=>'Enter Your name']) !!}
					                        </div>
					                        <div class="form-group">
			                                    {!! Form::textarea('commentBody', null, ['placeholder'=>'Type Your Comment Here']) !!}
					                        </div>
					                        {!! Form::submit('submit', ['class'=>'btn2']) !!}
					                    {!! Form::close() !!}
					                </div>

					                <hr>
					                <!-- /Comments Form -->

					                <!-- Posted Comments -->
					                @include('flash::message')
					                <!-- Comment -->
					                @foreach($article->comments as $comment)
					                <div class="media">
					                    <a class="pull-left" href="#">
					                        <img class="media-object" src="{{asset('includes/img/avatar.png')}}" alt="">
					                    </a>
					                    <div class="media-body">
					                        <h4 class="media-heading">{{$comment->name}}
					                            <small>{{$comment->created_at}}</small>
					                        </h4>
					                       {{$comment->commentBody}}
					                    </div>
					                </div>
					                @endforeach
									<!-- /Comment -->
								</div>
				                <!-- === /Blog Comments -->
							</div>
						<!-- /Blog post -->	
						</div>		
					</div>
				</div>
				<!-- /SECTION: Blog post -->
			</div>
		</div>
	</div>
	<!-- /Section: Single project -->

@endsection