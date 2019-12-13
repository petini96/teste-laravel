<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    //
    protected $fillable = [
        'id',
        'nome',
        'numero_ato',
        'ano_ato',
        'data_designacao',

        // foreign key
        'tipo_cargo',
        'id_comissao',
    ];
    protected $table = 'membro';

    public function comissao()
    {
        return $this->belongsToMany('App\Comissao','membro_comissao','id_membro', 'id_comissao');
    }
}
