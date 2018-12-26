<?php

use Illuminate\Database\Seeder;
use App\Recurso;
class RecursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recurso::create([
          'titulo'=>' Controladores e integradores: los sistemas primarios del campo del cuerpo humano',
          'archivo'=>'1.pdf',
          'opcion'=>'1',
        ]);
        Recurso::create([
          'titulo'=>'  El ganador del Premio Nobel descubre el efecto de campo cuántico del ADN',
          'archivo'=>'3.pdf',
          'opcion'=>'2',
        ]);

         Recurso::create([
           'titulo'=>' El campo del cuerpo humano y la transferencia de información en biología',
           'archivo'=>'2.pdf',
           'opcion'=>'1',
         ]);
    }
}
