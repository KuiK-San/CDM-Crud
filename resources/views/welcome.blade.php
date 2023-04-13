@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
<h3 class="center-align">Registros</h3>
<table class="striped centered">
        <thead>
          <tr>
              <th>Titulo</th>
              <th>Descrição</th>
              <th>Ação</th>
          </tr>
        </thead>

        <tbody>
            @foreach($rows as $row)
                <tr>
                    <td>{{$row->title}} </td>
                    <td>{{$row -> description}}</td>
                    <td>
                        <a href="">Delete</a>
                        <a href="">Update</a>
                    </td>
                </tr> 
            @endforeach
        </tbody>
      </table>
@endsection