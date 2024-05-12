<x-guest-layout>
    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf
        <x-atoms.input-label class="text-center text-xl font-semibold mb-3" value="Login" />
        <div>
            <x-atoms.input-labe!text-mdl for="email" :value="__('Email')" />
            <x-atoms.form-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
        </div>

        <div>
            <x-atoms.input-label for="password" :value="__('Password')" />
            <x-atoms.form-input id="password" class="block mt-1 w-full" type="password" name="password" />
        </div>

        <div class="flex items-center justify-end space-x-2">
            <x-atoms.link route="{{ route('register') }}" class="underline !text-gray-800"
                content="Create new account?" />
            <x-atoms.button type="submit" class="bg-gray-800 uppercase" content="Login" />
        </div>
    </form>
</x-guest-layout>
