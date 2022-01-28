<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto_imagem extends Model
{
    use HasFactory;

    protected $fillable = [
        'produto_id',
        'caminho_imagem'
    ];
}
