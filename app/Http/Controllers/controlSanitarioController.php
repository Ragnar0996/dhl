<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorreoRespuesta;

/**
 * 
 */
class controlSanitarioController extends Controller
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

public function panelLaboratorios()
{
    return view('panelLaboratorios');
    //return view('addPersonal');
}

public function panelSaludPublica()
{
    return view('panelSaludPublica');
}

public function panelContrSS()
{
    return view('panelContrSS');
}

public function addLab()
{
    return view('addLaboratorio');
}

public function formatoUnico()
{
    $query = "SELECT c.id, CONCAT(TRIM(c.nombres),' ',c.apellido_paterno,' ',c.apellido_materno) AS nombre
                FROM ciudadanos c
                WHERE c.nombres IS NOT NULL AND c.nombres != ''
                ORDER BY c.nombres ";
    $datosQ = DB::SELECT($query);
    $objDatos = [];
    foreach ($datosQ as $datos) {
        $ID = $datos->id;
        $NOM = $datos->nombre;
        array_push($objDatos, [
            'ID' => $ID,
            'NOM' => $NOM]);
    }
    return view('formatoUnico',compact('objDatos'));
}

public function infoCiu(Request $request)
{
    if($request->ajax()){
        $idciu = $request->input('idS');
        $query = "SELECT CONCAT(TRIM(c.nombres),' ',c.apellido_paterno,' ',c.apellido_materno) AS nombre,
         CONCAT(c.colonia,' ',c.calle,' ',c.numeroint,' ',c.numeroext) AS domicilio,
         c.tel_celular
             FROM ciudadanos c
            WHERE c.id = $idciu ";
        $datosQ = DB::SELECT($query);
        return $datosQ;
    }
}
}

