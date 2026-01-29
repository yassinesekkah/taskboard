<x-app-layout>
    <div class="flex flex-col items-center ">
        <div class="bg-white p-8 overflow-x-auto  border border-slate-200 rounded-xl shadow-sm max-w-[500px]">
            <h2 class="text-xl font-semibold mb-6 text-center">Edit task</h2>

            <form method="POST" action="{{ route('tasks.update', $task) }}" class="space-y-4 ">
                @csrf
                @method('PUT')

                <input type="text" name="title" value="{{ old('title', $task->title) }}"
                    class="w-full rounded-lg border px-3 py-2">

                <textarea name="description" class="w-full rounded-lg border px-3 py-2">{{ old('description', $task->description) }}</textarea>

                <select name="priority" class="w-full rounded-lg border px-3 py-2">
                    <option value="low" @selected($task->priority === 'low')>Low</option>
                    <option value="medium" @selected($task->priority === 'medium')>Medium</option>
                    <option value="high" @selected($task->priority === 'high')>High</option>
                </select>

                <input type="date" name="deadline"
                    value="{{ old('deadline', optional($task->deadline)->format('Y-m-d')) }}"
                    class="w-full rounded-lg border px-3 py-2" />


                <button class="px-4 py-2 bg-slate-800 text-white rounded-lg">
                    Update task
                </button>
            </form>
        </div>
    </div>

</x-app-layout>
