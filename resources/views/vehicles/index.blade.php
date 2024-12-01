@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-center">Vehicles</h1>
    <a href="{{ route('vehicles.create') }}"
        class="inline-block mb-4 px-4 py-2 bg-red-600 text-white font-semibold text-sm rounded-lg shadow hover:bg-red-600 mx-auto block text-center">Add
        New Vehicle</a>

    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Make
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Model
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Year
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Rental Price
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Availability
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr
                                    class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700">
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $vehicle->make }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                        {{ $vehicle->model }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                        {{ $vehicle->year }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                        ${{ $vehicle->rental_price }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                        {{ $vehicle->available ? 'Available' : 'Not Available' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a href="{{ route('vehicles.show', $vehicle->id) }}"
                                            class="text-blue-600 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400">View</a>
                                        <a href="{{ route('vehicles.edit', $vehicle->id) }}"
                                            class="text-blue-600 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400 ml-4">Edit</a>
                                        <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-600 hover:text-red-800 dark:text-red-500 dark:hover:text-red-400 ml-4">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination links -->
                    <div class="mt-4">
                        {{ $vehicles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
