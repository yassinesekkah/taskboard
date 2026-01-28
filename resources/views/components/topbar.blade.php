<nav class="bg-white border-b">
    <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">

        {{-- Left: Team name --}}
        <h1 class="text-lg font-semibold text-gray-900">
            Team Seven
        </h1>

        {{-- Center: Search --}}
        <div class="flex-1 flex justify-center">
            <div class="relative w-full max-w-md">
                <input
                    type="text"
                    placeholder="Search"
                    class="w-full pl-10 pr-4 py-2 rounded-lg bg-gray-100 text-sm
                           focus:outline-none focus:ring-2 focus:ring-slate-800"
                >
                <span class="absolute left-3 top-2.5 text-gray-400">🔍</span>
            </div>
        </div>

        {{-- Right: Members + Invite --}}
        <div class="flex items-center gap-4">

            {{-- Avatars --}}
            <div class="flex items-center gap-2">
                <div class="flex -space-x-2">
                    <img class="w-8 h-8 rounded-full border" src="https://i.pravatar.cc/32?img=1">
                    <img class="w-8 h-8 rounded-full border" src="https://i.pravatar.cc/32?img=2">
                    <img class="w-8 h-8 rounded-full border" src="https://i.pravatar.cc/32?img=3">
                    <span class="w-8 h-8 flex items-center justify-center bg-yellow-400
                                 text-xs font-semibold rounded-full border">
                        +11
                    </span>
                </div>
                <span class="text-sm text-gray-600">
                    14 Members
                </span>
            </div>

            {{-- Invite --}}
            <button
                class="bg-blue-600 hover:bg-blue-700 text-white text-sm
                       px-4 py-2 rounded-lg font-medium">
                Invite
            </button>
        </div>

    </div>
</nav>
