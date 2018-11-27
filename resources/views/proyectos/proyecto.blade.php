@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyecto: {{$proyecto->nombre}}</h2>
  <h3>Titulo: {{$proyecto->titulo}}</h3>
  <h3>Responsable: <a href="/empleado/{{$proyecto->empleado->id}}">{{$proyecto->empleado->nombre}}</a></h3>
  <h3>Colaboradores:</h3>
  <ul>
  	@foreach($proyecto->empleados as $pe)
  		<li><a href="/empleado/{{$pe->id}}">{{$pe->nombre}}</a> Fecha Inicio: {{$pe->pivot->fechainicio}} Fecha Fin: {{$pe->pivot->fechafin}}</li>
  	@endforeach
  </ul>
@endsection
