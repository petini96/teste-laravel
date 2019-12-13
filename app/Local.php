<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    //
    protected $fillable = [
        'id',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
    ];
    protected $table = 'local';
}
