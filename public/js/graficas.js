$(document).ready(function(){


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
      var liberado = graficarTipoOperacionGrafica("Liberar", anio);
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
        data: liberado

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
        text: 'Graficos por Mes - Estatus'
      },
      subtitle: {
        text: 'Fuente: GSOS, CANTV'
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
    var tipo = $('#tipo').val();;
    var anio = $('#anio').val();;
    graficar(tipo, anio);
  })


  // graficas por año

  function graficarTipoOperacionGraficaAnio(tipo1, anio1){
    var url = 'api/graficas_anio' + '/' + tipo1 + '/' + anio1 + '/';
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

  function graficar1(tipo1, anio1){

    var series1 = [];

    if(tipo1 == '' || tipo1 == 'Todos'){

      var categorias = [];
      var enviar = [];
      var cargar = [];
      var cargado = [];
      var liberado = [];


      var cas00 = graficarTipoOperacionGraficaAnio("Por Enviar", anio1);
      var cas01 = graficarTipoOperacionGraficaAnio("Por Cargar", anio1);
      var cas02 = graficarTipoOperacionGraficaAnio("Cargado", anio1);
      var cas03 = graficarTipoOperacionGraficaAnio("Liberar", anio1);

      $.each(cas00, function(i, item){
        enviar.push(item.cantidad)
      });

      $.each(cas01, function(i,item){
        cargar.push(item.cantidad)
      });

      $.each(cas02, function(i,item){
        cargado.push(item.cantidad)
      });

      $.each(cas03, function(i,item){
        categorias.push(item.ano)
        liberado.push(item.cantidad)
      });

      series1 = [{
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
        data: liberado

      }]
    }
    else{

      if(tipo1 == "Por Enviar"){

        var categorias = [];
        var enviar = [];

        var cas00 = graficarTipoOperacionGraficaAnio("Por Enviar", anio1);

        $.each(cas00, function(i,item){
          categorias.push(item.ano)
          enviar.push(item.cantidad)
        });

        series1 = [{
          name: 'Por Enviar',
          data: enviar

        }]
      }

      if(tipo1 == "Por Cargar"){

        var categorias = [];
        var cargar = [];

        var cas01 = graficarTipoOperacionGraficaAnio("Por Cargar", anio1);

        $.each(cas01, function(i,item){
          categorias.push(item.ano)
          cargar.push(item.cantidad)
        });

        series1 = [{
          name: 'Por Cargar',
          data: cargar

        }]
      }

      if(tipo1 == "Cargado"){

        var categorias = [];
        var cargado = [];

        var cas02 = graficarTipoOperacionGraficaAnio("Cargado", anio1);

        $.each(cas02, function(i,item){
          categorias.push(item.ano)
          cargado.push(item.cantidad)
        });

        series1 = [{
          name: 'Cargado',
          data: cargado

        }]
      }

      if(tipo1 == "Liberar"){

        var categorias = [];
        var liberado = [];

        var cas03 = graficarTipoOperacionGraficaAnio("Liberar", anio1);

        $.each(cas03, function(i,item){
          categorias.push(item.ano)
          liberado.push(item.cantidad)
        });

        series1 = [{
          name: 'Liberar',
          data: liberado

        }]
      }
    }


    Highcharts.chart('container2', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Graficos por Año - Estatus'
      },
      subtitle: {
        text: 'Fuente: GSOS, CANTV'
      },
      xAxis: {
        categories: categorias,
        crosshair: true
      },
      yAxis: {
        min: 0,
        title: {
          text: 'Estatus'
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
      series: series1
    });
  }

  $('#tipo1, #anio1').on('change', function(){
    var tipo1 = $('#tipo1').val();;
    var anio1 = $('#anio1').val();;
    graficar1(tipo1, anio1);
  })
});
