@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-[6px] border-indigo-100 text-sm font-larger leading-5 font-extrabold text-gray-100 hover:text-gray-400 focus:outline-none focus:border-indigo-300 transition duration-150 ease-in-out'
            : 'inline-flex bg-blue-900 h-12 w-full text-md text-white items-center px-10  border-b-2 border-transparent font-larger leading-5 font-extrabold  hover:text-gray-400 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
