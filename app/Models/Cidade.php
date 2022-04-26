<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Cliente;

class Cidade extends Model
{
    use HasFactory;
    protected $table = "cidades";

    function clientes(){
        return $this->hasMany(Cliente::class, 'id_cidade', 'id');
    }
}
