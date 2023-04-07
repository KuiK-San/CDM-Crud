@extends('layouts.main')

@section('title', 'teste')

@section('content')
<table class="striped">
        <thead>
          <tr>
              <th>Titulo</th>
              <th>Descrição</th>
              <th>Ação</th>
          </tr>
        </thead>

        <tbody>
            @foreach($rows -> $row)
                <tr>
                    <td>{{$row->'title'}} </td>
                    <td>{{$row->'descrição'}} </td>
                    <td>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection