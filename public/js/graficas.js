function graficarTipoOperacionGrafica(tipo, anio){
    var url = 'api/graficas' + '/' + tipo + '/' + anio + '/';
    // $.getJSON(url).done(function(data) {
    //   datos = data;
    //   this.inclusion = datos;
    // })
    // .fail(function(jqxhr, textStatus, error) {
    //   var err = textStatus + ", " + error;
    //   console.log("Error obteniendo las series para tipo de operacion: " + err);
    // });
    var resultado = [];
    $.ajax({
      url: url,
      async: false,
      dataType: 'json',
      success: function (data) {
        resultado = data;
      }
    });
    return resultado;
  }

  function graficar(tipo, anio){

    var series = [];

    if(tipo == '' || tipo == 'Todos'){
      var enviar = graficarTipoOperacionGrafica("Por Enviar", anio);
      var cargar = graficarTipoOperacionGrafica("Por Cargar", anio);
      var cargado = graficarTipoOperacionGrafica("Cargado", anio);
      var liberado = graficarTipoOperacionGrafica("Liberado", anio);
      series = [{
        name: 'Por Enviar',
        data: enviar

      }, {
        name: 'Por Cargar',
        data: cargar

      }, {
        name: 'Cargado',
        data: cargado

      }, {
        name: 'Liberar',
        data: Liberado

      }]
    }
    else{

      if(tipo == "Por Enviar"){
        var enviar = graficarTipoOperacionGrafica("Por Enviar", anio);
        series = [{
          name: 'Por Enviar',
          data: enviar

        }]
      }

      if(tipo == "Por Cargar"){
        var cargar = graficarTipoOperacionGrafica("Por Cargar", anio);
        series = [{
          name: 'Por Cargar',
          data: cargar

        }]
      }

      if(tipo == "Cargado"){
        var cargado = graficarTipoOperacionGrafica("Cargado", anio);
        series = [{
          name: 'Cargado',
          data: cargado

        }]
      }

      if(tipo == "Liberar"){
        var liberado = graficarTipoOperacionGrafica("Liberar", anio);
        series = [{
          name: 'Liberar',
          data: liberado

        }]
      }
    }


    Highcharts.chart('container1', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Graficas por mes de Casos Negativos'
      },
      subtitle: {
        text: 'Fuente: Departamento de Fraudes, CANTV'
      },
      xAxis: {
        categories: [
          'Enero',
          'Febrero',
          'Marzo',
          'Abril',
          'Mayo',
          'Junio',
          'Julio',
          'Agosto',
          'Septiembre',
          'Octubre',
          'Noviembre',
          'Diciembre'
        ],
        crosshair: true
      },
      yAxis: {
        min: 0,
        title: {
          text: 'Casos negativos'
        }
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0
        }
      },
      series: series
    });
  }

  $('#tipo, #anio').on('change', function(){
    var tipo = $('#status').val();;
    var anio = $('#anio').val();;
    graficar(tipo, anio);
  })