<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Transacao;

class Status extends Model
{
    use HasFactory;
    protected $table = "status";

    function transacoes(){
        return $this->hasMany(Transacao::class, 'id_status', 'id');
    }
}
