@props(['type', 'click' => null, 'content'])

<button type="{{ $type }}" @if ($click) onclick="{{ $click }}" @endif
    {{ $attributes->merge(['class' => 'rounded-lg py-2 px-4 text-center font-sans text-xs font-bold text-white']) }}>
    {{ $content }}
</button>
