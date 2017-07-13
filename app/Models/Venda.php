<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = "vendas";

    protected $fillable = [
        'pontos',
        'dt_venda',
        'comentario',
        'quantidade',
        'cliente_id',
        'produto_id'
    ];
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
