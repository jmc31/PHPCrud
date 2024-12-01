<x-guest-layout>
    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Forgot password?</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </p>
            </div>

            <div class="mt-5">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Form -->
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="grid gap-y-4">
                        <!-- Email Address -->
                        <div>
                            <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                            <div class="relative">
                                <input type="email" id="email" name="email" :value="old('email')"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    required aria-describedby="email-error">
                                @error('email')
                                    <p class="text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            {{ __('Email Password Reset Link') }}
                        </button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</x-guest-layout>
