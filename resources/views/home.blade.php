<x-layouts.guest>
    <x-sections.hero.index />
    <div class="grid grid-cols-1 gap-3 container mx-auto">
        @foreach ($posts as $post)
            <x-post.index :post="$post" />
        @endforeach
    </div>
</x-layouts.guest>