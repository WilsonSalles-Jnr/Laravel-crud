@extends('layouts.lista')

@section('title', 'Lista de usuários')

@section('content')



@for($i = 0; $i < count($usuarios); $i++)

<tr>
  <td>{{$usuarios[$i]->id}}</td>
  <td>{{$usuarios[$i]->nome}}</td>
  <td>{{$usuarios[$i]->sobrenome}}</td>
  <td>{{$usuarios[$i]->celular}}</td>
  <td>{{$usuarios[$i]->email}}</td>
  <td><a href="http://127.0.0.1:8000/lista/edit/{{$i+1}}" type="button" class="btn btn-primary">editar</a></td>
  <td><a href="http://127.0.0.1:8000/lista/delete/{{$i+1}}" type="button" class="btn btn-danger">excluir</a></td>
</tr>

@endfor

@endsection