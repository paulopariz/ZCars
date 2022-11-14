@extends('layouts.main')

@section('title', 'Editando: ' . $car->marca)

@section('content')

<div class="col-md-6 offset-md-3">

    <form action="/cars/update/{{ $car->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="title">Imagem</label>
            <input type="file" id="image" name="image" class="from-control-file">
            <img src="/img/cars/{{ $car->image }}" alt="">
        </div>

        <div class="form-group">
        <label for="title">Marca</label>
            <input type="text" class="form-control" name="marca" placeholder="Marca" value="{{ $car->marca }}">
        </div>

        <div class="form-group">
        <label for="title">Ano</label>
            <input type="text" class="form-control" name="ano" placeholder="Ano" value="{{ $car->ano }}">
        </div>


        <div class="form-group">
        <label for="title">Descrição</label>
            <textarea name="descricao" class="form-control" placeholder="descricao">{{ $car-> descricao }}</textarea>
        </div>        
        
        <input type="submit" class="btn btn-primary" value="Salvar">
        
    </form>
</div>

@endsection