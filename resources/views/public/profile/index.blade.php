<x-app-layout>
    @section('title', 'Social Media | Profile')
    
    <div class="mx-3 md:mx-24">
        <div class="font-semibold text-lg py-5 mb-3 text-center">
            <h1>Name - {{ $user->name }}</h1>
            <h1>Email - {{ $user->email }}</h1>
            <h1>Joined - {{ $user->created_at->format('d-M-Y') }}</h1>
        </div>
        @forelse ($user->posts as $post)
            <x-molecules.post-card :data="$post" />
        @empty
            <x-atoms.empty-data data="post" />
        @endforelse
    </div>
</x-app-layout>
