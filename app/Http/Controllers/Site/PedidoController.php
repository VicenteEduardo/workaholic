<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Pedidos;
use App\Models\Venda;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index(Request $request)
    {

        $pedido=Pedidos::create([

            "nome" => $request->nome,
            "telefone" => $request->telefone,
            "endereco" => $request->endereco,
            "total" => $request->total,
            "status" => "Pendente",
        ]);





foreach(session('cart') as $id => $details){

    Venda::create([

        "name" =>$details['name'],
        "quantity" => $details['quantity'],
        "price" =>$details['price'],
        "image" =>$details['image'],
        "fk_pedido" => $pedido->id,
    ]);
}

session()->forget('cart');


return redirect()->route('site.home')->with('create', '1');

    }
}
