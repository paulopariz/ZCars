@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1">
        <h1>xxx</h1>
    </div>
    <div class="col-md-10 offset-md-1">
        @if(count($cars) > 0)
        @else
        <p>Nenhum carro cadastrado por você <a href="/cars/crate">Cadastrar carro</a></p>
        @endif
    </div>

@endsection
