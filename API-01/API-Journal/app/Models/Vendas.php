<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $fillable = [
        'Nome_Prod',
        'Preco_Prod',
        'Descricao_Prod',
        'Data_Venda',
    ];
}
