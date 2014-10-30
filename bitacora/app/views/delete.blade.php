@extends('layout')
@section('content')
<div class="page-header" >
<h1> <small>¿Deseas eliminar a </small>{{ $profesor->name }}<small>?</small></h1>
</div>
<form action="{{ action('ProfesoresController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="profesor" value="{{ $profesor->id }}" />
        <input type="submit" class="btn btn-danger" value="Yes" />
        <a href="{{ action('ProfesoresController@index') }}" class="btn btn-default">No</a>
    </form>
  @stop