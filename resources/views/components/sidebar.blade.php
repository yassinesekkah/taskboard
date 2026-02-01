<div class="h-full flex flex-col px-6 py-6 bg-slate-900 text-slate-300">

    {{-- Logo --}}
    <div class="flex items-center gap-3 mb-10 px-6">
        <img src="{{ asset('images/logoActra.png') }}" class="h-23 w-32" alt="Taskly">
    </div>

    {{-- Navigation --}}
    <nav class="flex-1 space-y-2">

        <a href="{{ route('dashboard') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl
                  transition
                  {{ request()->routeIs('dashboard') 
                        ? 'bg-slate-800 text-white' 
                        : 'hover:bg-slate-800' }}">
            <span>Dashboard</span>
        </a>

        <a href="{{ route('tasks') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl
                  transition
                  {{ request()->routeIs('tasks*') 
                        ? 'bg-slate-800 text-white' 
                        : 'hover:bg-slate-800' }}">
            <span>Board</span>
        </a>

        <a href="{{ route('backlog.index') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl
                  transition
                  {{ request()->routeIs('backlog.*') 
                        ? 'bg-slate-800 text-white' 
                        : 'hover:bg-slate-800' }}">
            <span>Backlog</span>
        </a>

    </nav>

   <div x-data="{ open: false }" class="relative pt-6 border-t border-slate-800">

    {{-- User button --}}
    <button
        @click="open = !open"
        class="w-full flex items-center justify-between px-4 py-3 rounded-xl
               text-slate-300 hover:bg-slate-800 transition">

        <div class="text-left">
            <p class="text-xs text-slate-400">Logged in as</p>
            <p class="font-medium text-white">
                {{ auth()->user()->name }}
            </p>
        </div>

        {{-- Arrow --}}
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-4 h-4 text-slate-400 transition-transform"
             :class="open ? 'rotate-180' : ''"
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    {{-- Dropdown --}}
    <div
        x-show="open"
        x-transition
        @click.outside="open = false"
        class="absolute bottom-14 left-0 w-full bg-slate-800
               rounded-xl shadow-lg overflow-hidden">

        {{-- Settings --}}
        <a href="{{ route('profile.edit') }}"
           class="block px-4 py-3 text-sm text-slate-300
                  hover:bg-slate-700 transition">
            Settings
        </a>

        {{-- Divider --}}
        <div class="h-px bg-slate-700"></div>

        {{-- Logout --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button
                type="submit"
                class="w-full text-left px-4 py-3 text-sm
                       text-red-400 hover:bg-red-500/10 transition">
                Logout
            </button>
        </form>
    </div>

</div>


</div>
