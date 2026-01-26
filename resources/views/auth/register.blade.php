
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
                    Create your account
                </p>
            </div>

            <!-- Form -->
            <form class="space-y-5">

                <div>
                    <label class="block text-sm font-medium text-slate-700">
                        Name
                    </label>
                    <input
                        type="text"
                        class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-slate-800"
                        placeholder="Your name"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700">
                        Email
                    </label>
                    <input
                        type="email"
                        class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-slate-800"
                        placeholder="you@example.com"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700">
                        Password
                    </label>
                    <input
                        type="password"
                        class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-slate-800"
                        placeholder="••••••••"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700">
                        Confirm Password
                    </label>
                    <input
                        type="password"
                        class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-slate-800"
                        placeholder="••••••••"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full rounded-lg bg-slate-800 py-2.5 text-white font-medium hover:bg-slate-900 transition"
                >
                    Create account
                </button>
            </form>

            <p class="mt-6 text-center text-sm text-slate-500">
                Already have an account?
                <a href="#" class="text-slate-800 font-medium hover:underline">
                    Log in
                </a>
            </p>

        </div>
    </div>
    </x-guest-layout>



