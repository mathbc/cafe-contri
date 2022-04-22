<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $maisPedidos = Produto::whereHas('produtoPedido')->withCount('produtoPedido')->orderBy('produto_pedido_count')->limit(3)->get();

        return view('index', compact('maisPedidos'));
    }
}
