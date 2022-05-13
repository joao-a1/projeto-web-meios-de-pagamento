<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Transacao;

class Empresa extends Model
{
    use HasFactory;
    protected $table = "empresas";

    function transacoes(){
        return $this->hasMany(Transacao::class, 'id_empresa', 'id');
    }
}
