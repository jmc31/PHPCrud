@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto px-4 py-10 sm:px-6 lg:px-8">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow p-6 sm:p-8 dark:bg-neutral-800">
            <div class="mb-8 text-center">
                <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                    Edit Vehicle
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                    Update the vehicle details.
                </p>
            </div>

            <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid sm:grid-cols-12 gap-4 sm:gap-6">
                    <!-- Make -->
                    <div class="sm:col-span-3">
                        <label for="make" class="inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Make
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <input id="make" type="text" name="make" value="{{ $vehicle->make }}"
                            class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 focus:border-blue-500 focus:ring-1"
                            required>
                    </div>

                    <!-- Model -->
                    <div class="sm:col-span-3">
                        <label for="model" class="inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Model
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <input id="model" type="text" name="model" value="{{ $vehicle->model }}"
                            class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 focus:border-blue-500 focus:ring-1"
                            required>
                    </div>

                    <!-- Year -->
                    <div class="sm:col-span-3">
                        <label for="year" class="inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Year
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <input id="year" type="text" name="year" value="{{ $vehicle->year }}"
                            class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 focus:border-blue-500 focus:ring-1"
                            required>
                    </div>

                    <!-- Rental Price -->
                    <div class="sm:col-span-3">
                        <label for="rental_price" class="inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Rental Price
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <input id="rental_price" type="text" name="rental_price" value="{{ $vehicle->rental_price }}"
                            class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 focus:border-blue-500 focus:ring-1"
                            required>
                    </div>

                    <!-- Available -->
                    <div class="sm:col-span-3">
                        <label for="available" class="inline-block text-sm text-gray-800 dark:text-neutral-200">
                            Available
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <input id="available" type="checkbox" name="available"
                            class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            {{ $vehicle->available ? 'checked' : '' }}>
                    </div>
                </div>

                <div class="mt-6 flex justify-end gap-x-2">
                    <button type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                        Cancel
                    </button>
                    <button type="submit"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Update Vehicle
                    </button>
                </div>
            </form>
        </div>
        <!-- End Card -->
    </div>
@endsection
