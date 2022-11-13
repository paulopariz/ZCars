@extends('layouts.main')

@section('title', 'XXXXX')

@section('content')

    <form action="/" method="GET">
        <input type="text" name="search" class="form-control" placeholder="Procurar">
    </form>

    @if($search)
    <p>Buscando por: {{ $search }}</p>
    @endif

    @foreach($cars as $car)
        <div>
            <img src="/img/cars/{{ $car->image }}" alt="">
            <p>{{ $car->marca }}</p>
            <p>{{ $car->descricao }}</p>
            <p>{{ $car->ano }}</p>
            <a href="/cars/{{ $car->id }}" class="btn btn-primary">Ver</a>
        </div>
    @endforeach

    @if(count($cars) ==0 && $search)
        <p>Não há registros de: {{ $search }} <a href="/">Outras opções</a></p>
    @elseif(count($cars) == 0)
        <p>Não há carros registrados</p>
    @endif


@endsection