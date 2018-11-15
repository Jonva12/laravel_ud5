@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>


  <table>
    <tr>
      <th>Id</th>
      <th>Codigo</th>
      <th>Nombre</th>
    </tr>
    @foreach($departamentos as $d)
    <tr>
    	<td><a href="/departamento/{{$d->id}}">{{$d->id}}</a></td>
    	<td>{{$d->codigo}}</td>
    	<td>{{$d->nombre}}</td>
    </tr>
    @endforeach
  </table>

@endsection
