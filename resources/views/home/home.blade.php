@extends('home.landingPage')
@section('content')
    <style>
        img{
            max-width: 100%;
        }
    </style>
	<div class="card">
        <div class=".col-md-12">

           <div>
               <img src="{{asset('images/bg-img.jpg')}}">
           </div>
        </div>
   <div class="badgescard">
    <div class="row">
		<div class=".col-md-12">
            <div class="col-md-4">
          	<hr/>
              <h4 class="center"><strong>What is IMS</strong></h4>
            <p class="light">IMS is an acronym for Inventory Management System, which precisely means its an electronic system of handling , controlling and monitoring the flow of company's goods from time they were brought in to the time they were dispatched.This system seeks to improve the business stock flow and keep accurate records of what has been happening over a period of time.</p>
            <br>
          </div>

          <div class="col-md-4">
          	<hr/>
            <h4 class="center"><strong>How to use IMS</strong></h4>
            <p class="light">This system has two main types of users which are i) an Administrator who  has main responsibilities including registering new users , activating and de-activating user and have a general over view of the whole system, ii) the general users , who are those that perform the major role of logging in new stock and handover of goods as per request.</p>
            <br>
          </div>

          <div class="col-md-4">
          	<hr/>
            <h4 class="center"><strong>Benefits of IMS</strong></h4>
              <p class="light">An IMs has enormous benefits to any organisation.These are -</p>
              <p style="margin: 0 0 0 0;">i) it adds value to the users ,</p>
              <p style="margin: 0 0 0 0;">ii) it reduces unnecessary costs ,</p>
              <p style="margin: 0 0 0 0;">iii) it helps in budgeting, precise planning and ultimate goal setting process.</p>
          </div>
		</div>
	</div>
</div>
    </div>
@endsection