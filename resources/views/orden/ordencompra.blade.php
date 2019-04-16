@extends('layouts.app2')

@extends('menu')

@section('content')

<div class="container" style="margin-left: 150px">
    <table id="example" class="table table-striped table-bordered" style="width:90%; margin-left:1%; background:#fafafa">
       <thead class="encabezadotabla">
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
              "dom": 'f<"clear">r<"dt-buttons">tBp',
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
            text: "PDF",
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
