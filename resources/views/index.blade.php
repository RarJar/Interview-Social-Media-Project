<x-app-layout>
    @if (session('message'))
        <div style="color: green">
            {{ session('message') }}
        </div>
    @endif

    <div class="mx-3 md:mx-24">
        @forelse ($posts as $post)
            <x-molecules.post-card :data="$post" />
        @empty
            <div class="col">
                <h3>There is no data</h3>
            </div>
        @endforelse
    </div>
</x-app-layout>
