<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorreoRespuesta;

/**
 * 
 */
class personalController extends Controller
{
	
public function index()
{
	$userNombre = '';
    $msj = "";
    try{
        $userNombre = auth()->user()->name;
    }catch(\Exception $e){
        $msj = "";
        if ($userNombre != ''){

        }else{
            $msj = "¡Su sesión a expirado, ingresa de nuevo!";
            return redirect('/');
        }
    }

}

public function panelPersonal()
{
    return view('PanelPersonal');
    //return view('addPersonal');
}

public function vistaaddPersonal()
{
    return view('addPersonal');
}
}

