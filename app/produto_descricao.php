<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto_descricao extends Model
{
   use HasFactory;

   protected $fillable = [
       'produto_id',
       'descricao'
   ];
}
