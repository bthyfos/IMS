@extends('home.landingPage')
@section('content')
<div class="col-xs-8 col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">Settings</div>
  <div class="panel-body">


<!-- 
    <div class="vertical_line"><div> -->
    	<div class="container">
    <div class="row">
		<div class="col-xs-8">
			<!-- tabs -->
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
					<li><a href="#preferences" data-toggle="tab">Preferences</a></li>
					<li><a href="#services" data-toggle="tab">Services</a></li>
					<li><a href="#contact" data-toggle="tab">Contact</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="profile">                
						<div class="col-xs-8">
							@include('settings.profile')
							           
						</div>
					</div> 
					<div class="tab-pane" id="preferences"> 
						<div class="col-xs-8">
							@include('settings.preferences')                 
						</div>
					</div>
				
					<div class="tab-pane" id="services"> 
						<div class="">
							<h1>Services Tab</h1>
							<p>meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
						</div>
					</div>
				
					<div class="tab-pane" id="contact"> 
						 <div class="">
							<h1>Contact Tab</h1>
							<p>deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>                 
						 </div>
					</div>
				</div>
			</div>
			<!-- /tabs -->
		</div>
	</div>
</div>

  
  </div>
</div>
</div>
@endsection