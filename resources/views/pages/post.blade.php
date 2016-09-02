@extends('layouts.app')
@section('content')
	<article class="card post-single">
		{{-- IMAGE --}}
		<div class="img-container" 
			style="background-image:url('{{ $post->image }}')">
		</div>
		{{-- CARD CONTENT --}}
		<div class="card-content">			
			<header class="post-header">
				{{-- TITLE --}}
				<h1>{{ $post->title }}</h1>

				{{-- BYLINE --}}
				<div class="byline">
					{{ $post->author->name }}
				</div>
			</header>
			
			
			{{-- TODO: Show or hide if premium post --}}
			@if($post->premium and ! (Auth::user() and Auth::user()->subscribed('main')))
				
				<div class="jumbotron text-center">
					<h2>Subscribe to gain access</h2>
					<p>This great post is reserved for our paid subscribers. Join to get access!</p>
					<a href="/subscribe" class="btn btn-lg btn-danger">Subscribe Now</a>
				</div>

			@else 
			{{-- CONTENT --}}

			{!! $post->content !!}
			@endif
		</div>
	</article>
@endsection