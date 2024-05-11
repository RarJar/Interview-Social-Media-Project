<x-app-layout>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <h3>Create Form</h3>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <input type="text" name="body" value="{{ old('body') }}">
        @error('body')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <button>Create</button>
    </form>
</x-app-layout>
