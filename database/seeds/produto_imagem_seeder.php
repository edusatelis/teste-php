<?php

use Illuminate\Database\Seeder;

class produto_imagem_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produto_imagem')->insert([
            'produto_id' => 1,
            'caminho_imagem' => '../../resources/assets/img/jaguari_gourmet.png',
        ]);

        DB::table('produto_imagem')->insert([
            'produto_id' => 2,
            'caminho_imagem' => '../../resources/assets/img/jaguari_extra_forte.png',
        ]);

        DB::table('produto_imagem')->insert([
            'produto_id' => 3,
            'caminho_imagem' => '../../resources/assets/img/erva_mate.jpg',
        ]);

        DB::table('produto_imagem')->insert([
            'produto_id' => 4,
            'caminho_imagem' => '../../resources/assets/img/menta.jpg',
        ]);

        DB::table('produto_imagem')->insert([
            'produto_id' => 5,
            'caminho_imagem' => '../../resources/assets/img/Ribeirao-Larger.jpg',
        ]);

        DB::table('produto_imagem')->insert([
            'produto_id' => 6,
            'caminho_imagem' => '../../resources/assets/img/ColoradoAppia.jpg',
        ]);
    }
}
