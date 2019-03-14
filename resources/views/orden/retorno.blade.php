@extends('layouts.app')

@extends('menu')

@section('content')
            <div class="content">
                <div class="title m-b-md" style=" text-align: center; margin:2% 0%">
                    <h1>Estas en vista de Pendiente por GSI</h1>

                </div>
            </div>
          <div class="container">
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
                @foreach ($compra as $com)
                    <tr>
                      <td>{{ $com -> id }}</td>
                      <td>{{ $com -> proveedor }}</td>
                      <td>{{ $com -> valor_facial }}</td>
                      <td>{{ $com -> tiraje }}</td>
                      <td>{{ $com -> cod_motivo }}</td>
                      <td>{{ $com -> motivo }}</td>
                      <td>{{ $com -> orden_compra }}</td>
                      <td>{{ $com -> status }}</td>
                    </tr>
            @endforeach
            </table>
            </div>
          </div>
        </div>

@endsection
