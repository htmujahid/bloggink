<a href="/posts/{{$post->slug}}">	
	<div class="max-w-3xl pb-3 overflow-hidden border-b">
		<article>
			<h2 class="text-xl font-bold">{{$post->title}}</h2>
			<p class="mt-1">{{$post->excerpt}}</p>
			<div class="flex items-center mt-3 space-x-4">
				<img src="https://source.unsplash.com/100x100/?portrait" alt="" class="w-10 h-10 rounded-full">
				<div>
					<h3 class="text-sm font-medium">Leroy Jenkins</h3>
					<time datetime="2021-02-18" class="text-sm">{{$post->date}}</time>
				</div>
			</div>
		</article>
	</div>
</a>