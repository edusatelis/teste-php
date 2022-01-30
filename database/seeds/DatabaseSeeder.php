<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(categoria_seeder::class);
        $this->call(subcategoria_seeder::class);
        $this->call(produto_seeder::class);
        $this->call(produto_descricao_seeder::class);
        $this->call(produto_imagem_seeder::class);
        $this->call(produto_preco_especial_seeder::class);

    }
}
