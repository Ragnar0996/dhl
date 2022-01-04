<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorreoRespuesta;
use PDF;

/**
 * 
 */
class expedientesController extends Controller
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
public function expCertMedico()
{
    $query = "SELECT c.id,
        TRIM(CONCAT(c.nombres,' ',c.apellido_paterno,' ',c.apellido_materno)) AS nombre
         FROM ciudadanos c
        WHERE CONCAT(c.nombres,' ',c.apellido_paterno,' ',c.apellido_materno) IS NOT NULL
        ORDER BY nombre";
    $datosQ = DB::SELECT($query);
    $objDatos = [];
    foreach ($datosQ as $datos) {
        $id = $datos->id;
        $nombre = $datos->nombre;
        array_push($objDatos, [
            'id' => $id,
            'nombre' => $nombre]);
    }
    return view('certificadoMedico',compact('objDatos','id','nombre'));
}

 public function imprimirCert($id)
    {
          $query = "SELECT c.id,
        TRIM(CONCAT(c.nombres,' ',c.apellido_paterno,' ',c.apellido_materno)) AS nombre
         FROM ciudadanos c
        WHERE c.id=$id
        ORDER BY nombre";
    $datosQ = DB::SELECT($query);
    $objDatos = [];
    foreach ($datosQ as $datos) {
        $id = $datos->id;
        $nombre = $datos->nombre;
        array_push($objDatos, [
            'id' => $id,
            'nombre' => $nombre]);
    }
        
        


        $data= compact('objDatos');
        $pdf = PDF::loadView('certificadoPDF', $data);
        return $pdf->download('certificado.pdf');
           
         
    }

}

