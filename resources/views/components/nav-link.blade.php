{{-- @php

    echo $attributes;

@endphp --}}

@props([
    'active' => true,
    'url' => '/',
    'icon' => null,
    'hoverClass' => ''
])


<a href="{{ $url}}" class="text-white hover:underline py-2   {{ $active ? 'text-yellow-500 font-bold' : '' }} {{ $hoverClass }}">
    @if($icon)
        <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif
    {{ $slot }}
</a>
