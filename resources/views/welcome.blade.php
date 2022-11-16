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

    <div>
            <h2>Buscar por carro</h2>

        <form action="/" method="GET">
            <div class="input-group mb-3" style="margin-top: 1rem">
                <span class="input-group-text text-white" id="basic-addon1"><i class="bi bi-search"></i></span>
                <input style="max-width: 270px" type="text" class="form-control" name="search" placeholder="Pesquisar carro" aria-describedby="basic-addon1">
            </div>
        </form>

    </div>

    <div>
        <div class="container text-center" style="margin-top: 5rem;">
            <div class="row">
              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/cars/x.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Chevrolet S10</h5>

                      <div class="d-flex justify-content-center gap-5" style="margin-top:1.2rem;">
                          <p class="card-text fw-bold text-black-50">2022</p>
                          <p class="card-text fw-bold text-black-50">7000 KM</p>
                      </div>

                      <div class="d-flex align-items-center justify-content-center  gap-5">
                          <p class="fs-4 fw-bold" style="margin-top: 17px;">R$ 75000 </p>
                          <a href="" class="fs-4 d-flex align-items-center text-decoration-none text-danger">Ver<i class="bi bi-arrow-right-short fs-2 text-danger"></i></a>
                      </div>
                    </div>
                </div>
              </div>


                    <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/cars/x.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Chevrolet S10</h5>

                      <div class="d-flex justify-content-center gap-5" style="margin-top:1.2rem;">
                          <p class="card-text fw-bold text-black-50">2022</p>
                          <p class="card-text fw-bold text-black-50">7000 KM</p>
                      </div>

                      <div class="d-flex align-items-center justify-content-center  gap-5">
                          <p class="fs-4 fw-bold" style="margin-top: 17px;">R$ 75000 </p>
                          <a href="" class="fs-4 d-flex align-items-center text-decoration-none text-danger">Ver<i class="bi bi-arrow-right-short fs-2 text-danger"></i></a>
                      </div>
                    </div>


                </div>
              </div>


                    <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/cars/x.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Chevrolet S10</h5>

                      <div class="d-flex justify-content-center gap-5" style="margin-top:1.2rem;">
                          <p class="card-text fw-bold text-black-50">2022</p>
                          <p class="card-text fw-bold text-black-50">7000 KM</p>
                      </div>

                      <div class="d-flex align-items-center justify-content-center  gap-5">
                          <p class="fs-4 fw-bold" style="margin-top: 17px;">R$ 75000 </p>
                          <a href="" class="fs-4 d-flex align-items-center text-decoration-none text-danger">Ver<i class="bi bi-arrow-right-short fs-2 text-danger"></i></a>
                      </div>
                    </div>
                </div>
              </div>

            </div>
          </div>

    </div>





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
        <p class="fs-4">{{ $search }} não encontrado</p>
    @elseif(count($cars) == 0)
        <p>Não há carros registrados</p>
    @endif

</main>
@endsection
