<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class produto_preco_especial_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        DB::table('produto_preco_especial')->insert([
            'produto_id' => 1,
            'preco' => 15.90,
            'data_inicio'=> Carbon::now('America/Sao_Paulo')->toDateTimeString(),
            'data_fim'=> Carbon::parse(Carbon::now('America/Sao_Paulo'))->addWeeks(1)
        ]);

        DB::table('produto_preco_especial')->insert([
            'produto_id' => 2,
            'preco' => 9.90,
            'data_inicio'=> Carbon::now('America/Sao_Paulo')->toDateTimeString(),
            'data_fim'=> Carbon::parse(Carbon::now('America/Sao_Paulo'))->addWeeks(1)
        ]);

        DB::table('produto_preco_especial')->insert([
            'produto_id' => 3,
            'preco' => 5.90,
            'data_inicio'=> Carbon::now('America/Sao_Paulo')->toDateTimeString(),
            'data_fim'=> Carbon::parse(Carbon::now('America/Sao_Paulo'))->addWeeks(1)
        ]);

        DB::table('produto_preco_especial')->insert([
            'produto_id' => 4,
            'preco' => 10.90,
            'data_inicio'=> Carbon::now('America/Sao_Paulo')->toDateTimeString(),
            'data_fim'=> Carbon::parse(Carbon::now('America/Sao_Paulo'))->addWeeks(1)
        ]);
        DB::table('produto_preco_especial')->insert([
            'produto_id' => 5,
            'preco' => 7.90,
            'data_inicio'=> Carbon::now('America/Sao_Paulo')->toDateTimeString(),
            'data_fim'=> Carbon::parse(Carbon::now('America/Sao_Paulo'))->addWeeks(1)
        ]);
        DB::table('produto_preco_especial')->insert([
            'produto_id' => 6,
            'preco' => 8.90,
            'data_inicio'=> Carbon::now('America/Sao_Paulo')->toDateTimeString(),
            'data_fim'=> Carbon::parse(Carbon::now('America/Sao_Paulo'))->addWeeks(1)
        ]);
    }
}
