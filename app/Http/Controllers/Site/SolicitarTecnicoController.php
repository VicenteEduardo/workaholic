<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\SolicitarTecnico;
use Illuminate\Http\Request;

class SolicitarTecnicoController extends Controller
{
    public function index(Request $request)
    {

        $pedido=SolicitarTecnico::create([

            "nome" => $request->nome,
            "telefone" => $request->telefone,
            "endereco" => $request->endereco,
            "total" => $request->total,
            "status" => "Pendente",
        ]);



        return redirect()->route('site.home')->with('create', '1');


}
}
