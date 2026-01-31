<header class="bg-white border-b px-6 py-4 flex items-center justify-between">
    <div class="flex gap-3 items-center">
        <!-- Mobile sidebar button -->
        <button class="lg:hidden p-2 rounded-lg hover:bg-gray-100" @click="sidebarOpen = true">
            ☰
        </button>

        <h1 class="text-xl font-semibold text-gray-800">
            @if (request()->routeIs('backlog.*'))
                Backlog
                <p class="text-sm text-gray-500">
                    All tasks in one place
                </p>
            @elseif (request()->routeIs('tasks'))
                Board
                <p class="text-sm text-gray-500">
                    Visualize task progress
                </p>
            @else
                <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>                
            @endif
        </h1>
    </div>
    <div class="flex items-center gap-4">

        <form method="GET" action="{{ route('tasks') }}" id="searchForm">
            <input type="text" name="search" value = "{{ request('search') }}" placeholder="Search tasks..."
                id="searchInput"
                class="px-4 py-2 rounded-lg bg-gray-100 text-sm
                        focus:outline-none focus:ring-2 focus:ring-slate-800">
        </form>
        <button @click = "openCreate = true"
            class="bg-slate-800 text-white px-4 py-2 rounded-lg
                   text-sm font-medium hover:bg-slate-900  focus:outline-none focus:ring-2 focus:ring-slate-800">
            + New Task
        </button>
    </div>
</header>
