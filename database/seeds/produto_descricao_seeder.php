<?php

use Illuminate\Database\Seeder;

class produto_descricao_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produto_descricao')->insert([
            'produto_id' => 1,
            'descricao' => 'Café arabica tipo 2, ideal para quem gosta de café forte',
        ]);

        DB::table('produto_descricao')->insert([
            'produto_id' => 2,
            'descricao' => 'Café arabica tipo 1, ideal para quem gosta de café forte',
        ]);

        DB::table('produto_descricao')->insert([
            'produto_id' => 3,
            'descricao' => 'Erva raiz, ideal para quem toma com apenas limão na agua',
        ]);

        DB::table('produto_descricao')->insert([
            'produto_id' => 4,
            'descricao' => 'Erva modinha, caiu no gosto do sul matogrossense',
        ]);

        DB::table('produto_descricao')->insert([
            'produto_id' => 5,
            'descricao' => 'Cerveja Artesanal frutada com leve toque de laranja, assemelha a uma IPA',
        ]);

        DB::table('produto_descricao')->insert([
            'produto_id' => 6,
            'descricao' => 'Cerveja Artesanal com leve toque de mel',
        ]);

        
    }
}
