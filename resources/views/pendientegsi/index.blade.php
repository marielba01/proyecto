@extends('layouts.app2')

@extends('menu')

@section('content')

          <div class="container" style="margin-top: 5%">
            <div class="row">
              <div class="col">
                <div class="page-header">


                      {{Form::open(['route' => 'pendientegsi.index', 'method'=> 'GET', 'class' => 'form-inline pull-right'])}}
                        <div clas="form-group">
                          {{Form::text('proveedor', null, ['class' => 'form-control', 'placeholder' =>'Proveedor'])}}
                        </div>
                        <div clas="form-group">
                          {{Form::number('orden_compra', null, ['class' => 'form-control', 'placeholder' =>'Orden de Compra'])}}
                        </div>
                        <div clas="form-group">
                          <button type="submit" class="btn btn-default">
                              <span class="glyphicon glyphicon-search"></span> Buscar
                          </button>

                        </div>
                      {!! Form::Close() !!}
                </div>
                <table class="table table-striped table-bordered" style="width:90%; margin-left:1%; background:#fafafa">
                  <thead class="encabezadotabla">
                       <tr>
                           <th class="text-center">ID</th>
                           <th class="text-center">Proveedor</th>
                           <th class="text-center">Valor Facial</th>
                           <th class="text-center">Tiraje </th>
                           <th class="text-center">Codigo Motivo</th>
                           <th class="text-center">Motivo</th>
                           <th class="text-center">Orden de Compra</th>
                           <th class="text-center">Status</th>
                           <th class="text-center">Detalles</th>
                       </tr>
                  </thead>
                @foreach ($pendiente as $pend)
                    <tr>
                      <td>{{ $pend -> id }}</td>
                      <td>{{ $pend -> proveedor }}</td>
                      <td>{{ $pend -> valor_facial }}</td>
                      <td>{{ $pend -> tiraje }}</td>
                      <td>{{ $pend -> cod_motivo }}</td>
                      <td>{{ $pend -> motivo }}</td>
                      <td>{{ $pend -> orden_compra }}</td>
                      <td>{{ $pend -> status }}</td>
                      <td ><a href="{{ route('pendientegsi.edit', $pend -> id) }}" class="btn btn-primary">Editar</a></td>
                    </tr>
            @endforeach
            </table>
              <ul class="pagination" role="navigation">
                {{ $pendiente->render()}}
              </ul>
            </div>
          </div>
        </div>

@endsection
