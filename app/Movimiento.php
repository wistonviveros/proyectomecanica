<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    /*public $timestamps = false;
 protected $fillable = ['fecha_mov', 'tipo_mov', 'encargado', 'nombre_producto', 'cantidad'];*/

    public static function Mensaje()
    {
    return " Mensaje de proyectomecanica Laravel 7 desde el modelo";
    }

}
