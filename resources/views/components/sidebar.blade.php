<div class="fixed inset-y-0 left-0 w-64 bg-white border-r flex flex-col px-8 py-6">

    {{-- Logo --}}
    <h1 class="text-2xl font-bold text-slate-800 mb-10">
        TaskBoard
    </h1>

    {{-- Navigation --}}
    <nav class="flex-1 space-y-3">

        {{-- Board --}}
        <a href="{{ route('tasks') }}"
           class="block w-full px-4 py-3 rounded-xl font-medium
           {{ request()->routeIs('tasks.index')
                ? 'bg-slate-100 text-slate-900'
                : 'text-gray-600 hover:bg-gray-100' }}">
            Board
        </a>

        {{-- Backlog --}}
        <a href="{{ route('backlog.index') }}"
           class="block w-full px-4 py-3 rounded-xl font-medium
           {{ request()->routeIs('backlog.*')
                ? 'bg-slate-100 text-slate-900'
                : 'text-gray-600 hover:bg-gray-100' }}">
            Backlog
        </a>

        {{-- Statistics --}}
        <a href="#"
           class="block w-full px-4 py-3 rounded-xl font-medium
                  text-gray-600 hover:bg-gray-100">
            Statistics
        </a>

    </nav>

    {{-- Logout --}}
    <form method="POST" action="{{ route('logout') }}" class="pt-4">
        @csrf

        <button
            type="submit"
            class="w-full flex items-center gap-3 px-4 py-3 rounded-xl
                   text-gray-600 hover:bg-red-50 hover:text-red-600 transition">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-4 h-4"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor"
                 stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6A2.25 2.25 0 005.25 5.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15" />
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M18 12H9m0 0l3-3m-3 3l3 3" />
            </svg>

            Logout
        </button>
    </form>

</div>
