<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'dt_nascimento',
        'email',
        'celular',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'estado',
        'municipio'
    ];

    public function compras()
    {
        return $this->hasMany(Venda::class);
    }
}
