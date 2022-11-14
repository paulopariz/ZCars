<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;
use App\Models\User;

class CarsController extends Controller
{
    public function index() {

        $search = request('search');

        if($search) {

            $cars = Car::where([
                ['marca', 'like', '%'.$search.'%']
            ])->get();

        }
        else{

            $cars = Car::all();

        }

        

        return view('welcome', ['cars' => $cars, 'search' => $search]);
    }

    public function create(){
        return view('cars.create');
    }

    public function store(Request $request) {
        
        $car = new Car;

        $car->marca = $request->marca;
        $car->ano = $request->ano;
        $car->descricao = $request->descricao;

        // Imagem
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/cars'), $imageName);

            $car->image = $imageName;
        }

        $user = auth()->user();
        $car->user_id = $user->id;


        $car->save();

        return redirect('/')->with('msg', 'Carro adicionado');

    }

    public function show($id) {

        $car = Car::findOrFail($id);

        $carOwner = User::where('id', $car->user_id)->first()->toArray();

        return view('cars.show', ['car' => $car, 'carOwner' => $carOwner]);
    }

    public function dashboard(){

        $user = auth()->user();

        $cars = $user->cars;

        return view('cars.dashboard', ['cars' => $cars]);
    }

    public function destroy($id) {

        Car::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Carro excluído!');
    }
}
