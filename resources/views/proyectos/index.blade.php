@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Titulo</th>
      <th>Empleado</th>
    </tr>
    @foreach($proyectos as $p)
    <tr>
    	<td><a href="/proyecto/{{$p->id}}">{{$p->id}}</a></td>
    	<td>{{$p->nombre}}</td>
    	<td>{{$p->titulo}}</td>
      @if(isset($p->empleado))
    	<td><a href="/empleado/{{$p->empleado->id}}">{{$p->empleado->nombre}}</td>
      @else
      <td></td>
      @endif
    </tr>
    @endforeach
  </table>

@endsection
