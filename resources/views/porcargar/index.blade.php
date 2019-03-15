@extends('layouts.app2')

@extends('menu')

@section('content')
<div class="container" style="margin-top: 5%">
  <div class="row">
    <div class="col">
      <table class="table table-striped table-bordered">
        <thead>
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
      @foreach ($cargar as $carg)
          <tr>
            <td>{{ $carg -> id }}</td>
            <td>{{ $carg -> proveedor }}</td>
            <td>{{ $carg -> orden_compra }}</td>
            <td>{{ $carg -> tiraje }}</td>
            <td>{{ $carg -> valor_facial }}</td>
            <td>{{ $carg -> motivo }}</td>
            <td>{{ $carg -> cod_motivo }}</td>
            <td>{{ $carg -> status }}</td>
            <td><a href="{{ route('porcargar.edit', $carg -> id) }}" class="btn btn-primary">Editar</a></td>
          </tr>
  @endforeach
  </table>
  </div>
</div>
</div>
@endsection
