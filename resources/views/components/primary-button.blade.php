<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full rounded-lg bg-slate-800 py-2.5 text-white font-medium hover:bg-slate-900 transition']) }}>
    {{ $slot }}
</button>
