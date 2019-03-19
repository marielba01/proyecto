@extends('layouts.app2')

@extends('menu')

@section('content')
<div class="container" style="margin-top: 5%">
  <div class="row">
    <div class="col">
      <table class="table table-striped table-bordered" style="width:90%; margin-left:1%; background:#fafafa">
        <thead class="encabezadotabla">
             <tr>
                 <th class="text-center">ID</th>
                 <th class="text-center">Proveedor</th>
                 <th class="text-center">Orden de Compra</th>
                 <th class="text-center">Tiraje </th>
                 <th class="text-center">Valor Facial</th>
                 <th class="text-center">Motivo</th>
                 <th class="text-center">Codigo Motivo</th>
                 <th class="text-center">Status</th>
                 <th class="text-center">Detalles</th>
             </tr>
        </thead>
      @foreach ($enviar as $env)
          <tr>
            <td>{{ $env -> id }}</td>
            <td>{{ $env -> proveedor }}</td>
            <td>{{ $env -> orden_compra }}</td>
            <td>{{ $env -> tiraje }}</td>
            <td>{{ $env -> valor_facial }}</td>
            <td>{{ $env -> motivo }}</td>
            <td>{{ $env -> cod_motivo }}</td>
            <td>{{ $env -> status }}</td>
            <td><a href="{{ route('porenviar.edit', $env -> id) }}" class="btn btn-primary">Editar</a></td>
          </tr>
  @endforeach
  </table>
    <ul class="pagination" role="navigation">
      {{ $enviar->render()}}
    </ul>
  </div>

</div>
</div>
@endsection
