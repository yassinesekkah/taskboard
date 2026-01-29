<x-app-layout>
@if (session('success'))
    <div class="mb-4 px-4 py-3 bg-green-100 text-green-700 rounded-lg">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="mb-4 px-4 py-3 bg-red-100 text-red-700 rounded-lg">
        {{ session('error') }}
    </div>
@endif

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
            {{ $tasks['todo']->links() }}
        </div>
    </div>

    <!-- DOING -->
    <div>
        <h3 class="text-sm font-semibold text-gray-500 mb-4">DOING</h3>

        <div class="space-y-4">
            @forelse ($tasks['doing'] as $task)
                <x-task-card :task="$task" color="yellow" />
            @empty
                <p class="text-sm text-gray-400">No tasks</p>
            @endforelse
        </div>

        <div class="mt-4">
            {{ $tasks['doing']->links() }}
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
            {{ $tasks['done']->links() }}
        </div>
    </div>

</div>

@if ($errors->any())
    <div class="mb-4 px-4 py-3 bg-red-100 text-red-700 rounded-lg">
        <ul class="list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</x-app-layout>
