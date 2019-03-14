@extends('layouts.app2')

@extends('menu')

@section('content')
    {{-- <div class="content">
        <div class="title m-b-md">
            <h1 style="text-align: center; margin-bottom: 2%">Consulta por Orden de Compra</h1>
        </div>
    </div> --}}

<div class="container">
    <table id="example" class="table table-striped table-bordered" style="width:100%; margin-left:-0.5%; margin-right: 5%">
       <thead>
        <tr>
            <th>ID</th>
            <th>Orden de Compra</th>
            <th>Proveedor</th>
            <th>Cantidad de Creacion </th>
            <th>Cantidad Existente</th>
            
        </tr>
       </thead>
    </table>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
              "ServerSide": true,
              "dom": 'f<"clear">lr<"dt-buttons">tBp',
              "ajax": "{{ url('api/ordencompra') }}",
              "columns": [
                {data: 'id'},
                {data: 'orden_compra'},
                {data: 'proveedor'},
                {data: 'cant_creacion'},
                {data: 'cant_existente'},
                
                        ],
      "language":
       {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
       },
       
        buttons:[
                 {
            extend: 'pdfHtml5',
            title: 'Data export',
           className: 'btn',
            text: " Exportar en PDF",
            filename: 'Orden de compra',       
                 },             
      
          {
            extend: 'excelHtml5',
            filename: 'Proveedor(es)',
            customize: function ( xlsx ){
                var sheet = xlsx.xl.worksheets['sheet1.xml'];
 
                // jQuery selector to add a border
                $('row c[r*="10"]', sheet).attr( 's', '25' );
                                        }
          } 
        ],
       
            });

        } );
    </script>


</div>
@endsection
