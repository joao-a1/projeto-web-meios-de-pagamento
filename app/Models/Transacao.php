<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    use HasFactory;
    protected $table = "transacao";

    function status(){
        return $this->belongsTo(Status::class, 'status', 'nome');
    }

    function empresas(){
        return $this->belongsTo(Status::class, 'id_empresa', 'id');
    }
}
