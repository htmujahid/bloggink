<x-layouts.user>
    <div class="grid grid-cols-1 gap-3 container mx-auto my-16">
        @foreach ($posts as $post)
            <x-post.index :post="$post" />
        @endforeach
    </div>
</x-layouts.user>