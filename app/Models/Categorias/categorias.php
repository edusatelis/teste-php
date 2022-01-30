<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_categoria',
    ];
}
