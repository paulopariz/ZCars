@extends('layouts.main')

@section('title', 'Cadastrar carro')

@section('content')

<div class="col-md-6 offset-md-3">

    <form action="/cars" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="form-group">
        <label for="title">Marca</label>
            <input type="text" class="form-control" name="marca" placeholder="Ex: FIAT">
        </div>

        <div class="form-group">
        <label for="title">Modelo</label>
            <input type="text" class="form-control" name="modelo" placeholder="Ex: Pulse">
        </div>

        <div class="d-flex gap-4">

            <div class="form-group">
            <label for="title"></label>
                <input type="number" class="form-control" name="ano" placeholder="Ano">
            </div>

            <div class="form-group">
            <label for="title"></label>
                <input type="number" class="form-control" name="km" placeholder="KM">
            </div>

            <div class="form-group">
            <label for="title"></label>
                <input type="number" class="form-control" name="preco" placeholder="Preço">
            </div>

        </div>

        <div class="form-group">
        <label for="title"></label>
            <textarea name="descricao" class="form-control" placeholder="Descrição"></textarea>
        </div>

        <div class="mb-3 form-group">
            <label for="formFile" class="form-label">Escolha uma imagem do carro</label>
            <input class="form-control" name="image" type="file" id="formFile">
        </div>

        <div class="form-group">
            <img class="img-fluid" id="preview" src="" alt="">
        </div>

        <input style="margin-top: 18px" type="submit" class="btn btn-dark" value="Cadastrar Carro">

    </form>
</div>

@endsection
