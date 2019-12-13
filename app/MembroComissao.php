<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembroComissao extends Model
{
    protected $fillable = [
        'id_membro',
        'id_comissao',
    ];

    protected $table = 'membro_comissao';
}
