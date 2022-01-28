<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_produto',
        'fornecedor_produto',
        'preco',
        'quantidade'
    ];
}
