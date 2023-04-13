@extends('layouts.main')

@section('title', 'Criar Novo Registro')

@section('content')
<h3 class="center-align">Criar um novo registro</h3>
<form action="/events" method="post">
    @csrf
    
    <div class="input-field">
        <input placeholder="Titulo" id="title" type="text" name="title">
        <label for="title">Insira o Titulo</label>
    </div>

    <div class="input-field">
        <input id="description" type="text" name="description">
        <label for="description">Descrição</label>
    </div>

    <div class="row">
        <div class="input-field">
            <input type="submit" class="btn" value="Enviar">
        </div>
    </div>
</form>

@endsection