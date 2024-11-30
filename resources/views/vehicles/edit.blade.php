@extends('layouts.app')

@section('content')
<h1>Edit Vehicle</h1>
<form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="make">Make:</label>
    <input type="text" name="make" id="make" value="{{ $vehicle->make }}" required><br>

    <label for="model">Model:</label>
    <input type="text" name="model" id="model" value="{{ $vehicle->model }}" required><br>

    <label for="year">Year:</label>
    <input type="text" name="year" id="year" value="{{ $vehicle->year }}" required><br>

    <label for="rental_price">Rental Price:</label>
    <input type="text" name="rental_price" id="rental_price" value="{{ $vehicle->rental_price }}" required><br>

    <label for="available">Available:</label>
    <input type="checkbox" name="available" id="available" {{ $vehicle->available ? 'checked' : '' }}><br>

    <button type="submit">Update Vehicle</button>
</form>
@endsection
