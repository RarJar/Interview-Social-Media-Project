<x-app-layout>
    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @csrf
        <h3>Edit Form</h3>
        <input type="text" name="title" value="{{ $post->title }}">
        @error('title')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <input type="text" name="body" value="{{ $post->body }}">
        @error('body')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <button>Update</button>
    </form>
</x-app-layout>
