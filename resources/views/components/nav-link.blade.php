@foreach ($colours as $c )
@if($c->Status == 'true')
@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-[6px] border-indigo-100 text-sm font-larger leading-5 font-extrabold text-gray-100 hover:text-gray-400 focus:outline-none focus:border-indigo-300 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-larger leading-5 font-extrabold text-gray-100 hover:text-gray-400 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} style="color:{{ $c->Navbar_text }}">
    {{ $slot }}
</a>
@endif
@endforeach
