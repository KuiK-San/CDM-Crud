@extends('layouts.main')

@section('title', 'Criar Novo Registro')

@section('content')
<h3 class="center-align">Criar um novo registro</h3>
<form action="/create" method="post">
    <div class="input-field">
        <input placeholder="Titulo" id="title" type="text" name="title">
        <label for="title">Insira o Titulo</label>
    </div>
    <div class="row">
        <div class="input-field">
          <textarea id="description" class="materialize-textarea"></textarea>
          <label for="description">Descrição</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field">
            <input type="submit" class="btn" value="Enviar">
        </div>
    </div>
</form>

@endsection