<x-app-layout>
    <form action="{{ route('post.store') }}" method="POST" class="mx-3 md:mx-52 mt-10 space-y-2">
        @csrf
        <x-atoms.input-label class="text-center text-xl font-semibold mb-3" value="Create Form" />
        <div>
            <x-atoms.input-label for="title" :value="__('Title')" />
            <x-atoms.form-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" />
        </div>

        <div>
            <x-atoms.input-label for="body" :value="__('Body')" />
            <x-atoms.form-textarea id="body" class="block mt-1 w-full" type="text" name="body">
                {{ old('body') }}
            </x-atoms.form-textarea>
        </div>

        <x-atoms.button type="submit" class="w-full bg-gray-800 uppercase" content="Create" />
    </form>
</x-app-layout>
