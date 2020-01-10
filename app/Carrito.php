<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    // protected $guarded = [];

    public $items = null;
    public $cantidadTotal = 0;
    public $precioTotal = 0;

    public function __construct(){
    }

    public function agregarItem($item, $id){
      $itemAgregado = [
        "cantidad" => 0,
        "precio" => $item->price,
        "item" => $item,
      ];
      if ($this->items) {
        if (array_key_exists($id, $this->itms)) {
          $itemAgregado = $this->items[$id];
        }
      }
      $itemAgregado["cantidad"]++;
      $itemAgregado["precio"] = $item->price * $itemAgregado["cantidad"];
      $this->cantidadTotal++;
      $this->precioTotal += $item->price;
      $this->items[$id] = $itemAgregado;
    }
}
