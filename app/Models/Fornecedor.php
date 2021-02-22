<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    public function empresa()
    {
        return $this->hasOne(Empresa::class, 'id', 'empresa');
    }
}
