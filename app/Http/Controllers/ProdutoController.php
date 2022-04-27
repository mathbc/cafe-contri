<?php

namespace App\Http\Controllers;

use App\Models\ImagemProduto;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

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
                'imagem' => 'image|mimes:jpeg,png,jpg|max:2048'
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

        if (isset($request->imagem) && $request->imagem) {
            $nomeArquivo = $request->file('imagem')->getClientOriginalName();
            $caminhoArquivo = $request->file('imagem')->store('public/produtos');

            $imagem = $produto->imagemProduto ?? new ImagemProduto();

            $imagem->produto_id = $produto->id;
            $imagem->nome = $nomeArquivo;
            $imagem->caminho = $caminhoArquivo;
            $imagem->save();
        }


        return Redirect::route('produtos.cadatro', $produto)->with('success', 'Dados salvos com sucesso!');
    }

    public function alterarStatusAtivo(Produto $produto, int $statusAtivo) {
        $produto->ativo = $statusAtivo;
        $produto->save();

        return response()->json($produto, 200);
    }
}
