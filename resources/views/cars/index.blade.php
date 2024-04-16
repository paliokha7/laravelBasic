@extends('cars.layouts.app')

@section('title', 'List of Cars')

@section('content')
    <h1>List of Cars</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    
    <ul>
    @foreach($cars as $id => $car)
    <li>
        <a href="{{ route('cars.show', ['id' => $id]) }}">
            {{ $car['brand'] }} - {{ $car['model'] }} ({{ $car['year'] }})
        </a>
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