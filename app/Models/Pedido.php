<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    public function produtoPedido() {
        return $this->hasMany(ProdutoPedido::class, 'pedido_id', 'id');
    }
}
