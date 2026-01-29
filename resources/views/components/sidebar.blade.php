<div class="h-full flex flex-col px-8 py-6">

    <h1 class="text-2xl font-bold text-slate-800 mb-8">
        TaskBoard
    </h1>

    <nav class="flex-1 space-y-3">
        <a class="block w-full px-4 py-3 rounded-xl
                  bg-slate-100 text-slate-900 font-medium">
            Tasks
        </a>

        <a class="block w-full px-4 py-3 rounded-xl
                  text-gray-600 hover:bg-gray-100">
            Team
        </a>

        <a class="block w-full px-4 py-3 rounded-xl
                  text-gray-600 hover:bg-gray-100">
            Settings
        </a>
    </nav>

    <div class="pt-6 border-t text-sm text-gray-500">
        Logged as
        <div class="font-medium text-gray-800">
            {{ auth()->user()->name }}
        </div>
    </div>
    <form method="POST" action="{{ route('logout') }}" class="px-4 py-4 border-t">
    @csrf

    <button
        type="submit"
        class="w-full flex items-center gap-3 px-3 py-2 rounded-lg
               text-gray-600 hover:bg-red-50 hover:text-red-600 transition">

        <!-- Logout icon -->
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
