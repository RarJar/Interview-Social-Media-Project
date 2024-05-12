@props(['action', 'customMethod' => null])

<form action="{{ $action }}" {!! $attributes->merge(['class' => '']) !!}>
    @csrf
    @if ($customMethod)
        @method($customMethod)
    @endif

    {{ $slot }}
</form>
