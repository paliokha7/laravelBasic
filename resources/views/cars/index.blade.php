@extends('layouts.app')

@section('title', 'List of Cars')

@section('content')
    <h1>List of Cars</h1>
    
    <ul>
        @foreach($cars as $car)
        <li>
            {{ $car->brand }} - {{ $car->model }} ({{ $car->year }})
        </li>
        @endforeach
    </ul>

    <a href="{{ route('cars.create') }}">Add New Car</a>
    
    <form action="{{ route('cars.filter') }}" method="GET">
        <label for="brand">Brand:</label>
        <input type="text" name="brand" id="brand">
        <button type="submit">Filter</button>
    </form>
@endsection