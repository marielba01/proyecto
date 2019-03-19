<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;


class EnviarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = [

              'Proveedor' => [ 'url' => 'proveedor' ],
              'Orden de compra' => ['url' => 'ordencompra'],
              'Pendiente' => ['url' => 'pendientegsi'],


              'Por enviar' => [ 'url' => 'porenviar'],
              'Por Cargar' => ['url' => 'porcargar'],
              'Cargado' => ['url' => 'cargado']

      ];

      $enviar = Proveedores::where('status','POR ENVIAR')->paginate(14);

        return view('porenviar.index',compact('items','enviar'));
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
              'Cargado' => ['url' => 'cargado']
          ]
        ]
      ];

      $enviar = Proveedores::findOrFail($id);
      return view('porenviar.edit',compact('items'), [
          'enviar' => $enviar
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
      $enviar = Proveedores::findOrFail($id);
      $enviar-> status = $request->get('status');
      $enviar->save();

      return redirect('porenviar');
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
