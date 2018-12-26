<?php

use Illuminate\Database\Seeder;
use App\Testimonio;
class TestimoniosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonio::Create([
            'nombre'=>'John Fuhler',
            'profesion'=>'Sufría de insomnio',
            'imagen'=>'1.jpg',
            'fecha'=>'2018-02-12',
            'testimonio'=>'NES es muy preciso, podría sentir un cambio de inmediato. Soy mucho más feliz y es mucho más divertido vivir mi vida de esta manera.',
            'id_producto'=>'1',
            'tipo'=>'3',
        ]);
        Testimonio::Create([
            'nombre'=>'Katie Schmidt',
            'profesion'=>'Paciente con SII a largo plazo',
            'imagen'=>'3.jpg',
            'fecha'=>'2018-02-12',
            'testimonio'=>'En el primer mes fui otra persona. Me sentí mucho más confiado. Ahora como normalmente .',
            'id_producto'=>'1',
            'tipo'=>'3',
        ]);
        Testimonio::Create([
            'nombre'=>'Lynn Martin',
            'profesion'=>'Sufrió de síndrome de fatiga crónica',
            'imagen'=>'2.jpg',
            'fecha'=>'2018-02-12',
            'testimonio'=>'Normalmente soy una persona muy nerviosa, pero NES Health me ayuda a estar en equilibrio mucho más rápido. Ya no estoy tan estresada. Ahora me siento cómodo y soy una persona mucho más tranquila de lo que solía ser.',
            'id_producto'=>'1',
            'tipo'=>'3',
        ]);
    }
}
