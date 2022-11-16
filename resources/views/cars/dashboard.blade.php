@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1">
        <h2 class="text-center fw-bold">Carros cadastrados</h2>

    </div>
    <div class="col-md-10 offset-md-1">
        @if(count($cars) > 0)
        <table class="table table-hover">

                <a href="/cars/create" class="btn btn-dark mt-5 mb-5">Cadastrar novo carro</a>

            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Carro</th>
                    <th scope="col">Ano</th>
                    <th scope="col">KM</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ações</th>

                </tr>
            </thead>
            <tbody>
                @foreach($cars as $car)
                    <tr>
                        <td scropt="row">{{ $loop->index + 1 }}</td>
                        <td><a href="/cars/{{ $car->id }}">{{ $car->marca }} {{ $car->modelo }}</a></td>

                        <td>{{ $car->ano }}</td>
                        <td>{{ $car->km }}</td>
                        <td>{{ $car->preco }}</td>

                        <td class="d-flex gap-3">
                            <a href="/cars/edit/{{ $car->id }}" class="btn btn-dark">Editar</a>
                            <form action="/cars/{{ $car->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



        @else
        <p>Nenhum carro cadastrado por você <a href="/cars/create">Cadastrar carro</a></p>
        @endif
    </div>

@endsection
