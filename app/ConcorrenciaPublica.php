<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConcorrenciaPublica extends Model
{
    protected $fillable = [
        'objeto',
        'data',
        'hora',
        'processo',
        'edital',

    ];
    protected $table = 'concorrenciapublica';
}
