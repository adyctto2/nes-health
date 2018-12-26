<?php

use Illuminate\Database\Seeder;
use App\Preguntas;
class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Preguntas::create([
          'pregunta'=>'pregunta1',
          'respuesta'=>'nada',
          'id_categoria'=>'2',
        ]);

            Preguntas::create([
              'pregunta'=>'pregunta2',
              'respuesta'=>'nada',
              'id_categoria'=>'2',
            ]);

            Preguntas::create([
              'pregunta'=>'pregunta1asd',
              'respuesta'=>'nada',
              'id_categoria'=>'1',
            ]);

                Preguntas::create([
                  'pregunta'=>'pregunta2asdf',
                  'respuesta'=>'nada',
                  'id_categoria'=>'1',
                ]);
    }
}
