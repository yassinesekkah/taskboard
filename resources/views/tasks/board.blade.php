<x-app-layout>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- TODO -->
    <div>
        <h3 class="text-sm font-semibold text-gray-500 mb-4">TODO</h3>

        <div class="space-y-4">
            @forelse ($tasks['todo'] as $task)
                <x-task-card :task="$task" color="blue" />
            @empty
                <p class="text-sm text-gray-400">No tasks</p>
            @endforelse
        </div>

        <div class="mt-4">
            {{ $tasks['todo']->links('components.pagination-minimal') }}
        </div>
    </div>

    <!-- DOING -->
    <div>
        <h3 class="text-sm font-semibold text-gray-500 mb-4">IN PROGRESS</h3>

        <div class="space-y-4">
            @forelse ($tasks['doing'] as $task)
                <x-task-card :task="$task" color="yellow" />
            @empty
                <p class="text-sm text-gray-400">No tasks</p>
            @endforelse
        </div>

        <div class="mt-4">
            {{ $tasks['doing']->links('components.pagination-minimal') }}
        </div>
    </div>

    <!-- DONE -->
    <div>
        <h3 class="text-sm font-semibold text-gray-500 mb-4">DONE</h3>

        <div class="space-y-4">
            @forelse ($tasks['done'] as $task)
                <x-task-card :task="$task" color="green" />
            @empty
                <p class="text-sm text-gray-400">No tasks</p>
            @endforelse
        </div>

        <div class="mt-4">
            {{ $tasks['done']->links('components.pagination-minimal') }}
        </div>
    </div>

</div>

</x-app-layout>
