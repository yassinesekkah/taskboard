<x-app-layout>
    <p class="text-sm text-gray-500">
        Overview of your productivity.
    </p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">

        {{-- Total Tasks --}}
        <div
            class="bg-slate-800 p-6 rounded-xl shadow-sm text-white
               flex flex-col items-center justify-center text-center
               transition transform hover:-translate-y-1 hover:shadow-lg">
            <p class="text-sm text-slate-300">Total Tasks</p>
            <p class="text-3xl font-bold mt-2">{{ $totalTasks }}</p>
        </div>

        {{-- Completed --}}
        <div
            class="bg-green-600 p-6 rounded-xl shadow-sm text-white
               flex flex-col items-center justify-center text-center
               transition transform hover:-translate-y-1 hover:shadow-lg">
            <p class="text-sm text-green-100">Completed</p>
            <p class="text-3xl font-bold mt-2">{{ $completedTasks }}</p>
        </div>

        {{-- In Progress --}}
        <div
            class="bg-blue-600 p-6 rounded-xl shadow-sm text-white
               flex flex-col items-center justify-center text-center
               transition transform hover:-translate-y-1 hover:shadow-lg">
            <p class="text-sm text-blue-100">In Progress</p>
            <p class="text-3xl font-bold mt-2">{{ $inProgressTasks }}</p>
        </div>

        {{-- Overdue --}}
        <div
            class="bg-rose-600 p-6 rounded-xl shadow-sm text-white
               flex flex-col items-center justify-center text-center
               transition transform hover:-translate-y-1 hover:shadow-lg">
            <p class="text-sm text-rose-100">Overdue</p>
            <p class="text-3xl font-bold mt-2">{{ $overdueTasks }}</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 ">

        {{-- Tasks by Status --}}
        <div class="bg-white p-6 rounded-xl shadow-sm mt-8">
            <h3 class="text-sm font-semibold text-gray-700 mb-4">
                Tasks by Status
            </h3>
            <div class="h-48 flex items-center justify-center text-gray-400 text-sm">
                <canvas id="tasksStatusChart" height="120"></canvas>
                <script>
                    window.tasksByStatus = @json($tasksByStatus);
                </script>
            </div>
        </div>

        {{-- Tasks by Priority --}}
        <div class="bg-white p-6 rounded-xl shadow-sm mt-8">
            <h3 class="text-sm font-semibold text-gray-700 mb-4">
                Tasks by Priority
            </h3>
            <div class="h-48 flex items-center justify-center text-gray-400 text-sm">
                <canvas id="tasksPriorityChart" height="160"></canvas>
                <script>
                    window.tasksByPriority = @json($tasksByPriority);
                </script>
            </div>

        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm mt-8">
            <h3 class="text-sm font-semibold text-gray-700 mb-4">
                Tasks Completed (Last 7 Days)
            </h3>

            <canvas id="tasksDoneLineChart" height="120"></canvas>
            <script>
                window.tasksDoneLast7Days = @json($tasksDoneLast7Days);
            </script>
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
