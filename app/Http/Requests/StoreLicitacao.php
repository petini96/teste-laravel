<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLicitacao extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $data_atual= date('d-m-Y');

        $data_eng_posterior_calculada = date('Y-m-d', strtotime($data_atual. ' + 1 month'));
        $data_eng_posterior_calculada=date_create($data_eng_posterior_calculada);
        $data_pt_posterior_calculada = date_format($data_eng_posterior_calculada, "d-m-Y");
        return [
            'edital' => 'required',
            // 'id' => 'required|equals:',
            'numeracao' => 'required | max:8 | alpha_num',
            'data_criacao' => 'required|date|date_equals:'.$data_atual,
            'data_publicacao' => 'required|date|before:'. $data_pt_posterior_calculada.'|after:'.$data_atual,
            'data_abertura' => 'required',
            'hora_criacao' => 'required',
            'hora_abertura' => 'required',
            'photo' => 'required|mimes:pdf',
            // 'objeto' => 'required',png
            // 'local_entrega' => 'required',
            // 'prazo_entrega' => 'required',
            // 'condicoes_pagamento' => 'required',
            // 'validade_proposta' => 'required',
            // 'processo_administrativo' => 'required',
            // 'id_modalidade' => 'required',
            // 'id_usuario' => 'required',
            // 'id_local' => 'required',
            // 'id_comissao' => 'required',
            // 'created_at' => 'required',
            // 'updated_at' => 'required',
        ];
    }
}
