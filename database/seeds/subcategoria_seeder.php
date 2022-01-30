<?php

use Illuminate\Database\Seeder;

class subcategoria_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('sub-categorias')->insert([
            'categoria_id' => 1,
            'nome_sub_categoria' => 'Torrado e moido'
        ]);

        DB::table('sub-categorias')->insert([
            'categoria_id' => 2,
            'nome_sub_categoria' => 'Tereré'
        ]);

        DB::table('sub-categorias')->insert([
            'categoria_id' => 3,
            'nome_sub_categoria' => 'Artesanais'
        ]);
    }
}
