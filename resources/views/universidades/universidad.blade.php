@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Universidad: {{$universidad->nombre}}</h2>
  <h3>Pais: {{$universidad->pais}}</h3>
  <h3>Proyectos:</h3>
  <ul>
  	@foreach($universidad->proyecto as $up)
  		<li><a href="/proyecto/{{$up->id}}">{{$up->nombre}}</a></li>
  	@endforeach
  </ul>
@endsection
