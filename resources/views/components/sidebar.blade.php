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

</div>
