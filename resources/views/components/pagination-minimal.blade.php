@if ($paginator->hasPages())
    <nav class="relative flex items-center justify-center gap-3 text-gray-600 text-sm">

        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-1.5 opacity-30 cursor-not-allowed text-lg">‹</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-1.5 rounded-lg hover:bg-gray-200 text-lg">
                ‹
            </a>
        @endif

        {{-- Current page + dropdown --}}
        <div x-data="{ open: false }" class="relative">

            <button @click="open = !open" class="px-4 py-1.5 rounded-lg bg-slate-800 text-white font-medium">
                {{ $paginator->currentPage() }}
            </button>

            <!-- Dropdown -->
            <div x-show="open" x-transition @click.outside="open = false"
                class="absolute bottom-full mb-2 left-1/2 -translate-x-1/2
           bg-white shadow-lg rounded-lg border
           max-h-40 overflow-y-auto no-scrollbar z-50">

                @for ($page = 1; $page <= $paginator->lastPage(); $page++)
                    <a href="{{ $paginator->url($page) }}"
                        class="block px-4 py-2 text-sm
                            {{ $page == $paginator->currentPage() ? 'bg-slate-100 font-semibold' : 'hover:bg-gray-100' }}">
                        P{{ $page }}
                    </a>
                @endfor
            </div>

        </div>

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-1.5 rounded-lg hover:bg-gray-200 text-lg">
                ›
            </a>
        @else
            <span class="px-3 py-1.5 opacity-30 cursor-not-allowed text-lg">›</span>
        @endif

    </nav>
@endif
