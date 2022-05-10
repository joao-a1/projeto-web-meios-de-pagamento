<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    use HasFactory;
    protected $table = "transacoes";

    function status(){
        return $this->belongsTo(Status::class, 'status', 'nome');
    }

    function empresas(){
        return $this->belongsTo(Empresa::class, 'id_empresa', 'id');
    }
}
