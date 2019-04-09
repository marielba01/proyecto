@extends('layouts.app2')

@extends('menu')

@section('content')

<div class="container">

    <table id="example" class="table table-striped table-bordered" style="width:90%; margin-left:1%; background:#fafafa" >
       <thead>
            <tr class="encabezadotabla">
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
    </table>
</div>


<script>
    $(document).ready(function() {
        $('#example').DataTable({
          "ServerSide": true,
          "dom": 'fr<"dt-buttons">tBp',
          "ajax": "{{ url('api/proveedor') }}",
          "columns": [
            {data: 'id'},
            {data: 'proveedor'},
            {data: 'orden_compra'},
            {data: 'tiraje'},
            {data: 'valor_facial'},
            {data: 'motivo'},
            {data: 'cod_motivo'},
            {data: 'status'},
            {data: 'fecha'},

  ],
  "language": {

            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"

        },

        buttons: [
                    {
            extend: 'pdfHtml5',
            title: 'Proveedor(es)',
            className: 'btn',
            text: "PDF",
            filename: 'Proveedor(es)',
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
@endsection
