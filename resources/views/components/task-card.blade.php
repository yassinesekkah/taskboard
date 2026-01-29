@props(['task', 'color' => 'gray'])

@php
$colors = [
    'blue' => 'border-blue-500 bg-blue-50',
    'yellow' => 'border-yellow-500 bg-yellow-50',
    'green' => 'border-green-500 bg-green-50',
];
@endphp

<div class="bg-white rounded-xl shadow p-4 {{ $colors[$color] ?? '' }}">
    <h4 class="font-semibold text-slate-800">
        {{ $task->title }}
    </h4>

    @if($task->description)
        <p class="text-sm text-gray-500 mt-1">    
            {{ $task->description }}
        </p>
    @endif

    @if($task->deadline)
        <div class="text-xs text-gray-400 mt-3">
            ⏰ {{ $task->deadline->format('d M') }}
        </div>
    @endif
</div>

