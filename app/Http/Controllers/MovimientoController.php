<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movimiento;

class MovimientoController extends Controller
{
    public function inicio()
    {
    return view('index', ["datos" => Movimiento::Mensaje()]);
    }

    /* $movimientos=Movimiento::orderBy('id','DESC')->paginate(3);
    return view('movimiento.index',compact('movimientos'));
   */
}
