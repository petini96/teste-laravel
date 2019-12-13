<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class PainelController extends Controller
{
    public $request;

    public function __construct(Request $request)
    {
         $this->middleware('auth');
         $this->request = $request;
    }

    public function index()
    {
        $user = Auth()->User();
        return view('Painel.index', compact('user'));
    }

}
