@props(['title', 'desc' => null, 'date' => null, 'color' => 'gray'])

@php
$colors = [
    'blue' => 'border-blue-500 bg-blue-50 text-blue-600',
    'yellow' => 'border-yellow-500 bg-yellow-50 text-yellow-600',
    'green' => 'border-green-500 bg-green-50 text-green-600',
];
@endphp

<div class="bg-white rounded-xl shadow p-4 border-l-4 {{ $colors[$color] ?? '' }}">
    <h4 class="font-semibold text-slate-800">
        {{ $title }}
    </h4>

    @if($desc)
        <p class="text-sm text-gray-500 mt-1">
            {{ $desc }}
        </p>
    @endif

    @if($date)
        <div class="text-xs text-gray-400 mt-3">
            {{ $date }}
        </div>
    @endif
</div>
