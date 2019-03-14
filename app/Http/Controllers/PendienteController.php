<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;

class PendienteController extends Controller
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
                'Pendiente por GSI' => ['url' => 'pendientegsi'],
              
        
                'Por enviar' => [ 'url' => 'porenviar'],
                'Por Cargar' => ['url' => 'porcargar'],
                'Cargado' => ['url' => 'cargado']
           
        ];

        $pendiente = Proveedores::all()->where('status','LIBERAR');

          return view('pendientegsi.index',compact('items','pendiente'));
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
      // $pendiente-> status = $request->get('status');
      // $pendiente->save();
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

      $pendiente = Proveedores::findOrFail($id);
      return view('pendientegsi.edit',compact('items'), [
          'pendiente' => $pendiente
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
      $pendiente = Proveedores::findOrFail($id);
      $pendiente-> status = $request->get('status');
      $pendiente->save();

      return redirect('pendientegsi');
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
