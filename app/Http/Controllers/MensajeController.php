<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Mensaje;
use App\Suscripcion;
use Mail;
use App\Mail\SendMail;
use DateTime;
class MensajeController extends Controller
{
    public function mensaje(Request $datos){
        $mensaje = " ";
        $this->validate($datos,[
            'nombre' => 'required',
            'email' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required',
            'suscripcion' => 'required'
        ]);
        if($datos->suscripcion == true){
            $dt = Suscripcion::where('email','=',$datos->email)->where('tipo','=','3')->get()->first();
            if(count($dt) > '0'){
                $mensaje = "El correo electronico ya se encuentra registrado";
            }
            else{
                $dat = new Suscripcion;
                $dat->email = $datos->email;   
                $dat->tipo = "3";
                $dat->save();
                Mail::to($datos->email)->send(new SendMail("Suscripción Nes Health Bolivia",1,$datos));
                $mensaje = "Suscripción correcta...";
            }
            // return $mensaje;
        }
        

            $dta = new DateTime();
            $dt=$dta->format('Y-m-d');
            $msj =  new Mensaje;
            $msj->nombre = $datos->nombre;
            $msj->email = $datos->email;
            $msj->asunto = $datos->asunto;
            $msj->mensaje = $datos->mensaje;
            $msj->estado = '0';
            $msj->fecha = $dt;
            $msj->tipo = "3";
            $msj->save();
            Mail::to("info@neshealth-bolivia.com")->send(new SendMail("Mensaje recibido en la pagina biowellbolivia.com", 2, $datos));
            $mensaje = $mensaje.". Su mensaje fue enviado correctamente";
          return $mensaje;
    }
}
