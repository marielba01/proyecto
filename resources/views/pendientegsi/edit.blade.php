<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pendiente GSI</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/click.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body style="padding: 15% 25%; background: url(../../svg/fondo.svg);" >
    <div class="alert alert-dark" style="border-color: black; width: 700px">
    <div class="row" style="margin: 4% 0%;">
        <div class="col">
            <h1>¿Esta Seguro de Liberar el lote N° {{ $pendiente->id }} ?</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('pendientegsi.update', $pendiente-> id) }}" method="POST" >
                {{-- @csrf
                @method('put') --}}
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group row">
                    <label for="status" class="ml-4"> <h4 >Estatus:</h4> </label>

                    <div class="col-lg-3">
                      <input type="text" value="Liberado" readonly class="form-control" id="status" name="status" style="border-color: black;">
                    </div>

                </div>
                <button class="btn btn-primary" type="submit" > <i class="fa fa-floppy-o" ></i> Aceptar</button>
                <a class="btn btn-dark" href="{{ route('pendientegsi.index') }}"><i class="fa fa-undo" ></i> Volver</a>
            </form>
        </div>
    </div>
    </div>
  </body>
</html>
