<?php

namespace App\Http\Controllers\Painel;
use Illuminate\Database\Eloquent;
use App\Membro;
use App\MembroComissao;
use App\Comissao;
use App\User;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Licitacao;
use App\Modalidade;
use App\Local;
use Illuminate\Support\Facades\DB;
use Redirect,Response,File;
use Illuminate\Validation\Rule;

class MembroController extends Controller
{

    public $request;
    public function __construct(Request $request)
    {
         $this->middleware('auth');
         $this->request = $request;
    }



    public function index()
    {
        //
        return 'ola';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
