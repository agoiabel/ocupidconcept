@extends('partials.frontLayout')
@section('content')

<!-- Page Content
================================================== -->
<div id="body-content">			

	
	<!-- Section: Mini Hero -->
	<div class="section-mini-hero" style="background-image: url('includes/img/hero3.jpg');">
		<div class="map-overlay">
			<div class="container">
				<h2 class="title2 mini-hero-subtitle">Interested?</h2>
				<h1 class="title1 mini-hero-title">Send us a message!</h1>
			</div>
		</div>
	</div>
	<!-- /Section: Mini Hero -->	

	<!-- SECTION: contact infos -->
	<div class="section-contact-infos">
		<div class="container">
			<div class="row">
				<!-- col -->
				<div class="col-sm-6 contact-infos-title-wrapper">
					<div class="contact-infos-col">
						<h2 class="title1">CONTACT DETAILS :</h2>
					</div>					
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-sm-3">
					<div class="contact-infos-col">
						<h3 class="title4">OFFICES / BRANCHES</h3>
						<p>2 Amagu Street Abakalaliki Ebonyi State</p>
						<p>N0 4 Imole Ayo Oke-ola ilaro Ogun State</p>
						<p>0703-262-7401</p>
						<p>oluwatobio943@gmail.com</p>
					</div>					
				</div>
				<!-- /col -->
				<!-- col -->
				<div class="col-sm-3">
					<div class="contact-infos-col">
						<h3 class="title4">FIND US ON :</h3>
						<ul class="clean-list">
							<li><a href="#">facebook</a></li>
							<li><a href="#">twitter</a></li>
							<li><a href="#">instagram</a></li>
						</ul>	
					</div>									
				</div>
				<!-- /col -->
			</div>
		</div>
	</div>
	<!-- /SECTION: contact infos -->

	<!-- contact form -->
	<div class="container section-contact-form">
		<div class="row">		
			<div class="col-sm-4">
				<!-- Section Title -->
				<h2 class="title2 title-border title-section">Get in Touch</h2>
				<!-- /Section Title -->
			</div>	
			<!-- Right Column -->
			<div class="col-sm-8">
				<!-- Contact Form -->
 
				{!! Form::open(['url'=>'processcontact', 'class'=>'form']) !!}
					<!-- Form Field -->        
		            <div class="form-group">
		            	<input class="form-control required" id="name" name="name" placeholder="Name" type="text" required/>
		            </div>   
		            <!-- /Form Field -->   
		            <div class="row">
						<div class="col-md-6">
							<!-- item -->            
							<div class="form-group">
							 	 <input class="form-control required" id="email" name="email" placeholder="Email" type="email" required />
							</div>    
							<!-- /item -->
						</div>
						<div class="col-md-6">
							<!-- item -->            
							<div class="form-group">
							 	<input class="form-control required" id="subject" type="text" name="subject" placeholder="Subject" required>
							</div>    
							<!-- /item -->
						</div>
					</div>  						          
		            <!-- Form Field -->                 
		            <div class="form-group"> 
		              	 <textarea class="form-control required" id="message" name="body" placeholder="Message" required></textarea>
		            </div>    
		            <!-- /Form Field -->           
		            <!-- Form Field -->  
		            <div class="form-group form-send">
		            	<button type="submit" value="" class="btn btn-form btn2"><span class="fa fa-paper-plane"> &nbsp;</span>send</button>
		            	<!--<input type="submit" value="Send" class="btn btn-1c"/>-->
		            </div>   
		            <!-- /Form Field -->                  
	          		@include('errors.list')
	          		@include('flash::message')
	          	{!! Form::close() !!}
	          	<!-- / Contact form -->
			</div>
			<!-- /Right Column -->
		</div>
	</div>
	<!-- / contact form -->			
@endsection