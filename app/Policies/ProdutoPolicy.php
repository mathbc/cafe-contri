<?php

namespace App\Policies;

use App\Models\Produto;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class ProdutoPolicy
{
    use HandlesAuthorization;

    public function cadastrar() {
        return Auth::user()->tipo_permissao == 'ADMIN';
    }

    public function excluir(Produto $produto) {
        dd($produto);
    }
}
