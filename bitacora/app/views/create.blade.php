@extends('layout')
@section('content')
<div class="page-header" style="border: 1px solid #0077b3;">
    <h1>Agregar profesor nuevo </h1>
</div>
@if ( $errors->count() > 0 )
<div class="alert alert-danger">
    <ul>
        @foreach( $errors->all() as $message )</p>
        <li>{{ $message }}</li>
        @endforeach
    </ul>
</div>
@endif
 <div>
    <a href="{{ URL::to('logout') }}">Logout</a>
 </div>
<form action="{{ action('ProfesoresController@handleCreate') }}" method="post" role="form" >
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" />
    </div>
    <div class="form-group">
        <label for="rfc">RFC</label><br />
        <input type="text" class="form-control" name="rfc" />
    </div>
    <div class="form-group">
        <label for="email">Email</label><br />
        <input type="email" class="form-control" name="email" />
    </div>
    <div class="form-group">
        <label for="cargo">Cargo</label><br />
        <input type="cargo" class="form-control" name="cargo" />
    </div>
        <div class="form-group">
        <label for="password">password</label><br />
        <input type="password" class="form-control" name="password" />
    </div>
    <input type="submit" value="Add" class="btn btn-primary" />
    <a href="{{ action('ProfesoresController@index') }}" class="btn btn-link">Cancelar</a>
</form>

@stop