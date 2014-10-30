@extends('layout')
@section('content')
<div class="page-header" style="border: 1px solid #0077b3;" >
<h1>Delete {{ $user->title }} <small>Realmente quieres eliminar a este usuario?</small></h1>
</div>
<form action="{{ action('UsersController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="user" value="{{ $user->id }}" />
        <input type="submit" class="btn btn-danger" value="Yes" />
        <a href="{{ action('UsersController@index') }}" class="btn btn-default">No</a>
    </form>
  @stop