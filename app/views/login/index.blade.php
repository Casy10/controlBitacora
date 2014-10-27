@layout('layout')
 
@section('titulo')
 
    Login
 
@endsection
 
@section('mensaje')
 
    Login 
 
@endsection
 
 
@section('contenido')
 
     <div class="form">
 
        {{ Form::open('login') }}
 
            @if (Session::has('error_login'))
            <span class="error">Usuario o contraseña incorrectos.</span>
            @endif
     
            {{ Form::label('usuario', 'Usuario') }}
     
            {{ Form::text('usuario') }}
     
            {{ Form::label('password', 'Password') }}
     
            {{ Form::password('password') }}
     
            <br />
            {{ Form::submit('Iniciar sesión') }}
 
        {{ Form::close() }}
        
        @if(Session::has('mensaje'))
 
            <div id="flash_notice">{{ Session::get('mensaje') }}</div>
                     
         @endif
 
    </div>
 
@endsection