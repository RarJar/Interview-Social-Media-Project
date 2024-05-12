<x-app-layout>
    @section('title', 'Social Media | Newfeed')
    
    <div class="mx-3 md:mx-24">
        @forelse ($posts as $post)
            <x-molecules.post-card :data="$post" />
        @empty
            <x-atoms.empty-data data="post" />
        @endforelse
    </div>
</x-app-layout>
