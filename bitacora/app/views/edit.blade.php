@extends('layout')
@section('content')
<div class="page-header">
    <h1>Editar profesor</h1>
</div>
<form action="{{ action('ProfesoresController@handleEdit') }}" method="post" role="form">
    <input type="hidden" name="id" value="{{ $profesor->id }}">
    <div class="form-group">
        <label for="first_name">Nombre</label>
        <input type="text" class="form-control" name="name" value="{{ $profesor->name }}" />
    </div>
    <div class="form-group">
        <label for="rfc">RFC</label>
        <input type="text" class="form-control" name="rfc" value="{{ $profesor->rfc }}" />
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" value="{{ $profesor->email }}" />
    </div>
        <div class="form-group">
        <label for="cargo">cargo</label>
        <input type="text" class="form-control" name="cargo" value="{{ $profesor->cargo }}" />
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" name="password" value="{{ $profesor->password }}" />
    </div>
    <input type="submit" value="Save" class="btn btn-primary" />
    <a href="{{ action('ProfesoresController@index') }}" class="btn btn-link">Cancelar</a>
</form>
@stop