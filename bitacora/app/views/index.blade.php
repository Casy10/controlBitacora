@extends('layout')
@section('content')
<div class="page-header">
    <h1>Profesores</h1>
</p></div>
<div class="panel panel-default">
    <div class="panel-body">
        <a href="{{ action('ProfesoresController@create') }}" class="btn btn-info">Agregar profesores</a>
    </div>
</div>
@if ($profesores->isEmpty())
No hay profesores! :(
@else
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>RFC</th>
            <th>Email</th>
            <th>Cargo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($profesores as $profesor)
        <tr>
            <td>{{ $profesor->name }}</td>
            <td>{{ $profesor->rfc }}</td>
            <td>{{ $profesor->email }}</td>
            <td>{{ $profesor->cargo }}</td>     
            <td>
                <a href="{{ action('ProfesoresController@edit', $profesor->id) }}" class="btn btn-info">Editar</a>

                <a href="{{ action('ProfesoresController@delete', $profesor->id) }}" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@stop