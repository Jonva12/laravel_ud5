@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')
@if(isset($empleado))
  <h2>Empleado: {{$empleado->nombre}}</h2>
  <h3>Responsable del proyecto: <a href="/proyecto/{{$empleado->proyecto->id}}">{{$empleado->proyecto->nombre}}</a></h3>
  <h3>Colabora en los siguientes proyectos:</h3>
  <ul>
  	@foreach($empleado->proyectos as $ep)
  		<li><a href="/proyecto/{{$ep->id}}">{{$ep->nombre}}</a></li>
  	@endforeach
  </ul>
@else
<td></td>
@endif
@endsection
