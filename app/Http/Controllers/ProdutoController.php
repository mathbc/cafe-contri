<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::where('ativo', 1)->paginate();

        return view('produtos.index', compact('produtos'));
    }
}
