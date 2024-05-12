<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf
        <x-atoms.input-label class="text-center text-xl font-semibold mb-3" value="Register" />
        <div>
            <x-atoms.input-label for="name" :value="__('Name')" />
            <x-atoms.form-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" />
        </div>

        <div>
            <x-atoms.input-label for="email" :value="__('Email')" />
            <x-atoms.form-input id="email" class="block mt-1 w-full" type="email" name="email"
                :value="old('email')" />
        </div>

        <div>
            <x-atoms.input-label for="password" :value="__('Password')" />
            <x-atoms.form-input id="password" class="block mt-1 w-full" type="password" name="password" />
        </div>

        <div>
            <x-atoms.input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-atoms.form-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" />
        </div>

        <div class="flex items-center justify-end space-x-2">
            <x-atoms.link route="{{ route('login') }}" class="underline !text-gray-800" content="Already registered?" />
            <x-atoms.button type="submit" class="bg-gray-800 uppercase" content="Register" />
        </div>
    </form>
</x-guest-layout>
