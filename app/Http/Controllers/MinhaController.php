<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class MinhaController extends Controller
{
    public function getProduto($id) {

      $produto = Produto::findorfail($id);

      return response()->json([$produto]);

    }


    public function criarProduto(Request $request) {

      $novoProduto = new Produto;

      $novoProduto->nome = $request->nome;
      if ($request->tipo){
        $novoProduto->tipo = $request->tipo;
      }
      $novoProduto->preco = $request->preco;
      $novoProduto->quantidade = $request->quantidade;

      $novoProduto->save();

    }

    public function atualizarProduto(Request $request, $id) {

      $produto = Produto::findorfail($id);

      if($request->nome){
        $produto->nome = $request->nome;
      }
      if($request->tipo){
        $produto->tipo = $request->tipo;
      }
      if($request->preco){
        $produto->preco = $request->preco;
      }
      if($request->quantidade){
        $produto->quantidade = $request->quantidade;
      }

      $produto->save();
    }

    public function deletarProduto($id){

      Produto::destroy($id);

    }
}
