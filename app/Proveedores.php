<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
  protected $fillable = [
    'proveedor', 'valor_facial', 'tiraje', 'cod_motivo', 'motivo', 'orden_compra', 'status'
  ];

//Scope
  public function scopeProveedor($query, $proveedor)
  {
    // if($proveedor)
      return $query->where('proveedor', 'LIKE', "%$proveedor%");
  }
   public function scopeOrden($query, $orden_compra)
  {
    // if($orden_compra)
     return $query->where('orden_compra', 'LIKE', "%$orden_compra%");
 }

   public function scopeId($query, $id)
  {
    // if($orden_compra)
     return $query->where('id', 'LIKE', "%$id%");
 }
}
