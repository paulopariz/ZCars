@extends('layouts.main')

@section('title', $car->marca . $car->modelo )

@section('content')




    <div class="col-md-10 offset-md-1">

        <a href="/" style="width: 100px" class="d-flex gap-1 align-items-center text-decoration-none text-dark mb-5">
            <i class="bi bi-arrow-left-short fs-3"></i>
            <p class="fs-6 mt-3 fw-bold">VOLTAR</p>
        </a>
        <div class="row">
            <div class="col-md-6">
                <img src="/img/cars/{{ $car->image }}" class="img-fluid rounded-3">
            </div>
            <div class="col-md-6">
                <h2 class="text-uppercase fw-bold">{{ $car->marca }} {{ $car->modelo }}</h1>

                <h5 class="mt-4">Descrição</h5>
                <p style="font-size: 14px">{{ $car->descricao }}</p>

                <h1 class="fw-bold">R$ {{ $car->preco }}</h1>

                <button class="btn btn-dark negociar">Negociar</button>
            </div>

            <div class="col-md-12 mt-4">
                <div class="d-flex gap-5">
                    <div class="d-flex gap-3">
                        <i class="bi bi-calendar-event fs-5"></i>
                        <p class="fs-5">{{ $car->ano }}</p>
                    </div>

                    <div class="d-flex gap-3">
                        <i class="bi bi-speedometer2 fs-5"></i>
                        <p class="fs-5">{{ $car->km }} KM</p>
                    </div>

                    <div class="d-flex gap-3">
                        <i class="bi bi-fuel-pump fs-5"></i>
                        <p class="fs-5">{{ $car->combustivel }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
