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
  <td><a href="/lista/edit/{{$usuarios[$i]->id}}" type="button" class="btn btn-primary">editar</a></td>
  <td><a href="/lista/delete/{{$usuarios[$i]->id}}" type="button" class="btn btn-danger">excluir</a></td>
</tr>

@endfor
@endsection

@section('noUser')
@if (count($usuarios) < 1)
<section class="zero-user">
  <p>Nenhum usuário registrado:</p>
  <a href="/lista/edit" class="ml-3">criar usuário</a>
</section>
@endif
@endsection