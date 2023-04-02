<x-layouts.guest>
    <article class="container mx-auto mt-16">
        <h1 class="text-4xl font-semibold">{{$post->title}}</h1>
        <div class="flex items-center mt-8 space-x-4">
			<img src="https://source.unsplash.com/100x100/?portrait" alt="" class="w-10 h-10 rounded-full">
			<div>
				<h3 class="text-sm font-medium">Leroy Jenkins</h3>
				<time datetime="2021-02-18" class="text-sm">{{$post->date}}</time>
			</div>
		</div>
        <div class="max-w-3xl mt-8">
            {!!$post->body!!}
        </div>
    </article>
</x-layouts.guest>