@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto px-4 py-10 sm:px-6 lg:px-8">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow p-6 sm:p-8 dark:bg-neutral-800">
            <div class="mb-8 text-center">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-neutral-200">
                    {{ $vehicle->make }} {{ $vehicle->model }}
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                    Vehicle Details
                </p>
            </div>

            <div class="space-y-4">
                <!-- Year -->
                <div>
                    <h3 class="text-sm text-gray-800 dark:text-neutral-200">Year:</h3>
                    <p class="text-sm text-gray-600 dark:text-neutral-400">{{ $vehicle->year }}</p>
                </div>

                <!-- Rental Price -->
                <div>
                    <h3 class="text-sm text-gray-800 dark:text-neutral-200">Rental Price:</h3>
                    <p class="text-sm text-gray-600 dark:text-neutral-400">${{ $vehicle->rental_price }}</p>
                </div>

                <!-- Availability -->
                <div>
                    <h3 class="text-sm text-gray-800 dark:text-neutral-200">Availability:</h3>
                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                        {{ $vehicle->available ? 'Available' : 'Not Available' }}
                    </p>
                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <a href="{{ route('vehicles.index') }}"
                    class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                    Back to Vehicles
                </a>
            </div>
        </div>
        <!-- End Card -->
    </div>
@endsection
