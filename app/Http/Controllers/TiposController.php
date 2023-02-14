<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Tipo;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    public function index(string $tipo)
    {
        $tipo = Tipo::where('slug', $tipo)->first();

        return view('produtos.index')->with('produtos', $tipo->produtos);
    }
}
