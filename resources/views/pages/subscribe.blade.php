@extends('layouts.app')

@section('content')

<div class="hero">
	<div class="hero-content">
		<h1>You're Joining!</h1>
		<h2>Hooray!</h2>
	</div>
</div>
<section class="container">
	<div class="card card-padded">
		<form action="/subscribe" method="POST" id="subscribe-form">
			{!! csrf_field() !!}
			@if (Auth::guest())
			{{-- USER INFO --}}
			<div class="section-header">
				<h2>User Info</h2>
			</div>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" name="email" id="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			@endif

			{{-- SUBSCRIPTION INFO --}}
			<div class="section-header">
				<h2>Subscription Info</h2>
			</div>
			
			<div class="form-group">
				<div class="row">
					<div class="col-xs-4">
						<div class="subscription-option">
							<input type="radio" id="plan-bronze" name="plan" value="bronze" checked>
							<label for="plan-bronze">
								<span class="plan-price">$5 <small>/mo</small></span>
								<span class="plan-name">Bronze</span>
							</label>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="subscription-option">
							<input type="radio" id="plan-silver" name="plan" value="bronze" >
							<label for="plan-silver">
								<span class="plan-price">$10 <small>/mo</small></span>
								<span class="plan-name">Silver</span>
							</label>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="subscription-option">
							<input type="radio" id="plan-gold" name="plan" value="bronze" >
							<label for="plan-gold">
								<span class="plan-price">$15 <small>/mo</small></span>
								<span class="plan-name">Gold</span>
							</label>
						</div>
					</div>
				</div>
			</div>

			{{-- CREDIT CARD INFO --}}
			<div class="section-header">
				<h2>Credit Card Info</h2>
			</div>
			
			<div class="form-group row">
				{{-- CREDIT CARD NUMBER --}}
				<div class="col-xs-8">
					<label>Credit Card Number</label>
					<input type="text" class="form-control" placeholder="4242 4242 4242 4242" data-stripe="number">
				</div>

				{{-- CVC --}}

				<div class="col-xs-4">
					<label>CVC</label>
					<input type="text" class="form-control" placeholder="123" data-stripe="cvc">
				</div>

			</div>
			<div class="form-group row">

				{{-- EXP MONTH --}}
				<div class="col-xs-3">
					<label>Expiration Month</label>
					<input type="text" class="form-control" placeholder="08" data-stripe="exp-month">
				</div>

				{{-- EXP YEAR --}}
				<div class="col-xs-3">
					<label>Expiration Year</label>
					<input type="text" class="form-control" placeholder="2020"  data-stripe="exp-year">
				</div>
			</div>

			<div class="stripe-errors"></div>

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
					{{ $error }}<br>
				@endforeach
			</div>
			@endif

			<div class="form-group text-center">
				<button type="submit" class="btn btn-lg btn-success btn-block">Join</button>
			</div>			
		</form>
	</div>
</section>

@endsection