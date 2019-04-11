<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;

class GraficaController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {

        return view('graficas');
    }

    public function graficarTipoOperacionGraficas($status, $year){
    $casoTipoOperacion = [];
    $query = Proveedores::query();
    if(isset($status) and ($status != '')){
      $query = $query->where('status', 'like', '%'.$status.'%');
    }
    if(isset($year) and ($year != '')){
      $query = $query->whereYear('fecha', '=', $year);
    }
    $query = $query->selectRaw(
      'COUNT(*) as cantidad,
      extract(month from fecha) AS mes'
    )->groupBy('mes')
    ->orderBy('mes', 'asc');
    $casoTipoOperacion = $query->get();
    $meses_operaciones = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    foreach($casoTipoOperacion as $meses){
      $meses_operaciones[$meses->mes - 1] = $meses->cantidad;
    }
    // return $serieTipoOperacion;
    return $meses_operaciones;

    }

		public function graficarTipoOperacionGraficasAnio($tipo1, $anio1){

			$graficaTipoOperacion = [];
			$query = Proveedores::query();
			if (isset($tipo1) and ($tipo1 != '' )){
				$query = $query->where('status', 'like', '%'.$tipo1.'%');
			}
			if(isset($anio1) and ($anio1 != '' )){
				$query = $query->whereyear('fecha', '>=', $anio1);
			}
			$query =$query->selectRaw(
				'COUNT(*) as cantidad, extract(year from fecha) as ano'
				)
				->groupBy('ano')
				->orderBy('ano', 'asc');
				$graficaTipoOperacion = $query->get();
				return $graficaTipoOperacion;
		}
}
