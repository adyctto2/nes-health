<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use DateTime;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $cca;
    public $vista;
    public $datos;
    public function __construct($subs, $vs,Request $datos)
    {
        $this->cca = $subs;
        $this->vista = $vs;
        $this->datos = $datos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $dta = new DateTime();
        $dts=$dta->format('d-m-Y');
        $dt = $this->vista;
        $as = $this->datos;
        if($dt == 1){
            return $this->view('emails.suscripcion')->subject($this->cca);
        }
        else if($dt == 2){
            return $this->view('emails.mensaje',['nombre' => $this->datos->name, 'email' => $this->datos->email, 'asunto' => $this->datos->subject, 'mensaje' => $this->datos->message, 'fecha' => $dts])->subject($this->cca);
        }
        else if($dt == 3){
            $id = $this->datos->id;
            $dat = Productos::where('id',$id)->get()->first();
            return $this->view('emails.reserva',['nombre' => $this->datos->nombre, 'email' => $this->datos->email, 'telefono' => $this->datos->telefono, 'pais' => $this->datos->pais, 'producto' => $dat->nombre, 'costo' => $dat->costo])->subject($this->cca);
        }
    }
}
