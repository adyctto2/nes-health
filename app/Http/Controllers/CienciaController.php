<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonio;
use App\Recurso;
class CienciaController extends Controller
{
  public function index()
  {
    return view('ciencia.ciencia');
  }
  public function index1()
  {
    return view('ciencia.comoTecnologiaNES');
  }
  public function index2()
  {
    $recur=Recurso::where('opcion','=','1')->get();
    $recurs=Recurso::where('opcion','=','2')->get();
    return view('ciencia.centroRecursos',compact('recur','recurs'));
  }
  public function index3()
  {
    return view('ciencia.campoCuerpoHumano');
  }
  public function index4()
  {
    return view('ciencia.investigacion');
  }
  public function index5()
  {
    return view('ciencia.casosEstudio');
  }
        public function index51()
        {
          return view('ciencia.casosdeEstudio.index1');
        }
        public function index52()
        {
          return view('ciencia.casosdeEstudio.index2');
        }
  public function index6()
  {
    return view('ciencia.ensayosClinicos');
  }
  public function index7()
  {
    return view('acercade.resultados');
  }
  public function index71()
  {
    $tests=Testimonio::where('tipo','=','3')->get();
    return view('acercade.testimonios',compact('tests'));
  }
  public function index8()
  {
    return view('acercade.contactenos');
  }
}
