<section class="container mx-auto">
    <div class="max-w-lg">
        <h1 class="text-3xl text-gray-800 font-semibold">
            Blog
        </h1>
        <p class="mt-3 text-gray-800">
            Blogs that are loved by the community. Updated every hour.
            The powerful gravity waves resulting from the impact of the planets, were finally resolved in 2015
        </p>
    </div>
    <div class="mt-12 grid gap-4 divide-y md:grid-cols-2 md:divide-y-0 lg:grid-cols-3">
        @foreach ($posts as $post)
            <x-post.card :post="$post" />
        @endforeach
    </div>
</section>