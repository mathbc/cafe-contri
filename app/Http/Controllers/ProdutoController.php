<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::where('ativo', 1)->paginate();

        return view('produtos.index', compact('produtos'));
    }

    public function cadastrar(Produto $produto = null) {
        $this->authorize('cadastrar', Produto::class);

        return view('produtos.cadastro', compact('produto'));
    }

    public function salvar(Request $request, Produto $produto = null) {

        $this->authorize('cadastrar', Produto::class);

        $request->validate(
            [
                'nome' => 'required',
                'preco' => 'required|numeric',
            ]
        );

        $produto = $produto ?? new Produto();
        $produto->codigo = $request->get('codigo');
        $produto->nome = $request->get('nome');
        $produto->marca = $request->get('marca');
        $produto->quantidade = $request->get('quantidade');
        $produto->tipo_cobranca = $request->get('tipo_cobranca');
        $produto->preco = $request->get('preco');
        $produto->ativo = !empty($request->get('inativo')) ? 0 : 1;
        $produto->descricao = $request->get('descricao');

        $produto->save();

        return Redirect::back()->with('success', 'Dados salvos com sucesso!');
    }
}
