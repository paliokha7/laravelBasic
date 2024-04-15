<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', ['cars' => $cars]);
    }
    

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer|min:1900|max:' . date('Y')
        ]);

        $car = Car::create($validatedData);
        
        return redirect()->route('cars.index')->with('success', 'Car created successfully.');
    }

    public function filter(Request $request)
    {
        $brand = $request->input('brand');
    
        $filteredCars = collect(Car::$cars);
    
        if ($brand) {
            $filteredCars = $filteredCars->where('brand', $brand);
        }
    
        $filteredCars = $filteredCars->map(function ($car) {
            return (object)$car;
        });
    
        return view('cars.index', ['cars' => $filteredCars]);
    }
    
    


}
