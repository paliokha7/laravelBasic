<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['brand', 'model', 'year'];

    public static $cars = [
        ['brand' => 'Toyota', 'model' => 'Camry', 'year' => 2020],
        ['brand' => 'Honda', 'model' => 'Accord', 'year' => 2019],
        ['brand' => 'Ford', 'model' => 'Mustang', 'year' => 2018],
        ['brand' => 'Chevrolet', 'model' => 'Camaro', 'year' => 2021]
    ];
    

    public static function all($columns = ['*'])
    {
        return collect(self::$cars)->map(function ($car, $id) {
            $car['id'] = $id; 
            return new static($car);
        });
    }
    public static function create(array $attributes = [])
    {
        $car = new static($attributes);
        self::$cars[] = $car->toArray();
        return $car;
    }

    public static function find($id)
    {
        return isset(self::$cars[$id]) ? new static(self::$cars[$id]) : null;
    }
}
