@props(['comment'])

<article class="p-6 mb-4 text-base bg-gray-200 rounded-lg">
    <x-molecules.profile-header :data="$comment" />
    <p>{{ $comment->text }}</p>
    {{-- @can('post-manage', $data) --}}
    <div class="flex space-x-2 mt-1">
        <x-atoms.link route="{{ route('post.edit', $comment->id) }}" class="bg-blue-500" content="Edit" />
        <form action="{{ route('post.destroy', $comment->id) }}" method="POST" class="text-red-500 cursor-pointer">
            @csrf
            @method('DELETE')
            <x-atoms.button type="submit" class="bg-red-500" content="Delete" />
        </form>
    </div>
    {{-- @endcan --}}
</article>
