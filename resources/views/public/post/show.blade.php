<x-app-layout>
    @section('title', 'Social Media | Post Detail')

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <x-molecules.profile-header :data="$post" />
                <h1 class="mb-3 font-semibold text-2xl">{{ $post->title }}</h1>
                <p>{{ $post->body }}</p>
                @include('public.comments.comment-section', ['post' => $post])
            </article>
        </div>
    </main>
</x-app-layout>
