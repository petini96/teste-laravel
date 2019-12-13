<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licitacao extends Model
{
    //
    protected $fillable = [
            'id',
            'file_edital',
            'edital',
            'numeracao',

            'data_criacao',
            'data_publicacao',
            'data_abertura',
            'hora_criacao',
            'hora_abertura',

            'objeto',
            'local_entrega',
            'prazo_entrega',
            'condicoes_pagamento',
            'validade_proposta',
            'processo_administrativo',

            // foreign key
            'id_modalidade',
            'id_usuario',
            //locao de licitacao
            'id_local',

            'id_comissao',

    ];
    protected $table = 'licitacao';
}
