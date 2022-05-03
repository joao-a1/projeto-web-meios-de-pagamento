<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Cliente;

class Cidade extends Model
{
    use HasFactory;
    protected $table = "credito";

    function clientes(){
        return $this->belongsTo(Cliente::class, 'id_cidade', 'id');
    }
}
