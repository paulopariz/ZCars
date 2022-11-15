@extends('layouts.main')

@section('title', 'XXXXX')

@section('content')

<main class="container">
    <div class="container d-flex align-items-start gap-4">
        <div>
            <p class="fw-bold title">Encontre o carro<br>
            perfeito para você<span class="text-danger">.</span></p>
        </div>

        <div>
            <img src="img/bannerCar.svg" width="520" alt="">
        </div>
    </div>

    <div class="opcoes">
        <div>
            <img id="img1" src="/img/alto-falante.png" alt="">
            <a class="fs-2 fw-bold text-white m-auto text-decoration-none" href="/cars/create">
                ANUNCIAR
            </a>
        </div>
        <div>
            <img id="img2" src="/img/compra.png" alt="">
            <a class="fs-2 fw-bold text-white m-auto text-decoration-none" href="#">
                COMPRAR
            </a>
        </div>
    </div>
</main>

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
            <p>{{ $car->modelo }}</p>
            <p>{{ $car->km }}</p>
            <p>{{ $car->preco }}</p>
            <a href="/cars/{{ $car->id }}" class="btn btn-primary">Ver</a>
        </div>
    @endforeach

    @if(count($cars) ==0 && $search)
        <p>Não há registros de: {{ $search }} <a href="/">Outras opções</a></p>
    @elseif(count($cars) == 0)
        <p>Não há carros registrados</p>
    @endif


@endsection
