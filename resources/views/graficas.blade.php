@extends('layouts.app2')

@extends('menu')

@section('content')


	<script src="{{ asset('Highcharts/code/modules/exporting.js') }}" charset="utf-8"></script>
<script src="{{ asset('Highcharts/code/modules/export-data.js') }}" charset="utf-8"></script>
  	<script src="{{ asset('js/graficas.js') }}" charset="utf-8"></script>


  	<div class="container-fluid">
    <div class="row">
      <div class="col-10 col-md-10 offset-1">
        <br><br>
        <div class="card">
          <div class="card-header">
            <div class="row justify-content-between">
              <div class="col-4 col-md-4">
                <span class="text-left" style="padding-left: 20px;">Gr&aacute;ficas mensuales - Tipo de Estatus</span>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div id="container_tipo_solicitud" class="col-3">
                <div class="form-group">
                  <label for="tipo">Tipo de Solicitud:</label>
                  <select class="form-control tipo" id="tipo">
                    <option value="">Todos</option>
                    <option value="Por Enviar">Por Enviar</option>
                    <option value="Por Cargar">Por Cargar</option>
                    <option value="Cargado">Cargado</option>
                    <option value="Liberar">Liberar</option>
                  </select>
                </div>
              </div>
              <div id="container_estatus_solicitud" class="col-3">
                <div class="form-group">
                  <label for="anio">A&ntilde;o:</label>

                  <select class="form-control anio" id="anio">
										<option value=" ">Seleccione un Año</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="container1" style="width: 90%; height: 500px; margin: 0 auto; margin-top: 50px;"></div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-10 col-md-10 offset-1">
        <br><br>
        <div class="card">
          <div class="card-header">
            <div class="row justify-content-between">
              <div class="col-4 col-md-4">
                <span class="text-left" style="padding-left: 20px;">Gr&aacute;ficas anuales - Tipo de Estatus</span>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div id="container_status" class="col-3">
                <div class="form-group">
                  <label for="tipo1">Seleccione:</label>
                  <select class="form-control tipo1" id="tipo1">
                    <option value="Todos">Todos</option>
                    <option value="Por Enviar">Por Enviar</option>
                    <option value="Por Cargar">Por Cargar</option>
                    <option value="Cargado">Cargado</option>
                    <option value="Liberar">Liberar</option>
                  </select>
                </div>
              </div>
              <div id="container_anio2" class="col-3">
                <div class="form-group">
                  <label for="anio1">A&ntilde;o:</label>
                  <select class="form-control anio1" id="anio1">
                    <option value=" ">Seleccione un Año</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="container2" style="width: 90%; height: 500px; margin: 0 auto; margin-top: 50px;"></div>


@endsection
