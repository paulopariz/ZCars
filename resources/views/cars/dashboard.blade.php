@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1">
        <h1>xxx</h1>

    </div>
    <div class="col-md-10 offset-md-1">
        @if(count($cars) > 0)
        <table class="table">

                <a href="/cars/create" class="btn btn-dark">Create</a>

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Carro</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cars as $car)
                    <tr>
                        <td scropt="row">{{ $loop->index + 1 }}</td>
                        <td><a href="/cars/{{ $car->id }}">{{ $car->marca }}</a></td>
                        <td>
                            <a href="/cars/edit/{{ $car->id }}" class="btn btn-info">Editar</a>
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
