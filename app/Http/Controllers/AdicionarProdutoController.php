<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdicionarProduto;
class AdicionarProdutoController extends Controller
{
    public function create()
    {
        return view('formAdicionarProduto');
    }

    public function store(Request $request)
    {
        $dadosValidados = $request->validate([
            'nome_do_produto' => 'required',
            'codigo_do_produto' => 'required',
            'quantidade' => 'required',
        ]);

        $Adpro = new AdicionarProduto;
        $Adpro->nomedoproduto = $dadosValidados['nome_do_produto'];
        $Adpro->codigodoproduto= $dadosValidados['codigo_do_produto'];
        $Adpro->quantidade = $dadosValidados['quantidade'];
        $Adpro->save();
        
        //$show = AdicionarProdutoController::create($dadosValidados);

        return redirect()->back()->with('success', 'Adicionar Produto Salvo com Sucesso');        
    }
}
