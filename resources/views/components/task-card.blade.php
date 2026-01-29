@props(['task', 'color' => 'gray'])

@php
    $colors = [
        'blue' => 'border-blue-500 bg-blue-50',
        'yellow' => 'border-yellow-500 bg-yellow-50',
        'green' => 'border-green-500 bg-green-50',
    ];
@endphp

<div class="bg-white rounded-xl shadow p-4 {{ $colors[$color] ?? '' }}">

    <div class="flex justify-between">
        <h4 class="font-semibold text-slate-800">
            {{ $task->title }}
        </h4>

        <!-- Edit button -->
        <a href="{{ route('tasks.edit', $task) }}" class="text-xs text-slate-500 hover:text-slate-800">
            Edit
        </a>
    </div>

    @if ($task->description)
        <p class="text-sm text-gray-500 mt-1">
            {{ $task->description }}
        </p>
    @endif
    <div class="flex justify-between">
        @if ($task->deadline)
            <div class="text-xs text-gray-400 mt-3">
                ⏰ {{ $task->deadline->format('d M') }}
            </div>
        @endif

        <form method="POST" action="{{ route('tasks.updateStatus', $task) }}">
            @csrf
            @method('PUT')

     <select
    name="status"
    onchange="this.form.submit()"
    class="
        border rounded-full

        text-xs font-semibold
        leading-none

        px-3
        py-1
        pr-3

        cursor-pointer
        focus:outline-none
        hover:opacity-90 active:scale-95 transition    
        bg-no-repeat
        bg-right
        bg-[length:12px_12px]
        bg-[url('data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 fill=%22%236b7280%22 viewBox=%220 0 20 20%22><path d=%22M5.25 7.5L10 12.25L14.75 7.5%22/></svg>')]

        @if($task->status === 'todo')
            bg-blue-50 text-blue-700 border-blue-200
        @elseif($task->status === 'in_progress')
            bg-yellow-50 text-yellow-700 border-yellow-200
        @else
            bg-green-50 text-green-700 border-green-200
        @endif
    "
>

>



                <option value="todo" @selected($task->status === 'todo')>Todo </option>
                <option value="in_progress" @selected($task->status === 'in_progress')>Doing</option>
                <option value="done" @selected($task->status === 'done')>Done</option>
            </select>
        </form>
    </div>
</div>
