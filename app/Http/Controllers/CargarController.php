<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;


class CargarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $items = [

              'Proveedor' => [ 'url' => 'proveedor' ],
              'Orden de compra' => ['url' => 'ordencompra'],
              'Pendiente' => ['url' => 'pendientegsi'],


              'Por enviar' => [ 'url' => 'porenviar'],
              'Por Cargar' => ['url' => 'porcargar'],
              'Cargado' => ['url' => 'cargado'],
              'Graficas' => ['url' => 'graficas']

      ];
      $id= $request->get('id');
      $proveedor = $request->get('proveedor');
      $orden_compra= $request->get('orden_compra');

      $cargar = Proveedores::where('status','Por Cargar')
      ->id($id)
      ->proveedor($proveedor)
      ->orden($orden_compra)
      ->paginate(4);

        return view('porcargar.index',compact('items','cargar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $items = [
          'Consultas'          => ['submenu' => [
              'Proveedor' => [ 'url' => 'proveedor' ],
              'Orden de compra' => ['url' => 'ordencompra'],
              'Pendiente por GSI' => ['url' => 'pendientegsi']
            ]
           ],
          'Lotes'         => ['submenu' => [
              'Por enviar' => [ 'url' => 'porenviar'],
              'Por Cargar' => ['url' => 'porcargar'],
              'Cargado' => ['url' => 'cargado'],
              'Graficas' => ['url' => 'graficas']
          ]
        ]
      ];

      $cargar = Proveedores::findOrFail($id);
      return view('porcargar.edit',compact('items'), [
          'cargar' => $cargar
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $cargar = Proveedores::findOrFail($id);
      $cargar-> status = $request->get('status');
      $cargar->save();

      return redirect('porcargar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
