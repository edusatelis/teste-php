<?php

use Illuminate\Database\Seeder;

class produto_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 'nome_produto',
        // 'fornecedor_produto',
        // 'preco',
        // 'quantidade',
        // 'categoria_id'
        DB::table('produto')->insert([
            'nome_produto' => 'Cafe Gourmet',
            'fornecedor_produto' => 'jaguari',
            'preco' => 24.90,
            'quantidade' => 3,
            'categoria_id' => 1
        ]);
        DB::table('produto')->insert([
            'nome_produto' => 'Cafe Extra Forte',
            'fornecedor_produto' => 'jaguari',
            'preco' => 18.90,
            'quantidade' => 3,
            'categoria_id' => 1
        ]);
        DB::table('produto')->insert([
            'nome_produto' => 'Caixa Erva Mate Tereré Tradicional',
            'fornecedor_produto' => 'Santo Antonio',
            'preco' => 9.90,
            'quantidade' => 3,
            'categoria_id' => 2
        ]);
        DB::table('produto')->insert([
            'nome_produto' => 'Caixa Erva Mate Tereré Menta e Boldo',
            'fornecedor_produto' => 'Santo Antonio',
            'preco' => 15.90,
            'quantidade' => 3,
            'categoria_id' => 2
        ]);
        DB::table('produto')->insert([
            'nome_produto' => 'Cerveja Colorado Ribeirao Larger',
            'fornecedor_produto' => 'Colorado',
            'preco' => 10.90,
            'quantidade' => 3,
            'categoria_id' => 3
        ]);
        DB::table('produto')->insert([
            'nome_produto' => 'Cerveja Colorado Appia Larger',
            'fornecedor_produto' => 'Colorado',
            'preco' => 12.90,
            'quantidade' => 3,
            'categoria_id' => 3
        ]);
    }
}
