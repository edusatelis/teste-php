<?php

use Illuminate\Database\Seeder;

class categoria_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nome_categoria' => 'Cafés',
        ]);

        DB::table('categorias')->insert([
            'nome_categoria' => 'Erva Mate',
        ]);

        
        DB::table('categorias')->insert([
            'nome_categoria' => 'Cervejas',
        ]);
    }
}
