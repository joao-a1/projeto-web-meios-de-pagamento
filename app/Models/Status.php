<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table = "status";

    function transacao(){
        return $this->hasMany(Transacao::class, 'status', 'nome');
    }
}
