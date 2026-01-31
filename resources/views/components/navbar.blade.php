<header
    class="bg-gray-50 border-b border-gray-200
           px-6 py-4 flex items-center justify-between">

    {{-- Left --}}
    <div class="flex gap-4 items-center">

        {{-- Mobile sidebar button --}}
        <button
            class="lg:hidden p-2 rounded-lg
                   text-slate-300 hover:bg-slate-700 hover:text-white
                   transition"
            @click="sidebarOpen = true">
            ☰
        </button>

        <div>
            @if (request()->routeIs('backlog.*'))
                <h1 class="text-xl font-semibold text-gray-900">
                    Backlog
                </h1>
                <p class="text-sm text-slate-400">
                    All tasks in one place
                </p>

            @elseif (request()->routeIs('tasks'))
                <h1 class="text-xl font-semibold text-gray-900">
                    Board
                </h1>
                <p class="text-sm text-slate-400">
                    Visualize task progress
                </p>

            @else
                <h1 class="text-xl font-semibold text-gray-900">
                    Dashboard
                </h1>
                <p class="text-sm text-slate-400">
                    Overview of your productivity
                </p>
            @endif
        </div>

    </div>

    {{-- Right --}}
    <div class="flex items-center gap-4">


        {{-- New Task --}}
  <button
    @click="openCreate = true"
    class="bg-emerald-600/90 text-white px-4 py-2 rounded-lg
           text-sm font-medium
           hover:bg-emerald-600
           focus:outline-none focus:ring-2 focus:ring-emerald-400/60
           transition">
    + New Task
</button>




    </div>
</header>
