<?php

namespace App\Http\Controllers;

use App\Parceiro;
use Illuminate\Http\Request;
use App\Http\Resources\Parceiro as ParceiroResource;

class ParceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parceiros = Parceiro::all();

        return $parceiros;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parceiro = new Parceiro;

        $parceiro->nome = $request->nome;
        $parceiro->CNPJ = $request->CNPJ;
        $parceiro->email = $request->email;

        $parceiro->save();
        return $parceiro;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\parceiro  $parceiro
     * @return \Illuminate\Http\Response
     */
    public function show(Parceiro $parceiro)
    {

        return $parceiro;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\parceiro  $parceiro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parceiro $parceiro)
    {
        $parceiro->nome = $request->nome;
        $parceiro->CNPJ = $request->CNPJ;
        $parceiro->email = $request->email;

        $parceiro->save();
        return $parceiro;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\parceiro  $parceiro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parceiro $parceiro)
    {
        $parceiro->delete();
        return 'Parceiro deletado com sucesso!';
    }

    public function showResource() {
        return new ParceiroResource(Parceiro::find(1));
    }
}
