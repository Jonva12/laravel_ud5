@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')
@if(isset($departamento))
  <h2>Departamento: {{$departamento->nombre}}</h2>
  <h3>Codigo: {{$departamento->codigo}}</h3>
  <ul>
  @foreach($departamento->empleados as $de)
  	<li>Empleados: <a href="/empleado/{{$de->id}}">{{$de->nombre}}</a></li>
  @endforeach
	@else
	<li></li>
@endif
  </ul>
@endsection
