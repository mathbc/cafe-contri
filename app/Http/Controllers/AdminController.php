<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $this->authorize('cadastrar', Produto::class);

        $produtos = Produto::orderBy('nome')
            ->withCount('produtoPedido')
            ->with(['produtoPedido'])
            ->paginate();

        return view('admin.listagem-produtos', compact('produtos'));
    }
}
