<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produto';

    public function produtoPedido() {
        return $this->hasMany(ProdutoPedido::class, 'produto_id', 'id');
    }

    public function imagemProduto() {
        return $this->hasOne(ImagemProduto::class, 'produto_id', 'id');
    }
}
