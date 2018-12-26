<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
          'nombre_cat'=>'CAtegoria1',
          'tipo'=>'3',
        ]);
        Category::create([
          'nombre_cat'=>'CAtegoria2',
          'tipo'=>'3',
        ]);
    }
}
