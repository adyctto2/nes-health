<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Productos extends Model
{
    protected $fillable = [
        'nombre','descripcion', 'costo', 'tecnologia', 'caracteristicas', 'beneficios','especificaciones', 'soporte', 'imagen', 'codigo'
      ];
}
