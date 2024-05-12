@props(['name', 'placeholder' => null])

<textarea rows="6" name="{{ $name }}"
    {{ $attributes->merge(['class' => 'p-3 w-full text-sm border rounded-lg border-gray-300 focus:ring-0 placeholder-gray-600']) }}
    placeholder="{{ $placeholder }}">
    {{ $slot }}
</textarea>
<x-atoms.error :name="$name" />
