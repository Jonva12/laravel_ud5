<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Universidad;

class UniversidadController extends Controller
{
  public function index ()
  {
  	$universidades = Universidad::all();
    return view ('universidades.index', array('universidades' => $universidades));
  }

  public function get ($id)
  {
  	$universidad = Universidad::find($id);
    return view ('universidades.universidad', array('universidad' => $universidad));
  }
}