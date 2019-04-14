@extends('layouts.app2')

@extends('menu')

@section('content')

          <div class="container" style="margin-top: 5%">
            <div class="row">
              <div class="col">
                <div class="page-header">
                      {{Form::open(['route' => 'cargado.index', 'method'=> 'GET', 'class' => 'form-inline pull-center'])}}
                      <div clas="form-group" >
                        {{Form::text('id', null, ['class' => 'form-control', 'placeholder' =>'ID'])}}
                      </div>

                        <div clas="form-group" >
                          {{Form::text('proveedor', null, ['class' => 'form-control', 'placeholder' =>'Proveedor'])}}
                        </div>

                        <div clas="form-group">
                          {{Form::text('orden_compra', null, ['class' => 'form-control', 'placeholder' =>'Orden de Compra'])}}
                        </div>

                        <div clas="form-group">
                          <button type="submit" class="btn btn-light" >
                              <i class="fa fa-search" ></i>
                          </button>
                          <a href="{{ route('cargado.index') }}" class="btn btn-light"> <i class="fa fa-refresh"></i></a>
                        </div>
                      {!! Form::Close() !!}
                </div>
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
                           <th class="text-center">Fecha</th>
                       </tr>
                  </thead>
                @foreach ($cargado as $car)
                    <tr>
                      <td>{{ $car -> id }}</td>
                      <td>{{ $car -> proveedor }}</td>
                      <td>{{ $car -> orden_compra }}</td>
                      <td>{{ $car -> tiraje }}</td>
                      <td>{{ $car -> valor_facial }}</td>
                      <td>{{ $car -> motivo }}</td>
                      <td>{{ $car -> cod_motivo }}</td>
                      <td>{{ $car -> status }}</td>
                      <td>{{ $car -> updated_at }}</td>
                    </tr>
            @endforeach
            </table>
            <ul id="pagi" role="navigation">
              {{ $cargado->render()}}
            </ul>

            </div>
          </div>
        </div>

@endsection
