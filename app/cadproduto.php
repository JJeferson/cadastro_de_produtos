<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cadproduto extends Model
{
    protected $fillable = [
        'descricao', 'est_atual','foto', 'obs'

    ];
}
