@extends('layouts.app')

@section('content')
<h1>{{ $vehicle->make }} {{ $vehicle->model }}</h1>
<p>Year: {{ $vehicle->year }}</p>
<p>Rental Price: ${{ $vehicle->rental_price }}</p>
<p>Availability: {{ $vehicle->available ? 'Available' : 'Not Available' }}</p>
<a href="{{ route('vehicles.index') }}">Back to Vehicles</a>
@endsection
