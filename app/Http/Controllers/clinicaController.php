<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorreoRespuesta;

/**
 *
 */
class clinicaController extends Controller
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

public function clinica()
{
    return view('registroClinica');
    //return view('addPersonal');
}

public function vistaaddClinica()
{
    return view('addClinica');
}
}

