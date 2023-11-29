@props(['active'])

@php
$classes = ($active ?? false)
            ? 'w-full border-l-8 border-indigo-400 dark:border-indigo-600 flex items-center p-2 text-gray-900 rounded-lg bg-neutral-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group'
            : 'w-full flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
