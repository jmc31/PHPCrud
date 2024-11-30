@extends('layouts.app')

@section('content')
<h1>Add New Vehicle</h1>
<form action="{{ route('vehicles.store') }}" method="POST">
    @csrf
    <label for="make">Make:</label>
    <input type="text" name="make" id="make" required><br>

    <label for="model">Model:</label>
    <input type="text" name="model" id="model" required><br>

    <label for="year">Year:</label>
    <input type="text" name="year" id="year" required><br>

    <label for="rental_price">Rental Price:</label>
    <input type="text" name="rental_price" id="rental_price" required><br>

    <label for="available">Available:</label>
    <input type="checkbox" name="available" id="available" checked><br>

    <button type="submit">Create Vehicle</button>
</form>
@endsection
