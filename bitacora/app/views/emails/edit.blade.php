@extends('layout')
@section('content')
<div class="page-header" style="border: 1px solid #0077b3;">
    <h1>Editar usuario</h1>
</div>
<form action="{{ action('UsersController@handleEdit') }}" method="post" role="form">
    <input type="hidden" name="id" value="{{ $user->id }}">
    <div class="form-group">
        <label for="first_name">Nombre</label>
        <input type="text" class="form-control" name="name" value="{{ $user->name }}" />
    </div>
    <div class="form-group">
        <label for="last_name">Nombre de usuario</label>
        <input type="text" class="form-control" name="username" value="{{ $user->username }}" />
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" value="{{ $user->email }}" />
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" name="password" value="{{ $user->password }}" />
    </div>
    <input type="submit" value="Save" class="btn btn-primary" />
    <a href="{{ action('UsersController@index') }}" class="btn btn-link">Cancelar</a>
</form>
@stop