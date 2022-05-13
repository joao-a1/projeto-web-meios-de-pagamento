<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Empresa;
use App\Models\Status;

class Transacao extends Model
{
    use HasFactory;
    protected $table = "transacoes";

    function status(){
        return $this->belongsTo(Status::class, 'id_status', 'id');
    }

    function empresa(){
        return $this->belongsTo(Empresa::class, 'id_empresa', 'id');
    }
}
