<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Cidade;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";

    function cidade(){
        return $this->belongsTo(Cidade::class, 'id_cidade', 'id');
    }
}
