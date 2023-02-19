<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use App\Models\Marca;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    public function index(string $tipo, Request $request)
    {
        $tipo = Tipo::where('slug', $tipo)->first();
        $tipos = Tipo::all();
        $produtos = $tipo->produtos;

        if ($request->has('categoria')) {

            $produtosQuery = Produto::with('categorias')->whereHas('categorias', function ($query) use ($request) {
                $query->whereIn('categoria_id', $request->categoria);
            })->get();

            $produtos = $produtosQuery->intersect($produtos);
        }

        if ($request->has('preco')) {

            $preco = explode(' ', $request->preco);

            $produtosQuery = Produto::where([
                ['preco', '>=', $preco[0]],
                ['preco', '<=', $preco[1]]

            ])->get();

            $produtos = $produtosQuery->intersect($produtos);
        }

        return view('produtos.index')->with(['produtos' => $produtos,'tipoPag' => $tipo, 'tipos'=> $tipos]);
    }
}
