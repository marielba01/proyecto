<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;
use App\Orden;

class PageController extends Controller
{
   public function index()
   {
    $items = [
           'Consultas'          => ['submenu' => [
               'Proveedor' => [ 'url' => 'proveedor' ],
               'Orden de compra' => ['url' => 'ordencompra'],
               'Pendiente por G.S.I' => ['url' => 'pendientegsi']
             ]
            ],
           'Lotes'         => ['submenu' => [
               'Por enviar' => [ 'url' => 'porenviar'],
               'Por Cargar' => ['url' => 'porcargar'],
             'Cargado' => ['url' => 'cargado']
           ]
       ]
       ];
    }
        
        $compra = Orden::all();
        return view('orden.ordencompra', compact('compra'));
         
              }

     

     

}