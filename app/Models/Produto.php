<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produtos";

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'pontos',
        'preco_pontos'
    ];

    public function vendas()
    {
        return $this->hasMany(Venda::class);
    }
}
