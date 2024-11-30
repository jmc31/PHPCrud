@extends('layouts.app')

@section('content')
<h1>Vehicles</h1>
<a href="{{ route('vehicles.create') }}">Add New Vehicle</a>

<table>
    <thead>
        <tr>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
            <th>Rental Price</th>
            <th>Availability</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->make }}</td>
                <td>{{ $vehicle->model }}</td>
                <td>{{ $vehicle->year }}</td>
                <td>${{ $vehicle->rental_price }}</td>
                <td>{{ $vehicle->available ? 'Available' : 'Not Available' }}</td>
                <td>
                    <a href="{{ route('vehicles.show', $vehicle->id) }}">View</a>
                    <a href="{{ route('vehicles.edit', $vehicle->id) }}">Edit</a>
                    <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
