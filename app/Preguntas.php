<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    protected $fillable = [
        'pregunta','respuesta','id_categoria'
      ];
    
}
