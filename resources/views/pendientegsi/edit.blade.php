<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pendiente GSI</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body style="padding: 10% 25%;">
    <div class="alert alert-dark" style="border-color: black; ">
    <div class="row" style="margin: 4% 0%;">
        <div class="col">
            <h1>¿Esta seguro de Liberar el lote N° {{ $pendiente->id }} ?</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('pendientegsi.update', $pendiente-> id) }}" method="POST" >
                {{-- @csrf
                @method('put') --}}
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="status"> <h4 >Estatus:</h4> </label>
                    <input type="text" class="form-control" id="status" name="status" style="border-color: black;">
                </div>
                <button class="btn btn-primary" type="submit" >Aceptar</button>
                <a class="btn btn-secondary" href="{{ route('pendientegsi.index') }}">Back</a>
            </form>
        </div>
    </div>
    </div>
  </body>
</html>
