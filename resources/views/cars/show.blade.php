@extends('layouts.main')

@section('title', $car->marca)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div class="col-md-6">
                <img src="/img/cars/{{ $car->image }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <h1>{{ $car->marca }}</h1>
            </div>
            <div class="col-md-12">
                <p>{{ $carOwner['name'] }}</p>
                <h3>Descricao</h3>
                <p> {{ $car->descricao }}</p>
            </div>
        </div>
    </div>


@endsection