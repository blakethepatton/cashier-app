@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			
			<div class="card auth-card">
				<h1>Register</h1>
				<form action="/register" method="POST">
					
					{!! csrf_field() !!}
					
					{{-- NAME --}}
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control">
					</div>

					{{-- EMAIL --}}
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control">
					</div>

					{{-- PASSWORD --}}
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control">
					</div>

					{{-- PASSWORD CONFIRM --}}
					<div class="form-group">
						<label for="password_confirmation">Confirm Password</label>
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
					</div>

					{{-- REGISTER BUTTON --}}
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-lg btn-block">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection