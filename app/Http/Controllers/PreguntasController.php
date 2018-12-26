<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preguntas;
use App\Category;
class PreguntasController extends Controller
{
    public function index()
    {
      $categorias=Category::where('tipo','=','3')->get();

      return view('acercade.preguntas',compact('categorias'));
    }
    public function show($id)
    {
        $categorias=Category::where('tipo','=','3')->get();

        $datos=Preguntas::where('id_categoria','=',$id)->get();
        return view('acercade.verP',compact('categorías'));
    }
}
