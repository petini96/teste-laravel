<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidade extends Model
{
    //
    protected $fillable = [
        'id',
        'descricao',
    ];
    protected $table = 'modalidade';
}
