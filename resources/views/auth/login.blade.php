<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center px-4">

        <!-- CARD -->
        <div class="w-[420px] bg-white rounded-xl shadow-md p-8">

            <!-- Title -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-slate-800">
                    TaskBoard
                </h1>
                <p class="text-sm text-slate-500 mt-1">
                    Sign in to your account
                </p>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <div>
                    <x-input-label for="email" value='Email' />
                    <x-text-input
                        id="email"
                        name="email"
                        type="email"
                        :value="old('email')"
                        required
                        autofocus
                        placeholder="you@example.com" />
                    <x-input-error :messages="$errors->get('email')" />
                </div>

                <div>
                    <x-input-label for="password" value='Password' />
                    <x-text-input
                        id="password"
                        type="password"
                        name="password"
                        required
                        placeholder="••••••••" />
                    <x-input-error :messages="$errors->get('password')" />
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 text-slate-600">
                        <input type="checkbox" name="remember" class="rounded border-slate-300">
                        Remember me
                    </label>

                    <a href="{{ route('password.request') }}" class="text-slate-800 hover:underline">
                        Forgot password?
                    </a>
                </div>

                <x-primary-button>
                    Log in
                </x-primary-button>
            </form>

            <p class="mt-6 text-center text-sm text-slate-500">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-slate-800 font-medium hover:underline">
                    Create one
                </a>
            </p>

        </div>
    </div>

</x-guest-layout>