<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class, 'tipo_id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }
}
