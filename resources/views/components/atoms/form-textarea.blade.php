@props(['name', 'placeholder'])

<textarea rows="6" name="{{ $name }}"
    {{ $attributes->merge(['class' => 'p-3 w-full text-sm border-2 rounded-lg border-gray-400 focus:ring-0 placeholder-gray-600']) }}
    placeholder="{{ $placeholder }}">
    {{ $slot }}
</textarea>
<x-atoms.error :name="$name" />
