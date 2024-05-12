<x-app-layout>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <x-molecules.profile-header :data="$post" />
                <h1 class="mb-3 font-semibold text-2xl">{{ $post->title }}</h1>
                <p>{{ $post->body }}</p>
                <section class="my-2 space-y-2">
                    <h2 class="text-lg font-semibold text-gray-900">Comments
                        ({{ $post->comments->count() }})</h2>
                    <form action="{{ route('comment.store', ['post' => $post->id]) }}" method="POST" class="mb-6">
                        @csrf
                        <x-atoms.form-textarea name="text" placeholder="Write a comment..." />
                        <x-atoms.button type="submit" class="bg-gray-800" content="Post comment" />
                    </form>
                    @foreach ($post->comments as $comment)
                        <x-molecules.comment-card :comment="$comment" />
                    @endforeach
                </section>
            </article>
        </div>
    </main>
</x-app-layout>
