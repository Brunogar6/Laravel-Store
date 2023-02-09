<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $fillable = [
        'tipo',
        'marca',
        'nome',
        'preco',
        'desconto',
        'categorias_id'
    ];

    public function categorias()
    {
        return $this->hasMany(Categorias::class, 'categorias_id');
    }
}
