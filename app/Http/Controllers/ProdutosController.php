<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index ()
    {
        $produtos = Produto::all();


        return view('produtos.index')->with('produtos', $produtos);
    }
    public function show(int $produto)
    {
        $produtoModel = Produto::find($produto);

        if ($produtoModel === null){
            return response()->json(['menssage' => 'Not Found'], 404);
        }

        return view('produtos.show')->with('produto', $produtoModel);

    }
}
