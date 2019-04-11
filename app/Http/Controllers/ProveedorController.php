<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;

class ProveedorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
                'Cargado' => ['url' => 'cargado'],
                'Graficas' => ['url' => 'graficas']
        ];
          $proveed = Proveedores::all();
          return view('proveedor',compact('items'),compact('proveed')
        );
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
