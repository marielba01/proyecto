<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <head>
      <meta charset="utf-8">
      <title>Por Enviar</title>
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/click.css') }}" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
  </head>
  <body style="padding: 10% 25%;">
    <div class="alert alert-dark" style="border-color: black; ">
    <div class="row" style="margin: 4% 0%;">
        <div class="col">
            <h1>¿Verificó que la información suministrada por sistema, coincide con la que usted posee ?</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('porenviar.update', $enviar-> id) }}" method="POST" >
                {{-- @csrf
                @method('put') --}}
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <button class="btn btn-primary" type="submit" ><i class="fa fa-floppy-o" ></i>Aceptar</button>
                <a class="btn btn-secondary" href="{{ route('porenviar.index') }}"><i class="fa fa-undo" ></i>Atras</a>
            </form>
        </div>
    </div>
    </div>
  </body>
</html>
