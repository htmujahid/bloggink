<article class="mt-5 pt-8 md:pt-0" key={idx}>
    <a href="/posts/{{$post->slug}}">
        <span class="block text-gray-700 text-sm">
            {{$post->updated_at->diffForHumans()}}
        </span>
        <div class="mt-2">
            <h3 class="text-xl text-gray-900 font-semibold hover:underline">
                {{$post->title}}
            </h3>
            <p class="text-gray-800 mt-1 leading-relaxed">
                {{$post->excerpt}}
            </p>
        </div>
        <button class="mt-2 outline-none flex items-center text-[14px] text-blue-600 decoration-blue-600 hover:underline">
            READ MORE
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </button>
    </a>
</article>