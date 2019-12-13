<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Comissao;
use App\Membro;
class ComissaoController extends Controller
{
    public $request;
    public function __construct(Request $request)
    {
         $this->middleware('auth');
         $this->request = $request;
    }

    public function index(Request $request)
    {
        $comissao = DB::table('comissao')
            ->select(
                'comissao.id',
                'comissao.data',
                'comissao.portaria',
                'comissao.validade',
                'comissao.tipo_comissao',
                'comissao.arquivo',
                'comissao.arquivo_atual',
                )
            ->get();

        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[1];



        return view('Painel.Comissao.index', compact('comissao','user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

        // $membro = Membro::find(222);
        // $comissao = $membro->comissao;

        // echo "<h3>".$membro->nome."</h3>";
        // echo "<ul>";
        // foreach($comissao as $c){
        //     echo "<li>".$c->tipo_comissao."</li>";
        // }
        // echo "</ul>";
        // $membro->comissao()->attach($id);
    }


    public function create()
    {
        $comissao = Comissao::latest()->first();
        $comissao->id;

        $id_comissao_gerada = $comissao->id + 1;

        date_default_timezone_set('America/Cuiaba');

        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[1];
        // return view('Painel.Licitacao.index', compact('user','urlAtual'));

        // $licitacao = Licitacao::latest()->paginate(5);
        return view('Painel.Comissao.create',compact('id_comissao_gerada','user', 'urlAtual'));
    }

    public function store(Request $request)
    {
        //
        $data_atual= date('d-m-Y');

        $data_eng_posterior_calculada = date('Y-m-d', strtotime($data_atual. ' + 1 month'));
        $data_eng_posterior_calculada=date_create($data_eng_posterior_calculada);
        $data_pt_posterior_calculada = date_format($data_eng_posterior_calculada, "d-m-Y");

        $user = Auth()->User();

        // $request->validate([
        //     'id',
        //     'data' => 'required |date',
        //     'portaria' => 'required | max:8 |',
        //     'validade'=> 'required|date|before:'. $data_pt_posterior_calculada.'|after:'.$data_atual,
        //     'tipo_comissao' => 'required | max:1 | alpha_num',
        //     'arquivo' => 'required|mimes:pdf',
        //     // 'arquivo_atual',
        // ]);
        if ($files = $request->file('file_comissao')) {
            $destinationPath = 'file/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);
            $insert['file'] = "$profilefile";
        }
        // Licitacao::create($request->all());
        DB::table('comissao')->insert(
            [
                'id' => $request->input('id'),
                'data' => $request->input('data'),
                'portaria'=> $request->input('portaria'),
                'validade'=> $request->input('validade'),
                'tipo_comissao'=> $request->input('tipo_comissao'),
                'arquivo'=> $destinationPath.$profilefile,
                'arquivo_atual'=> '...',
            ]
        );
        return redirect()->route('Painel.Comissao.index')
                        ->with('success','Processo efetuado com sucesso.');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
