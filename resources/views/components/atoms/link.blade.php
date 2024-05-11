@props(['route', 'content'])

<a href="{{ $route }}"
    {{ $attributes->merge(['class' => 'rounded-lg py-2 px-4 text-center font-sans text-xs font-bold text-white']) }}>
    {{ $content }}
</a>
