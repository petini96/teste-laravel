<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Licitacao;
use App\Modalidade;
use App\Local;
use App\User;
use Illuminate\Support\Facades\DB;
use Redirect,Response,File;
use Illuminate\Validation\Rule;

class LicitacaoController extends Controller
{
    public $request;
    public function __construct(Request $request)
    {
         $this->middleware('auth');
         $this->request = $request;
    }
    public function index()
    {
        // var_dump($id_licitacao_gerado);
        $licitacao = DB::table('modalidade')
            ->join('licitacao', 'modalidade.id', '=', 'licitacao.id_modalidade')
            ->join('local', 'local.id', '=', 'licitacao.id_local')
            ->join('comissao', 'comissao.id', '=', 'licitacao.id_comissao')
            ->join('users', 'users.id', '=', 'licitacao.id_usuario')
            ->select(
                'licitacao.id',
                'licitacao.edital',
                'licitacao.numeracao',
                'licitacao.data_criacao',
                'licitacao.data_publicacao',
                'licitacao.data_abertura',
                'licitacao.hora_criacao',
                'licitacao.hora_abertura',
                'licitacao.objeto',
                'licitacao.local_entrega',
                'licitacao.prazo_entrega',
                'licitacao.condicoes_pagamento',
                'licitacao.validade_proposta',
                'licitacao.processo_administrativo',
                'modalidade.descricao as id_modalidade',
                'users.name as id_usuario',
                'local.logradouro as id_local',
                'comissao.tipo_comissao as id_comissao',
                )
            ->get();

        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[1];
        
        return view('Painel.Licitacao.index', compact('licitacao','user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(Request $request)
    {

        $ultima_licitacao = Licitacao::latest()->first();
        $ultima_licitacao->id;

        $id_licitacao_gerado = $ultima_licitacao->id + 1;

        date_default_timezone_set('America/Cuiaba');
        
        $modalidades = DB::table('modalidade')->select('id', 'descricao')->get();
        $locais = DB::table('local')->select('id', 'logradouro')->get();
        $comissoes = DB::table('comissao')->select('id', 'tipo_comissao')->get();
        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[1];
        // return view('Painel.Licitacao.index', compact('user','urlAtual'));

        $licitacao = Licitacao::latest()->paginate(5);
        return view('Painel.Licitacao.create',compact('licitacao','user', 'modalidades','locais','comissoes','id_licitacao_gerado'));
    }


    public function store(Request $request)
    {

        $data_atual= date('d-m-Y');

        $data_eng_posterior_calculada = date('Y-m-d', strtotime($data_atual. ' + 1 month'));
        $data_eng_posterior_calculada=date_create($data_eng_posterior_calculada);
        $data_pt_posterior_calculada = date_format($data_eng_posterior_calculada, "d-m-Y");

        $user = Auth()->User();

        $request->validate([
            'edital' => 'required',
            // 'id' => 'required|equals:',
            'numeracao' => 'required | max:8 | alpha_num',
            'data_criacao' => 'required|date|date_equals:'.$data_atual,
            'data_publicacao' => 'required|date|before:'. $data_pt_posterior_calculada.'|after:'.$data_atual,
            'data_abertura' => 'required',
            'hora_criacao' => 'required',
            'hora_abertura' => 'required',
            'file_edital' => 'required|mimes:pdf',
            // 'objeto' => 'required',png
            // 'local_entrega' => 'required',
            // 'prazo_entrega' => 'required',
            // 'condicoes_pagamento' => 'required',
            // 'validade_proposta' => 'required',
            'processo_administrativo' => 'required',
            'id_modalidade' => 'required|exists:modalidade,id',
            'id_usuario' => 'required| '.Rule::in([$user->id]),

            // 'id_local' => 'required',
            // 'id_comissao' => 'required',
            // 'created_at' => 'required',
            // 'updated_at' => 'required',
        ]);
        if ($files = $request->file('file_edital')) {
            $destinationPath = 'file/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);
            $insert['file'] = "$profilefile";
        }
        // Licitacao::create($request->all());
        DB::table('licitacao')->insert(
            [
                'id' => $request->input('id'),
                'edital' => $request->input('edital'),
                'numeracao'=> $request->input('numeracao'),
                'data_criacao'=> $request->input('data_criacao'),
                'data_publicacao'=> $request->input('data_publicacao'),
                'data_abertura'=> $request->input('data_abertura'),
                'hora_criacao'=> $request->input('hora_criacao'),
                'hora_abertura'=> $request->input('hora_abertura'),
                'objeto'=> $request->input('objeto'),
                'local_entrega'=> $request->input('local_entrega'),
                'prazo_entrega'=> $request->input('prazo_entrega'),
                'condicoes_pagamento'=> $request->input('condicoes_pagamento'),
                'validade_proposta'=> $request->input('validade_proposta'),
                'processo_administrativo'=> $request->input('processo_administrativo'),
                'id_modalidade'=> $request->input('id_modalidade'),
                'id_usuario'=> $request->input('id_usuario'),
                'id_local'=> $request->input('id_local'),
                'id_comissao'=> $request->input('id_comissao'),

                'file_edital' => $destinationPath.$profilefile,

            ]
        );
        return redirect()->route('Painel.Licitacao.index')
                        ->with('success','Processo efetuado com sucesso.');


        return $request->all();
    }

    public function show($id)
    {
        $licitacao = DB::table('modalidade')
            ->join('licitacao', 'modalidade.id', '=', 'licitacao.id_modalidade')
            ->join('local', 'local.id', '=', 'licitacao.id_local')
            ->join('comissao', 'comissao.id', '=', 'licitacao.id_comissao')
            ->join('users', 'users.id', '=', 'licitacao.id_usuario')
            ->select(
                'licitacao.file_edital as licitacao_file_edital',
                'licitacao.id as licitacao_id',
                'licitacao.edital as licitacao_edital',
                'licitacao.numeracao as licitacao_numeracao',
                'licitacao.data_criacao as licitacao_data_criacao',
                'licitacao.data_publicacao as licitacao_data_publicacao',
                'licitacao.data_abertura as licitacao_data_abertura',
                'licitacao.hora_criacao as licitacao_hora_criacao',
                'licitacao.hora_abertura as licitacao_hora_abertura',
                'licitacao.objeto as licitacao_objeto',
                'licitacao.local_entrega as licitacao_local_entrega',
                'licitacao.prazo_entrega as licitacao_prazo_entrega',
                'licitacao.condicoes_pagamento as licitacao_condicoes_pagamento',
                'licitacao.validade_proposta as licitacao_validade_proposta',
                'licitacao.processo_administrativo as licitacao_processo_administrativo',

                'modalidade.descricao as modalidade_descricao',
                'modalidade.id as modalidade_id',

                'users.id as usuario_id',
                'users.name as usuario_name',
                'users.email as usuario_email',


                'local.id as local_id',
                'local.logradouro as local_logradouro',
                'local.numero as local_numero',
                'local.complemento as local_complemento',
                'local.bairro as local_bairro',


                'comissao.tipo_comissao as comissao_id',
                'comissao.data as comissao_data',
                'comissao.portaria as comissao_portaria',
                'comissao.validade as comissao_validade',
                'comissao.tipo_comissao as comissao_tipo_comissao',
                'comissao.arquivo as comissao_arquivo',
                'comissao.arquivo_atual as comissao_arquivo_atual',
                'comissao.created_at as comissao_created_at',
                'comissao.updated_at as comissao_updated_at',


                )
            ->where('licitacao.id','=', $id)
            ->get();
        //
        // dd($licitacao);
        // return dd($request);
        
        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[1];

        return view('Painel.Licitacao.show',compact('user', 'licitacao'));
        // return view('Painel.Licitacao.show',compact('licitacao', 'user'));

    }

    public function edit($id)
    {
        //
        $modalidades = DB::table('modalidade')->select('id', 'descricao')->get();
        $locais = DB::table('local')->select('id', 'logradouro')->get();
        $comissoes = DB::table('comissao')->select('id', 'tipo_comissao')->get();

        $licitacao = DB::table('modalidade')
            ->join('licitacao', 'modalidade.id', '=', 'licitacao.id_modalidade')
            ->join('local', 'local.id', '=', 'licitacao.id_local')
            ->join('comissao', 'comissao.id', '=', 'licitacao.id_comissao')
            ->join('users', 'users.id', '=', 'licitacao.id_usuario')
            ->select(
                'licitacao.id as licitacao_id',
                'licitacao.edital as licitacao_edital',
                'licitacao.numeracao as licitacao_numeracao',
                'licitacao.data_criacao as licitacao_data_criacao',
                'licitacao.data_publicacao as licitacao_data_publicacao',
                'licitacao.data_abertura as licitacao_data_abertura',
                'licitacao.hora_criacao as licitacao_hora_criacao',
                'licitacao.hora_abertura as licitacao_hora_abertura',
                'licitacao.objeto as licitacao_objeto',
                'licitacao.local_entrega as licitacao_local_entrega',
                'licitacao.prazo_entrega as licitacao_prazo_entrega',
                'licitacao.condicoes_pagamento as licitacao_condicoes_pagamento',
                'licitacao.validade_proposta as licitacao_validade_proposta',
                'licitacao.processo_administrativo as licitacao_processo_administrativo',

                'modalidade.descricao as modalidade_descricao',
                'modalidade.id as modalidade_id',

                'users.id as usuario_id',
                'users.name as usuario_name',
                'users.email as usuario_email',


                'local.id as local_id',
                'local.logradouro as local_logradouro',
                'local.numero as local_numero',
                'local.complemento as local_complemento',
                'local.bairro as local_bairro',


                'comissao.tipo_comissao as comissao_id',
                'comissao.data as comissao_data',
                'comissao.portaria as comissao_portaria',
                'comissao.validade as comissao_validade',
                'comissao.tipo_comissao as comissao_tipo_comissao',
                'comissao.arquivo as comissao_arquivo',
                'comissao.arquivo_atual as comissao_arquivo_atual',
                'comissao.created_at as comissao_created_at',
                'comissao.updated_at as comissao_updated_at',


                )
            ->where('licitacao.id','=', $id)
            ->get();
        //
        // dd($licitacao);
        // return dd($request);
        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[1];

        return view('Painel.Licitacao.edit',compact('user', 'licitacao', 'modalidades', 'locais', 'comissoes'));
        // return view('Painel.Licitacao.show',compact('licitacao', 'user'));

    }


    public function update(Request $request, $id)
    {
        $data_atual= date('d-m-Y');

        $data_eng_posterior_calculada = date('Y-m-d', strtotime($data_atual. ' + 1 month'));
        $data_eng_posterior_calculada=date_create($data_eng_posterior_calculada);
        $data_pt_posterior_calculada = date_format($data_eng_posterior_calculada, "d-m-Y");

        $user = Auth()->User();
        if ($files = $request->file('file_edital')) {
            $destinationPath = 'file/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);
            $insert['file'] = "$profilefile";
        }
        $request->validate([
            'edital' => 'required',
            // 'id' => 'required|equals:',
            'numeracao' => 'required | max:8 | alpha_num',
            'data_criacao' => 'required|date|date_equals:'.$data_atual,
            'data_publicacao' => 'required|date|before:'. $data_pt_posterior_calculada.'|after:'.$data_atual,
            'data_abertura' => 'required',
            'hora_criacao' => 'required',
            'hora_abertura' => 'required',
            // 'file_edital' => 'required|mimes:pdf',
            // 'objeto' => 'required',png
            // 'local_entrega' => 'required',
            // 'prazo_entrega' => 'required',
            // 'condicoes_pagamento' => 'required',
            // 'validade_proposta' => 'required',
            'processo_administrativo' => 'required',
            'id_modalidade' => 'required|exists:modalidade,id',
            'id_usuario' => 'required| '.Rule::in([$user->id]),

            // 'id_local' => 'required',
            // 'id_comissao' => 'required',
            // 'created_at' => 'required',
            // 'updated_at' => 'required',
        ]);
        DB::table('licitacao')
        ->where('id', $id)
        ->update([
                // 'licitacao.id' => $request->input('id'),
                'licitacao.edital' => $request->input('edital'),

                'licitacao.numeracao' => $request->input('numeracao'),
                'licitacao.data_criacao' => $request->input('data_criacao'),
                'licitacao.data_publicacao' => $request->input('data_publicacao'),
                'licitacao.data_abertura' => $request->input('data_abertura'),
                'licitacao.hora_criacao' => $request->input('hora_criacao'),
                'licitacao.hora_abertura' => $request->input('hora_abertura'),
                'licitacao.objeto' => $request->input('objeto'),
                'licitacao.local_entrega' => $request->input('local_entrega'),
                'licitacao.prazo_entrega' => $request->input('prazo_entrega'),
                'licitacao.condicoes_pagamento' => $request->input('condicoes_pagamento'),
                'licitacao.validade_proposta' => $request->input('validade_proposta'),
                'licitacao.processo_administrativo' => $request->input('processo_administrativo'),

                // 'modalidade.descricao'=> $request->input('descricao'),
                'licitacao.id_modalidade'=> $request->input('id_modalidade'),

                // 'users.id',
                // 'users.name' => $request->input('name'),
                // 'users.email' => $request->input('email'),


                'licitacao.id_local'=> $request->input('id_local'),
                // 'local.logradouro'=> $request->input(''),
                // 'local.numero'=> $request->input(''),
                // 'local.complemento'=> $request->input(''),
                // 'local.bairro'=> $request->input(''),


                'licitacao.id_comissao' => $request->input('id_comissao'),
                // 'comissao.data as comissao_data',
                // 'comissao.portaria as comissao_portaria',
                // 'comissao.validade as comissao_validade',
                // 'comissao.tipo_comissao as comissao_tipo_comissao',
                // 'comissao.arquivo as comissao_arquivo',
                // 'comissao.arquivo_atual as comissao_arquivo_atual',
                // 'comissao.created_at as comissao_created_at',
                // 'comissao.updated_at as comissao_updated_at',

                'licitacao.file_edital' => $destinationPath.$profilefile,
            ]);

        // Licitacao::update($request->all());
        return redirect()->route('Painel.Licitacao.index')
                        ->with('success','Processo efetuado com sucesso.');
    }


    public function destroy($id)
    {
        DB::table('licitacao')->where('id', '=', $id)->delete();
        return redirect()->route('Painel.Licitacao.index')
                        ->with('success','Processo efetuado com sucesso.');
    }
}
