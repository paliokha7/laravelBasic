@extends('cars.layouts.app')

@section('title', 'Car Details')

@section('content')
    <div>
        <strong>Brand:</strong> {{ $car->brand }}
    </div>
    <div>
        <strong>Model:</strong> {{ $car->model }}
    </div>
    <div>
        <strong>Year:</strong> {{ $car->year }}
    </div>
    <div>
        <a href="{{ route('cars.index') }}">Back to List</a>
    </div>
@endsection