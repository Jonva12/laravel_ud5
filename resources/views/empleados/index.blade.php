@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre/Apellido</th>
      <th>Departamento</th>
      <th>Responsable del proyecto</th>
    </tr>
    @foreach($empleados as $e)
    	<tr>
      		<td><a href="/empleado/{{$e->id}}">{{$e->id}}</a></td>
      		<td>{{$e->nombre}}</td>
          @if(isset($e->departamento))
          <td><a href="/departamento/{{$e->departamento->id}}">{{$e->departamento->nombre}}</td>
          @else
          <td></td>
          @endif
          @if(isset($e->proyecto))
          <td><a href="/proyecto/{{$e->proyecto->id}}">{{$e->proyecto->nombre}}</td>
          @else
          <td></td>
          @endif
    	</tr>
    @endforeach
  </table>

@endsection
