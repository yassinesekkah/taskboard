<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-4">

        <!-- CARD -->
        <div class="w-[420px] bg-white rounded-xl shadow-md p-8">

            <!-- Title -->
            <div class="bg-slate-800 rounded-t-xl -m-8 mb-8 p-8 text-center">
                <img src="{{ asset('images/logoActra.png') }}" class="mx-auto h-16 w-auto" alt="Actra">

                <p class="text-sm text-slate-300 mt-2">
                    Create your account
                </p>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div>
                    <x-input-label for="name" value="Name" />
                    <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus
                        placeholder="Your name" />
                    <x-input-error :messages="$errors->get('name')" />
                </div>

                <div>
                    <x-input-label for='email' value="Email" />
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required
                        placeholder="you@example.com" />

                    <x-input-error :messages="$errors->get('email')" />
                </div>

                <div>
                    <x-input-label for='password' value="Password" />
                    <x-text-input id="password" type="password" name="password" required placeholder="••••••••" />

                    <x-input-error :messages="$errors->get('password')" />
                </div>

                <div>
                    <x-input-label for='password_confirmation' value="Confirm Password" />
                    <x-text-input id="password_confirmation" type="password" name="password_confirmation" required
                        placeholder="••••••••" />
                </div>

                <x-primary-button>
                    Create account
                </x-primary-button>
            </form>

            <p class="mt-6 text-center text-sm text-slate-500">
                Already have an account?
                <a href="{{ route('login') }}" class="text-slate-800 font-medium hover:underline">
                    Log in
                </a>
            </p>

        </div>
    </div>
</x-guest-layout>
