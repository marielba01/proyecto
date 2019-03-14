<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Proveedores</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body style="padding: 10% 25%;">
    <div class="alert alert-dark" style="border-color: black; ">
    <div class="row" style="margin: 10% 0%;">
        <div class="col">
            <h1>¿Esta Seguro de Exportar el Lote correspondiente al ID N°: {{ $compra->id }} ?</h1>
        </div>
    </div>
    
    <div>
        <button class="btn btn-outline-danger" type="submit" >Exportar Excel</button> 
        
        <button class="btn btn-outline-danger" type="submit" style="margin-left: 5%" >Exportar Pdf</button>

        <a class="btn btn-secondary" href="{{ route('ordencompra.index') }}" style="margin-left: 45%">Atras</a>


        
    </div>
    </div>
  </body>

</html>
