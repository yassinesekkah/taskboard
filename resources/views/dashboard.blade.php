<x-app-layout>
    <p class="text-sm text-gray-500">
                    Overview of your productivity.
                </p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">

    {{-- Total Tasks --}}
    <div class="bg-white p-6 rounded-xl shadow-sm">
        <p class="text-sm text-gray-500">Total Tasks</p>
        <p class="text-3xl font-bold text-gray-800 mt-2">{{$totalTasks}}</p>
    </div>

    {{-- Completed --}}
    <div class="bg-white p-6 rounded-xl shadow-sm">
        <p class="text-sm text-gray-500">Completed</p>
        <p class="text-3xl font-bold text-green-600 mt-2">{{$completedTasks}} </p>
    </div>

    {{-- In Progress --}}
    <div class="bg-white p-6 rounded-xl shadow-sm">
        <p class="text-sm text-gray-500">In Progress</p>
        <p class="text-3xl font-bold text-blue-600 mt-2">{{$inProgressTasks}} </p>
    </div>

    {{-- Overdue --}}
    <div class="bg-white p-6 rounded-xl shadow-sm">
        <p class="text-sm text-gray-500">Overdue</p>
        <p class="text-3xl font-bold text-red-600 mt-2">{{$overdueTasks}}</p>
    </div>

</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-8">

    {{-- Tasks by Status --}}
    <div class="bg-white p-6 rounded-xl shadow-sm">
        <h3 class="text-sm font-semibold text-gray-700 mb-4">
            Tasks by Status
        </h3>
        <div class="h-48 flex items-center justify-center text-gray-400 text-sm">
            Chart placeholder
        </div>
    </div>

    {{-- Tasks by Priority --}}
    <div class="bg-white p-6 rounded-xl shadow-sm">
        <h3 class="text-sm font-semibold text-gray-700 mb-4">
            Tasks by Priority
        </h3>
        <div class="h-48 flex items-center justify-center text-gray-400 text-sm">
            Chart placeholder
        </div>
    </div>

</div>
<div class="bg-white p-6 rounded-xl shadow-sm mt-8">
    <h3 class="text-sm font-semibold text-gray-700 mb-4">
        Recent Tasks
    </h3>

    <ul class="space-y-3 text-sm">
        @forelse($recentTasks as $task)
        <li class="flex justify-between">
            <span class="text-gray-700">{{ $task->title }}</span>
            <span class="text-gray-400">{{ $task->created_at->diffForHumans() }}</span>
        </li>
        @empty
        <li class="text-gray-400">No recent tasks</li>
        @endforelse
    </ul>
</div>

</x-app-layout>
