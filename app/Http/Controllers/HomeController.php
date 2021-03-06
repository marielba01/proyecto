<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
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
        return view('home',compact('items'));
      }


}
