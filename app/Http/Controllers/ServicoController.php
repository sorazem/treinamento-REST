<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;
use App\Http\Resources\Servico as ServicoResource;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicos = Servico::all();

        return $servicos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servico = new Servico;

        $servico->nome = $request->nome;
        $servico->preco = $request->preco;
        $servico->codigo = $request->codigo;

        $servico->save();
        return $servico;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function show(servico $servico)
    {
        return $servico;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, servico $servico)
    {
        $servico->nome = $request->nome;
        $servico->preco = $request->preco;
        $servico->codigo = $request->codigo;

        $servico->save();
        return $servico;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function destroy(servico $servico)
    {
        $servico->delete();
        return 'Serviço deletado com sucesso!';
    }

    public function showResource() {
        return new ServicoResource(Servico::find(1));
    }
}
