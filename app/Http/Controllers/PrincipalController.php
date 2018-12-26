<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonio;

class PrincipalController extends Controller
{
    public function index()
    {
      $test = Testimonio::where('tipo','=','3')->get();

        $test1 = $test[0];      
        $test2 = $test[1];
        $test3 = $test[2];
      
      return view('welcome',compact('test1','test2','test3'));
    }
}
