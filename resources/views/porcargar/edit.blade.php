
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <head>
      <meta charset="utf-8">
      <title>Por Cargar</title>
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/click.css') }}" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
  </head>
  <body style="padding: 10% 25%;">
    <div class="alert alert-dark" style="border-color: black; ">
    <div class="row" style="margin: 4% 0%;">
        <div class="col">
            <h1>¿Desea Cambiar el Estatus del ID N° {{ $cargar->id }} ?</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('porcargar.update', $cargar-> id) }}" method="POST" >
                {{-- @csrf
                @method('put') --}}
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group row">
                    <label for="status" class="ml-4"> <h4 >Estatus:</h4> </label>

                    <div class="col-lg-3">
                      <input type="text" value="Cargado" readonly class="form-control" id="status" name="status" style="border-color: black;">
                    </div>

                </div>
                <button class="btn btn-primary" type="submit" ><i class="fa fa-floppy-o" ></i>Aceptar</button>
                <a class="btn btn-secondary" href="{{ route('porcargar.index') }}"><i class="fa fa-undo" ></i> Atras</a>
            </form>
        </div>
    </div>
    </div>
  </body>
</html>
