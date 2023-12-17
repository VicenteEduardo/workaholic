<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pedidos;
use App\Models\Venda;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $response['pedidos']= Pedidos::get();
        return view('admin.vendas.list.index',$response);
    }

    public function estatistica(){
        $date = date('Y');
        $response['totalPedidos'] =  Venda::whereYear('created_at', '=', $date)->sum('price');
        $response['totalPayments'] =  Venda::whereYear('created_at', '=', $date)->sum('price');;
        $jan = Venda::whereMonth('created_at', '=', 01)->whereYear('created_at', '=', $date)->count();
        $response['jan'] = json_encode($jan);
        $fev = Venda::whereMonth('created_at', '=', 02)->whereYear('created_at', '=', $date)->count();
        $response['fev'] = json_encode($fev);
        $mar = Venda::whereMonth('created_at', '=', 03)->whereYear('created_at', '=', $date)->count();
        $response['mar'] = json_encode($mar);
        $abr = Venda::whereMonth('created_at', '=', 04)->whereYear('created_at', '=', $date)->count();
        $response['abr'] = json_encode($abr);
        $maio = Venda::whereMonth('created_at', '=', 05)->whereYear('created_at', '=', $date)->count();
        $response['maio'] = json_encode($maio);
        $jun = Venda::whereMonth('created_at', '=', 06)->whereYear('created_at', '=', $date)->count();
        $response['jun'] = json_encode($jun);
        $jul = Venda::whereMonth('created_at', '=', 07)->whereYear('created_at', '=', $date)->count();
        $response['jul'] = json_encode($jul);
        $ago = Venda::whereMonth('created_at', '=', '08')->whereYear('created_at', '=', $date)->count();
        $response['ago'] = json_encode($ago);
        /**d */
        $set = Venda::whereMonth('created_at', '=', '09')->whereYear('created_at', '=', $date)->count();
        $response['set'] = json_encode($set);
        $out = Venda::whereMonth('created_at', '=', '10')->whereYear('created_at', '=', $date)->count();
        $response['out'] = json_encode($out);
        $nov = Venda::whereMonth('created_at', '=', 11)->whereYear('created_at', '=', $date)->count();
        $response['nov'] = json_encode($nov);
        $dez = Venda::whereMonth('created_at', '=', 12)->whereYear('created_at', '=', $date)->count();
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
