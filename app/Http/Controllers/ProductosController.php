<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
  public function index()
  {
    return view('productos.descripcion');
  }
  public function index1()
  {
    return view('productos.bioenergetix');
  }
  public function index2()
  {
    return view('productos.softwareEscaneo');
  }
  public function index3()
  {
    return view('productos.nesMiHealth');
  }
  public function index4()
  {
    return view('productos.infoceuticals');
  }
  public function index5()
  {
    return view('productos.puntoEleccion');
  }
  
}
