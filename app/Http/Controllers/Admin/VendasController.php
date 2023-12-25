<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Pedidos;
use App\Models\Venda;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
       $response['pedidos']= Pedidos::get();
        return view('admin.vendas.list.index',$response);
    }

    public function estatistica(){
        $date = date('Y');
        $response['totalPedidos'] =  Venda:: where('status', 'Concluido')->whereYear('created_at', '=', $date)->sum('price');
        $response['totalPayments'] =  Venda::where('status', 'Concluido')->whereYear('created_at', '=', $date)->sum('price');;
        $jan = Venda:: where('status', 'Concluido')->whereMonth('created_at', '=', 01)->whereYear('created_at', '=', $date)->count();
        $response['jan'] = json_encode($jan);
        $fev = Venda::where('status', 'Concluido')->whereMonth('created_at', '=', 02)->whereYear('created_at', '=', $date)->count();
        $response['fev'] = json_encode($fev);
        $mar = Venda::where('status', 'Concluido')->whereMonth('created_at', '=', 03)->whereYear('created_at', '=', $date)->count();
        $response['mar'] = json_encode($mar);
        $abr = Venda::where('status', 'Concluido')->whereMonth('created_at', '=', 04)->whereYear('created_at', '=', $date)->count();
        $response['abr'] = json_encode($abr);
        $maio = Venda::where('status', 'Concluido')->whereMonth('created_at', '=', 05)->whereYear('created_at', '=', $date)->count();
        $response['maio'] = json_encode($maio);
        $jun = Venda::where('status', 'Concluido')->whereMonth('created_at', '=', 06)->whereYear('created_at', '=', $date)->count();
        $response['jun'] = json_encode($jun);
        $jul = Venda::where('status', 'Concluido')->whereMonth('created_at', '=', 07)->whereYear('created_at', '=', $date)->count();
        $response['jul'] = json_encode($jul);
        $ago = Venda::where('status', 'Concluido')->whereMonth('created_at', '=', '08')->whereYear('created_at', '=', $date)->count();
        $response['ago'] = json_encode($ago);
        /**d */
        $set = Venda::where('status', 'Concluido')->whereMonth('created_at', '=', '09')->whereYear('created_at', '=', $date)->count();
        $response['set'] = json_encode($set);
        $out = Venda::where('status', 'Concluido')->whereMonth('created_at', '=', '10')->whereYear('created_at', '=', $date)->count();
        $response['out'] = json_encode($out);
        $nov = Venda::where('status', 'Concluido')->whereMonth('created_at', '=', 11)->whereYear('created_at', '=', $date)->count();
        $response['nov'] = json_encode($nov);
        $dez = Venda::where('status', 'Concluido')->whereMonth('created_at', '=', 12)->whereYear('created_at', '=', $date)->count();
        $response['dez'] = json_encode($dez);
        return view('admin.vendas.estatistica.index',$response);
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
        $response['pedido']=    Pedidos::find($id);
    $response['vendas']= Venda::where('fk_pedido',$id)->get();
    $response['price']= Venda::where('fk_pedido',$id)->sum('price');

    return view('admin.vendas.details.index',$response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['pedido']=    Pedidos::find($id);

        return view('admin.vendas.edit.index',$response);
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

        Pedidos::find($id)->update([
            "nome"=>$request->nome,
            "telefone"=>$request->telefone,
            "endereco"=>$request->endereco,
            "status"=>$request->status,
        ]);
        //Logger


        Venda::where('fk_pedido',$id)->update([

            "status"=>$request->status,
        ]);

        $this->Logger->log('info', 'Editou uma venda com o identificador ' . $id);
        return redirect("admin/vendas/index")->with('edit', '1');
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
