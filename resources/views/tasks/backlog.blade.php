<x-app-layout>
    <div class="p-6 space-y-6">

        {{-- Search & Filters --}}
        <form method="GET" id="backlogSearchForm" class="flex flex-wrap gap-4 items-center bg-white p-4 rounded-lg shadow-sm">

            {{-- Search --}}
            <div class="flex-1">
                <input type="text" name="search" id="backlogSearchInput" value="{{ request('search') }}" placeholder="Search in backlog..."
                    class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 text-sm">
            </div>
            

            {{-- Status filter --}}
            <div>
                <select name="status" id="statusSelect"
                    class="rounded-md border-gray-300 text-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <option value="">Tous les statuts</option>
                    <option value="todo" {{ request('status') === 'todo' ? 'selected' : '' }}>Todo</option>
                    <option value="in_progress" {{ request('status') === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="done" {{ request('status') === 'done' ? 'selected' : '' }}>Done</option>
                </select>
            </div>

            {{-- Priority filter --}}
            <div>
                <select name="priority"  id="prioritySelect"
                    class="rounded-md border-gray-300 text-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <option value="">Toutes les priorités</option>
                    <option value="low" {{ request('priority') === 'low' ? 'selected' : ''}}>Low</option>
                    <option value="medium" {{ request('priority') === 'medium' ? 'selected' : ''}}>Medium</option>
                    <option value="high" {{ request('priority') === 'high' ? 'selected' : ''}}>High</option>
                </select>
            </div>

            {{-- Submit --}}
            <div>
                <button type="submit"
                    class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-700">
                    Filtrer
                </button>
            </div>

        </form>

        {{-- Task List --}}
        <div class="bg-white rounded-lg shadow-sm overflow-hidden">

            <table class="w-full p-6 divide-y divide-gray-200">
                <thead class="bg-gray-50 text-xs uppercase text-gray-500">
                    <tr>
                        <th class="px-6 py-3 text-left">Titre</th>
                        <th class="px-6 py-3 text-left">Statut</th>
                        <th class="px-6 py-3 text-left">Priorité</th>
                        <th class="px-6 py-3 text-left">Deadline</th>
                        <th class="px-6 py-3 text-right">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100 text-sm">

                    @forelse ($tasks as $task)
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-800">
                                {{ $task->title }}
                            </td>

                            <td class="px-6 py-4">
                                <span
                                    class="px-2 py-1 rounded-full text-xs
                                    @if ($task->status === 'todo') bg-gray-200 text-gray-700
                                    @elseif($task->status === 'in_progress') bg-blue-100 text-blue-700
                                    @else bg-green-100 text-green-700 @endif
                                ">
                                    {{ ucfirst(str_replace('_', ' ', $task->status)) }}
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <span
                                    class="px-2 py-1 rounded-full text-xs
                                    @if ($task->priority === 'low') bg-green-100 text-green-700
                                    @elseif($task->priority === 'medium') bg-yellow-100 text-yellow-700
                                    @else bg-red-100 text-red-700 @endif
                                ">
                                    {{ ucfirst($task->priority) }}
                                </span>
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                {{ $task->deadline?->format('d M Y') }}
                            </td>

                            <td class="px-6 py-4 text-right space-x-2">
                                <a href="#" class="text-indigo-600 hover:underline text-sm">Edit</a>
                                <a href="#" class="text-red-500 hover:underline text-sm">Delete</a>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-6 text-center text-gray-500">
                                Aucune tâche trouvée
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

        </div>

        {{-- Pagination --}}
        <div>
            {{ $tasks->withQueryString()->links() }}
        </div>

    </div>
</x-app-layout>
