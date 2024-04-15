@extends('cars.layouts.app')

@section('title', 'Create New Car')

@section('content')
    <h1>Create New Car</h1>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf

        <label for="brand">Brand:</label>
        <input type="text" name="brand" id="brand" required>
        <br>
        <label for="model">Model:</label>
        <input type="text" name="model" id="model" required>
        <br>
        <label for="year">Year:</label>
        <input type="number" name="year" id="year" required>
        <br>
        <button type="submit">Create Car</button>
    </form>
    <br>
    <a href="{{ route('cars.index') }}">Back to List</a>
@endsection
