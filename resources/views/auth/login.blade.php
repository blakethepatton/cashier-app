@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			
			<div class="card auth-card">
				<h1>Login</h1>
				<form action="/login" method="POST">
					
					{!! csrf_field() !!}

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

					{{-- LOGIN BUTTON --}}
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection