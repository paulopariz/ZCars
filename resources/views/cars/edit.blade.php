@extends('layouts.main')

@section('title', 'Editando: ' . $car->marca)

@section('content')

<div class="col-md-6 offset-md-3">

    <form action="/cars/update/{{ $car->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
        <label for="title">Marca</label>
            <input type="text" class="form-control" name="marca" placeholder="Marca" value="{{ $car->marca }}">
        </div>

        <div class="form-group">
            <label for="title">Modelo</label>
                <input type="text" class="form-control" name="modelo" placeholder="Ex: Pulse" value="{{ $car->modelo }}">
        </div>

        <div class="d-flex gap-4">

            <div class="form-group">
                <label for="title"></label>
                    <input type="text" class="form-control" name="ano" placeholder="Ano" value="{{ $car->ano }}">
                </div>

                <div class="form-group">
                    <label for="title"></label>
                        <input type="number" class="form-control" name="km" placeholder="KM" value="{{ $car->km }}">
                </div>

                <div class="form-group">
                    <label for="title"></label>
                        <input type="number" class="form-control" name="preco" placeholder="Preço" value="{{ $car->preco }}">
                </div>
        </div>

        <div class="form-group">
        <label for="title">Descrição</label>
            <textarea name="descricao" class="form-control" placeholder="descricao">{{ $car-> descricao }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="formFile" class="form-label">Alterar imagem</label>
            <input class="form-control" name="image" type="file" id="formFile">
        </div>

        <div class="form-group">
            <img class="img-fluid" id="preview" src="/img/cars/{{ $car->image }}" alt="">
        </div>

        <input style="margin-top: 18px" type="submit" class="btn btn-dark" value="Atualizar Carro">

    </form>
</div>

@endsection
