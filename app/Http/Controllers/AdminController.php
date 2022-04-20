<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $produtos = Produto::orderBy('nome')->paginate();

        return view('admin.listagem-produtos', compact('produtos'));
    }
}
