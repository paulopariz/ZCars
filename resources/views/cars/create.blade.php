@extends('layouts.main')

@section('title', 'Cadastrar carro')

@section('content')

<div class="col-md-6 offset-md-3">

    <form action="/cars" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="title">Imagen</label>
            <input type="file" id="image" name="image" class="from-control-file">
        </div>

        <div class="form-group">
        <label for="title">Marca</label>
            <input type="text" class="form-control" name="marca" placeholder="Marca">
        </div>

        <div class="form-group">
        <label for="title">Ano</label>
            <input type="text" class="form-control" name="ano" placeholder="Ano">
        </div>


        <div class="form-group">
        <label for="title">Descrição</label>
            <textarea name="descricao" class="form-control" placeholder="descricao"></textarea>
        </div>        
        
        <input type="submit" class="btn btn-primary" value="Salvar">
        
    </form>
</div>

@endsection