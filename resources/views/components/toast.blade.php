@if (session('success') || session('error'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 3000)"
        x-show="show"
        x-transition
        class="fixed bottom-6 left-6 z-50"
    >
        <div
            class="px-5 py-3 rounded-lg shadow-lg text-white text-sm
                {{ session('success') ? 'bg-green-600' : 'bg-red-600' }}"
        >
            {{ session('success') ?? session('error') }}
        </div>
    </div>
@endif
