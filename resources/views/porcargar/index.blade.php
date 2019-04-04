@extends('layouts.app2')

@extends('menu')

@section('content')
<div class="container" style="margin-top: 5%">
  <div class="row">
    <div class="col">
      <div class="page-header">
            {{Form::open(['route' => 'porcargar.index', 'method'=> 'GET', 'class' => 'form-inline pull-center'])}}
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
                <a href="{{ route('porcargar.index') }}" class="btn btn-light"> <i class="fa fa-refresh"></i></a>
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
            <td><a href="{{ route('porcargar.edit', $carg -> id) }}"><i class="fa fa-pencil"></i> Editar</a></td>
          </tr>
  @endforeach
  </table>
    <ul class="pagination" role="navigation">
        {{ $cargar->render()}}
    </ul>

  </div>
</div>
</div>
@endsection
