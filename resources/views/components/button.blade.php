@props(['type' => 'default'])

@php
$additionalAttribute = [
    'type' => 'submit',
];

$additionalAttribute = match ($type) {
    'delete' => array_merge($additionalAttribute, [
        'class' => 'inline-flex items-center px-4 py-2 bg-red-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150',
    ]),
    'primary' => array_merge($additionalAttribute, [
        'class' => 'inline-flex items-center px-4 py-2 bg-indigo-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150',
    ]),
    default => array_merge($additionalAttribute, [
        'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150',
    ]),
}
@endphp

<button {{ $attributes->merge($additionalAttribute) }}>
    {{ $slot }}
</button>
