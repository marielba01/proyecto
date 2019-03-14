<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orden;

class OrdenController extends Controller
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
          $compra= Orden::all ();
          return view('orden.ordencompra',compact('items', 'compra'));
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
        $compra = Orden::findOrFail($id);
        return view('orden.edorden', compact('compra'));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
