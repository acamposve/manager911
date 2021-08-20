<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Marca;
class OrdenServicioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }


    public function index()
    {

        
        
        $colores = Color::all();
        $marcas = Marca::all();
        return view('orden',compact('colores'),compact('marcas'));
    }
}
