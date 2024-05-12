@props(['post'])

<section class="my-2 space-y-2">
    <h2 class="text-lg font-semibold text-gray-900">Comments
        ({{ $post->comments->count() }})</h2>

    <x-molecules.form action="{{ route('comment.store', ['post' => $post->id]) }}" method="POST" class="mb-6">
        <x-atoms.form-textarea name="text" placeholder="Write a comment..." />
        <x-atoms.button type="submit" class="bg-gray-800" content="Post comment" />
    </x-molecules.form>
    
    @forelse ($post->comments as $comment)
        <x-molecules.comment-card :comment="$comment" :post="$post" />
    @empty
        <x-atoms.empty-data data="comment" />
    @endforelse
</section>
