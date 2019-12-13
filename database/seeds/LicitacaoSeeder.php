<?php

use Illuminate\Database\Seeder;

class LicitacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('licitacao')->insert([
            'edital' => '86754',
            'numeracao' => 363456,
            'data_criacao' => '08/06/2018',
            'data_publicacao' => '18/09/2019',
            'data_abertura' => '08/06/2015',
            'hora_criacao' => '22:30',
            'hora_abertura' => '22:30',
            'objeto' => 'Criação de Asfalto em uma área específicada da cidade.',
            'local_entrega' => '',
            'prazo_entrega' => '',
            'condicoes_pagamento' => '',
            'validade_proposta' => '',
            'processo_administrativo' => '341/2019',
            'id_modalidade' => 3,
            'id_usuario' => 199,
            'id_local' => 6,
            'id_comissao' => 222,
            'file_edital' => 'file\inicial.pdf',
            'created_at' => '08/06/2018',
            'updated_at' => '08/06/2018',

        ]);
    }
}
