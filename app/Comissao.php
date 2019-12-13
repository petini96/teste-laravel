<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comissao extends Model
{

    protected $fillable = [
        //
        'id',
        'data',
        'portaria',
        'validade',
        'arquivo',
        'arquivo_atual',
        // foreign key
        'tipo_comissao',
    ];
    protected $table = 'comissao';

    public function membro()
    {
        return $this->belongsToMany('App\Membro','membro_comissao','id_comissao', 'id_membro');
    }
}
