<article class="post-card card">
	{{-- IMAGE --}}
	<a href="/{{ $post->slug }}" class="img-container" style="background-image:url('{{ $post->image }}')"></a>
	{{-- CONTENT --}}
	<div class="card-content">
		{{-- TITLE --}}
		<h2><a href="/{{ $post->slug }}">{{ $post->title }}</a></h2>
		{{-- BYLINE --}}
		<div class="byline">{{ $post->author->name }}</div>
		{{-- EXCERPT --}}
		<p>{{ $post->getExcerpt() }}</p>
		{{-- FREE OR PREMIUM --}}
		<span class="price
			{{ $post->premium ? 'price-premium' : 'price-free' }}">
			{{ $post->premium ? 'Premium' : 'Free' }}
		</span>
	</div>
</article>