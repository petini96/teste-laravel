<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Comissao;
use App\Membro;
use App\MembroComissao;

class FormacaoComissaoController extends Controller
{
    public $request;
    public function __construct(Request $request)
    {
         $this->middleware('auth');
         $this->request = $request;
    }
    public function retornarMembrosAjaxComissao($id_comissao, $elemento, $token){
        // echo var_dump($token->value);
        
        $comissao = Comissao::find($id_comissao);
        $membro = $comissao->membro;
        
        echo "<form method=\"POST\" action=\"/Painel/FormacaoComissao\">";
        echo "<input type=\"hidden\" name=\"_token\" id=\"csrf-token\" value=\"$token\" />";
        echo "<input type=\"hidden\" name=\"id_comissao\" id=\"id_comisao\" value=\"$id_comissao\" />";

        echo "<div class=\"card\">";
                echo "<div class=\"card-header\">";
                    echo "<span style=\"font-size:2em; float:right\" onclick=\"fecharCard(this.parentElement.parentElement)\">
                        <i class=\"fas fa-window-close\"></i>
                    </span>";
                echo "</div>";

                echo "<div class=\"card-body\">";
                    echo "<ul>";
                    foreach($membro as $m){
                        echo "<li>".$m->nome."</li>";
                    }
                    echo "</ul>";
                echo "</div>";

                echo "<div class=\"card-footer\">";
                    echo "<button class=\"btn btn-primary\">Cadastrar </button>";
                    echo "<button class=\"btn btn-warning ml-2\">Editar </button>";
                echo "</div>";

        echo "</div>";
        echo "</form>";
        // return $membro;
        // $membro->comissao()->attach($id);
    }
    public function retornarMembrosAjax(Request $request, $q)
    {
        $membro = DB::table('membro')
            // ->join('membro_comissao', 'membro.id', '=', 'membro_comissao.id_membro')
            // ->join('comissao', 'comissao.id', '=', 'membro_comissao.id_comissao')
            // ->where('id_comissao')
            ->select(
                'membro.nome',
                'membro.id',
                // 'membro.id',
                )
            ->get();
            
        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[1];
        $a = array();
        $b = array();

        $hint ="";
        if ($q !== "") {
        $q = strtolower($q);
        $len=strlen($q);
            foreach($membro as $key => $value){
                if (stristr($q, substr($value->nome, 0, $len))) {
                    if ($hint === "") {
                        $hint = "<li id='ui-widget-content' onclick='adicionaMembro(this)' value='$value->id'>".$value->nome. "</li><br>";
                    } else {
                        $hint .=  "<li id='ui-widget-content' onclick='adicionaMembro(this)' value='$value->id'>".$value->nome. "</li> <br>";
                    }
                }
            }
       
        }

        return $hint === "" ? "Membro não existe..." : $hint;

    }

    public function index(Request $request)
    {
        $comissao = Comissao::find($request->input("id_comissao"));
        $membro_comissao = $comissao->membro;

        // return $request->input("id_comissao");
        $comissao = DB::table('comissao')
            ->select(
                'comissao.id',
                'comissao.tipo_comissao',
                'comissao.data',
                'comissao.portaria',
                )
            ->where('id', '=', $request->input('id_comissao'))
            ->get();

        $membro = DB::table('membro')
            ->join('membro_comissao', 'membro.id', '=', 'membro_comissao.id_membro')
            ->join('comissao', 'comissao.id', '=', 'membro_comissao.id_comissao')
            ->select(
                'membro.nome',
                // 'membro.id',
                )
            ->get();
        
        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[1];

        return view('Painel.FormacaoComissao.index', compact('urlAtual','user','comissao', 'membro_comissao'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
        return dd($request);
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
