@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Pais</th>
    </tr>
    @foreach($universidades as $u)
    <tr>
    	<td><a href="/universidad/{{$u->id}}">{{$u->id}}</a></td>
    	<td>{{$u->nombre}}</td>
    	<td>{{$u->pais}}</td>
    </tr>
    @endforeach
  </table>

@endsection