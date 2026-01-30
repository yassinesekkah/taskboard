<header class="bg-white border-b px-6 py-4 flex items-center justify-between">

    <!-- Mobile sidebar button -->
    <button class="md:hidden p-2 rounded-lg hover:bg-gray-100" @click="sidebarOpen = true">
        ☰
    </button>
    <h1 class="text-xl font-semibold text-gray-900">
        My Tasks
    </h1>

    <div class="flex items-center gap-4">
        <form method="GET" action="{{ route('tasks')}}">
            <input type="text" 
                    name="search"
                    value = "{{ request('search')}}" 
                    placeholder="Search tasks..."
                    class="px-4 py-2 rounded-lg bg-gray-100 text-sm
                        focus:outline-none focus:ring-2 focus:ring-slate-800">
        </form>
        <button @click = "openCreate = true"
            class="bg-slate-800 text-white px-4 py-2 rounded-lg
                   text-sm font-medium hover:bg-slate-900">
            + New Task
        </button>
    </div>
</header>
