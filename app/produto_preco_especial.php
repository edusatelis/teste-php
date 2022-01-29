<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto_preco_especial extends Model
{
    use HasFactory;

    protected $fillable = [
        'produto_id',
        'preco',
        'data_inicio',
        'data_fim'
    ];
}
