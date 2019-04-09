<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;

class GraficaController extends Controller
{

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
}
