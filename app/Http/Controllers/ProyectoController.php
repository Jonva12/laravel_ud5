<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;

class ProyectoController extends Controller
{

  public function index ()
  {
  	$proyecto = Proyecto::all();
    return view ('proyectos.index', array('proyectos' => $proyecto));
  }

  public function get ($id)
  {
  	$proyecto = Proyecto::find($id);
    return view ('proyectos.proyecto', array('proyecto' => $proyecto));
  }
}
