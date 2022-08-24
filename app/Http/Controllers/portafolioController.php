<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;


class portafolioController extends Controller
{
    //

    public function index()
    {
        $proyectos = Proyecto::paginate();

        return view('welcome', compact('proyectos')); 
    
    }

}
