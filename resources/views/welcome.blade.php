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
            <a class="fs-2 fw-bold text-white m-auto text-decoration-none" href="#cars">
                COMPRAR
            </a>
        </div>
    </div>

    <div>
            <h2>Buscar por carro</h2>

        <form action="/" method="GET">
            <div class="input-group mb-3" style="margin-top: 1rem">
                <span class="input-group-text text-white" id="basic-addon1"><i class="bi bi-search"></i></span>
                <input style="max-width: 270px" type="text" class="form-control" name="search" placeholder="Pesquisar carro" aria-describedby="basic-addon1">
            </div>
        </form>

    </div>


    <div id="cars">
        <div class="container text-center" style="margin-top: 7rem; margin-bottom: 7rem;">

            <div class="row row-cols-3">

                @foreach($cars as $car)

              <div class="col" style="margin-bottom: 5rem;">

                <div class="card" style="width: 20rem;  overflow: hidden;">
                    <div style="position: relative; height: 180px; overflow: hidden;">
                        <a href="/cars/{{ $car->id }}">
                            <img src="/img/cars/{{ $car->image }}" class="card-img-top img-car" alt="...">
                        </a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $car->marca }} {{ $car->modelo }}</h5>

                      <div class="d-flex justify-content-center gap-5" style="margin-top:1.2rem;">
                          <p class="card-text fw-bold text-black-50">{{ $car->ano }}</p>
                          <p class="card-text fw-bold text-black-50">{{ $car->km }} KM</p>
                      </div>

                      <div class="d-flex align-items-center justify-content-center  gap-5">
                          <p class="fs-4 fw-bold" style="margin-top: 17px;">R$ {{ $car->preco }} </p>
                          <a href="/cars/{{ $car->id }}" class="fs-4 d-flex align-items-center text-decoration-none text-danger">Ver<i class="bi bi-arrow-right-short fs-2 text-danger"></i></a>
                      </div>
                    </div>
                </div>

              </div>
              @endforeach


            </div>

          </div>


          @if(count($cars) ==0 && $search)
              <p class="fs-4">{{ $search }} não encontrado</p>
          @elseif(count($cars) == 0)
              <p>Não há carros registrados</p>
          @endif

    </div>


</main>
@endsection
