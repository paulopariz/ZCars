<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;

class CarsController extends Controller
{
    public function index() {

        $cars = Car::all();

        return view('welcome', ['cars' => $cars]);
    }

    public function create(){
        return view('cars.create');
    }
}
