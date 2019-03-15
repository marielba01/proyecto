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
                           <!-- <th class="text-center">Detalles</th> -->
                       </tr>
                  </thead>
                @foreach ($cargado as $car)
                    <tr>
                      <td>{{ $car -> id }}</td>
                      <td>{{ $car -> proveedor }}</td>
                      <td>{{ $car -> valor_facial }}</td>
                      <td>{{ $car -> tiraje }}</td>
                      <td>{{ $car -> cod_motivo }}</td>
                      <td>{{ $car -> motivo }}</td>
                      <td>{{ $car -> orden_compra }}</td>
                      <td>{{ $car -> status }}</td>
                      <!-- <td><a href="{{ route('cargado.edit', $car -> id) }}" class="btn btn-primary">Detalles</a></td> -->
                    </tr>
            @endforeach
            </table>
            </div>
          </div>
        </div>

@endsection
