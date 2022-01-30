<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'nome_sub_categoria',
    ];
}
