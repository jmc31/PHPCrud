@extends('layouts.guest')

@section('content')
    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Register</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                    Already have an account?
                    <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                        href="{{ route('login') }}">
                        Sign in here
                    </a>
                </p>
            </div>

            <div class="mt-5">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="grid gap-y-4">
                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-sm mb-2 dark:text-white">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                required>
                        </div>
                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                required>
                        </div>
                        <!-- Password Field -->
                        <div>
                            <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                            <input type="password" name="password" id="password"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                required>
                        </div>
                        <!-- Confirm Password Field -->
                        <div>
                            <label for="password_confirmation" class="block text-sm mb-2 dark:text-white">Confirm
                                Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                required>
                        </div>

                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
