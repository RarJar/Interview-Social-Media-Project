<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if (session('message'))
        <div style="color: green">
            {{ session('message') }}
        </div>
    @endif
    <div class="mx-24">
        @forelse ($posts as $post)
            <x-molecules.post-card :data="$post" />
        @empty
            <div class="col">
                <h3>There is no data</h3>
            </div>
        @endforelse
    </div>
</x-app-layout>
