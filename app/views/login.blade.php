<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        {{ Form::open(array('url' => '/login')) }}
            {{ Form::label('usuario', 'Nombre de usuario') }}
            {{ Form::text('username'); }}
            {{ Form::label('contraseña', 'Contraseña') }}
            {{ Form::password('password'); }}
            {{ Form::submit('Enviar') }}
        {{ Form::close() }}
    </body>
</html>