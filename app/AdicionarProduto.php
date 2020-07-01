<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdicionarProduto extends Model
{
    protected $fillable = ['nome_do_produto', 'codigo_do_produto', 'quantidade'];
}
